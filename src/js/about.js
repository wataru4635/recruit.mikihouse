/* ===============================================
  # YouTubeモーダル（複数動画対応）
  =============================================== */
  const modal = document.getElementById("youtubeModal");
  const iframe = document.getElementById("youtubeFrame");
  const triggers = document.querySelectorAll(".js-open-youtube");
  const closeBtn = document.querySelector(".youtube-modal__close");

  // URL/ID から動画IDを抽出（watch / youtu.be / shorts / 直接ID に対応）
  function extractVideoId(input) {
    if (!input) return "";
    // 直接ID（11文字）ならそのまま
    if (/^[a-zA-Z0-9_-]{11}$/.test(input)) return input;

    // URLパターン
    try {
      const u = new URL(input, location.origin);

      // 短縮 youtu.be/VIDEOID
      if (u.hostname.includes("youtu.be")) {
        const id = u.pathname.split("/").filter(Boolean)[0];
        if (id) return id;
      }

      // 通常 watch?v=VIDEOID
      if (u.searchParams.has("v")) {
        return u.searchParams.get("v");
      }

      // shorts/VIDEOID
      if (u.pathname.includes("/shorts/")) {
        const parts = u.pathname.split("/shorts/")[1];
        if (parts) return parts.split("/")[0];
      }

      // embed/VIDEOID
      if (u.pathname.includes("/embed/")) {
        const parts = u.pathname.split("/embed/")[1];
        if (parts) return parts.split("/")[0];
      }
    } catch (_) {
      // 相対や不正文字列でも無視して次へ
    }

    return "";
  }

  function buildEmbedSrc(videoId, params = {}) {
    const base = `https://www.youtube-nocookie.com/embed/${videoId}`;
    const q = new URLSearchParams({
      autoplay: 1,
      rel: 0,
      ...params,
    });
    return `${base}?${q.toString()}`;
  }

  function openModalWithVideo(input) {
    const videoId = extractVideoId(input);
    if (!videoId) return;

    modal.classList.add("show");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("is-hidden");

    const isMobile = window.innerWidth <= 768;
    const setSrc = () => {
      iframe.src = buildEmbedSrc(videoId);
    };

    if (isMobile) {
      setSrc();
    } else {
      setTimeout(setSrc, 300); // PCはフェード演出等の猶予
    }
  }

  function closeModal() {
    modal.classList.remove("show");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("is-hidden");
    setTimeout(() => {
      iframe.src = "";
    }, 300);
  }

  // イベント付与（複数サムネイル対応）
  triggers.forEach(btn => {
    btn.addEventListener("click", () => {
      openModalWithVideo(btn.dataset.video);
    });
  });

  // 背景クリック閉じ
  modal.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
  });

  // ボタン閉じ
  closeBtn.addEventListener("click", closeModal);

  // Esc キー閉じ
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.classList.contains("show")) {
      closeModal();
    }
  });

  /* ===============================================
  # データで見るミキハウス（カウントアップ）
  =============================================== */

  (() => {
    const root = document.querySelector('.js-data-view-count-up');
    if (!root) return;
  
    // ===== 調整用パラメータ =====
    const OBS_THRESHOLD     = 0.2;  // どれだけ見えたら発火するか（少し遅めに）
    const ITEM_STAGGER_MS   = 110;   // 各アイテムの遅延間隔
    const BASE_DURATION_MS  = 1300;  // ベースのカウント時間（全体的に少し長め）
    const VARIANCE_RATIO    = 0.25;  // 各数字ごとの時間のバラつき（自然さ）
  
    // ===== イージング：序盤を抑えて後半伸びる（delayed ease-out）=====
    // hold で最初の停滞率を調整。0.12～0.2くらいが"少しゆっくり"
    const delayedEaseOut = (t, hold = 0.16) => {
      if (t <= hold) return (t / hold) * 0.05;        // 序盤はほぼ止まっているように
      const u = (t - hold) / (1 - hold);
      return 1 - Math.pow(1 - u, 5);                  // easeOutQuint 部分
    };
  
    const prefersReduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
  
    const readTarget = (el) => {
      const attr = el.getAttribute('data-count-to');
      if (attr != null) return +attr;
      return +el.textContent.replace(/[^\d]/g, '');
    };
  
    const formatWithSpans = (num) => {
      const s = Number(num).toLocaleString('en-US');
      let html = '';
      for (const ch of s) {
        if (ch === ',') {
          html += `<span class="data-view__num-separator">,</span>`;
        } else {
          html += ch; // 数字やその他はそのまま
        }
      }
      return html;
    };    
  
    // 初期整形（0表示にしておく）
    const nums = [...root.querySelectorAll('.data-view__num')];
    nums.forEach(el => el.innerHTML = formatWithSpans(0));
  
    // 監視して、見えたら開始
    const io = new IntersectionObserver((entries) => {
      const e = entries[0];
      if (!e.isIntersecting) return;
  
      // 「入場演出」
      root.classList.add('is-animated');
      [...root.querySelectorAll('.data-view__item')].forEach((item, i) => {
        item.style.transitionDelay = `${Math.min(i * (ITEM_STAGGER_MS * 0.7), 420)}ms`;
      });
  
      startAllCounts();
      io.unobserve(root);
    }, { threshold: OBS_THRESHOLD });
    io.observe(root);
  
    function startAllCounts() {
      nums.forEach((el, i) => {
        const to = readTarget(el);
        const from = +(el.getAttribute('data-count-from') ?? 0);
  
        const base     = +(el.getAttribute('data-count-duration') ?? BASE_DURATION_MS);
        const variance = base * (Math.random() * VARIANCE_RATIO);
        const duration = prefersReduced ? 0 : Math.round(base + variance);
  
        // 数字自体も軽くスタッガー（アイテム演出より少し遅らせる）
        const delay = prefersReduced ? 0 : i * ITEM_STAGGER_MS;
  
        if (duration <= 0) {
          el.innerHTML = formatWithSpans(to);
          return;
        }
  
        setTimeout(() => animateCount(el, from, to, duration, delayedEaseOut), delay);
      });
    }
  
    function animateCount(el, from, to, duration, easeFn) {
      let startTs, prev = null;
      el.innerHTML = formatWithSpans(from);
  
      const step = (ts) => {
        if (!startTs) startTs = ts;
        const t = Math.min((ts - startTs) / duration, 1);
        const eased = easeFn(t);
        const val = Math.floor(from + (to - from) * eased);
  
        if (val !== prev) {
          el.innerHTML = formatWithSpans(val);
          prev = val;
        }
        if (t < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    }
  })();