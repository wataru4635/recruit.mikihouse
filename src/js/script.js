/* ===============================================
# ヘッダー；スクロールでクラスを追加
# + PCのみ：.js-float-entry は「スクロール中のみ is-scroll」
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const floatEntries = document.querySelectorAll('.js-float-entry');

  const THRESHOLD = 50;              // ヘッダーの発火位置(px)
  const SCROLL_STOP_DELAY = 500;     // スクロール停止判定(ms)
  const PC_MEDIA = window.matchMedia('(min-width: 768px)');

  /* -------------------------------
  # ヘッダーの is-scroll 制御（既存仕様）
  ------------------------------- */
  let ticking = false;
  const applyHeader = () => {
    if (!header) return;
    const y = window.pageYOffset || document.documentElement.scrollTop || 0;
    header.classList.toggle('is-scroll', y > THRESHOLD);
    ticking = false;
  };

  // 初期状態反映（中間位置スタートも想定）
  applyHeader();

  // rAF でスクロールイベント間引き
  window.addEventListener('scroll', () => {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(applyHeader);
    }
  }, { passive: true });

  /* -------------------------------
  # PC限定：.js-float-entry は「スクロール中のみ is-scroll」
  ------------------------------- */
  let stopTimer = null;

  const addFloatScrollClass = () => {
    // PCのみ有効
    if (!PC_MEDIA.matches) return;
    floatEntries.forEach(el => el.classList.add('is-scroll'));
  };

  const removeFloatScrollClass = () => {
    floatEntries.forEach(el => el.classList.remove('is-scroll'));
  };

  const onScrollForFloat = () => {
    // PC以外は何もしない（万一付いていたら外す）
    if (!PC_MEDIA.matches) {
      removeFloatScrollClass();
      return;
    }

    // スクロール発生 → 付与
    addFloatScrollClass();

    // 停止判定のデバウンス
    if (stopTimer) clearTimeout(stopTimer);
    stopTimer = setTimeout(() => {
      // スクロールが止まったら外す
      removeFloatScrollClass();
    }, SCROLL_STOP_DELAY);
  };

  // スクロール時のハンドラ（ヘッダーと共存）
  window.addEventListener('scroll', onScrollForFloat, { passive: true });

  // 画面幅が切り替わった時の後始末（SP→PC/PC→SP）
  const handleMediaChange = () => {
    if (!PC_MEDIA.matches) {
      // SPでは常に外しておく
      removeFloatScrollClass();
    }
    // PCに切り替わった直後は何もしない（スクロール開始で付与）
  };
  PC_MEDIA.addEventListener?.('change', handleMediaChange);
  // Safari等の古い実装向けフォールバック
  if (!PC_MEDIA.addEventListener) {
    PC_MEDIA.addListener(handleMediaChange);
  }
});


/* ===============================================
# アニメーション
// =============================================== */
function observeElements(selector, activeClass = "is-active", options = {}, keepActive = false) {
  const elements = document.querySelectorAll(selector);

  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add(activeClass);

        // keepActive が false の場合は一度だけ発火
        if (!keepActive) {
          observer.unobserve(entry.target);
        }
      } else {
        // keepActive が true の場合は外さない
        if (!keepActive) {
          entry.target.classList.remove(activeClass);
        }
      }
    });
  }

  const observer = new IntersectionObserver(handleIntersect, options);
  elements.forEach((element) => observer.observe(element));
}

// rootMargin をスマホ／PCで切り替える関数
function getRootMargin(pcMargin, spMargin) {
  return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
}

// 各要素に適用
observeElements(".js-fade-in", "is-active", { 
  rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px") 
});

observeElements(".js-fade-up", "is-active", { 
  rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px") 
});

observeElements(".js-clip-img", "is-active", { 
  rootMargin: getRootMargin("0px 0px -30% 0px", "0px 0px -15% 0px") 
});

observeElements(".js-scaleImg", "is-active", { 
  rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -5% 0px") 
});

observeElements(".js-text-animate", "is-active", { 
  rootMargin: getRootMargin("0px 0px -30% 0px", "0px 0px -15% 0px") 
});

observeElements(".js-top-person-list", "is-active", { 
  rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -5% 0px") 
});

observeElements(".js-clip-item", "is-active", { 
  rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px") 
});

// keepActive = true の場合
observeElements(".js-line-bg01", "is-active", { 
  rootMargin: getRootMargin("0px 0px -30% 0px", "0px 0px -20% 0px") 
}, true);

observeElements(".js-line-bg02", "is-active", { 
  rootMargin: getRootMargin("0px 0px -40% 0px", "0px 0px -25% 0px") 
}, true);

observeElements(".js-line-bg03", "is-active", { 
  rootMargin: getRootMargin("0px 0px -40% 0px", "0px 0px -25% 0px") 
}, true);

observeElements(".js-content-img", "is-active", { 
  rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px") 
});

observeElements(".js-gallery-img", "is-active", { 
  rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px") 
});

  // =======================
  // 文字を1文字ずつ <span> に分割
  // =======================
  function wrapTextInSpans(selector) {
    document.querySelectorAll(selector).forEach(element => {
      const text = element.textContent;
      element.setAttribute('aria-label', text);
      element.setAttribute('role', 'text');
      element.textContent = '';
      [...text].forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.setProperty('--index', index);
        span.setAttribute('aria-hidden', 'true');
        element.appendChild(span);
      });
    });
  }
  wrapTextInSpans(".js-text-split");

  /* ===============================================
  # テキストをクリーンにする；翻訳用
  =============================================== */
// translate-clean が付いている要素からは <br> を除いてテキストを取得
function getTextForTranslate(el) {
  if (!el) return "";

  if (el.classList.contains("translate-clean")) {
    const clone = el.cloneNode(true);
    clone.querySelectorAll("br").forEach(br => br.remove());
    return clone.innerText.trim();
  }

  return el.innerText.trim();
}

// 複数の .translate-clean をまとめて処理
const targets = document.querySelectorAll(".translate-clean");
const textsForTranslate = Array.from(targets).map(el => getTextForTranslate(el));