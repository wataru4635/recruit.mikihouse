/* ===============================================
# ヘッダー；スクロールでクラスを追加
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  if (!header) return;

  const THRESHOLD = 50;
  let ticking = false;

  const apply = () => {
    const y = window.pageYOffset || document.documentElement.scrollTop || 0;
    const shouldAdd = y > THRESHOLD;
    header.classList.toggle('is-scroll', shouldAdd);
    ticking = false;
  };

  // 初期状態反映（リロードで中間位置スタートも想定）
  apply();

  // スクロールをrAFで間引き
  window.addEventListener('scroll', () => {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(apply);
    }
  }, { passive: true });
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