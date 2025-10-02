/* ===============================================
# ヘッダー、ハンバーガーメニュー処理全体
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  const BODY_CLASS = "body-hidden";
  const OPEN_CLASS = "is-open";

  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  function openDrawer() {
    document.body.classList.add(BODY_CLASS);
    drawer.classList.add(OPEN_CLASS);
    hamburger.classList.add(OPEN_CLASS);
  }

  function closeDrawer() {
    if (!document.body.classList.contains(BODY_CLASS)) return;
    document.body.classList.remove(BODY_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    hamburger.classList.remove(OPEN_CLASS);
  }

  function toggleDrawer(event) {
    event.preventDefault();
    const isOpen = drawer.classList.contains(OPEN_CLASS);

    if (isOpen) {
      closeDrawer();
    } else {
      openDrawer();
    }
  }

  hamburger.addEventListener("click", toggleDrawer);

  drawer.addEventListener("click", (event) => {
    if (event.target.matches("a[href]")) {
      closeDrawer();
    }
  });

  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (mediaQuery.matches) closeDrawer();
    }, 150);
  });

  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) closeDrawer();
  });
});


/* ===============================================
# ヘッダー；スクロールでクラスを追加
# + PCのみ：.js-float-entry は「スクロール中のみ is-scroll」
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const floatEntries = document.querySelectorAll('.js-float-entry');

  const THRESHOLD = 50;
  const SCROLL_STOP_DELAY = 500;
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

  applyHeader();

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
    if (!PC_MEDIA.matches) return;
    floatEntries.forEach(el => el.classList.add('is-scroll'));
  };

  const removeFloatScrollClass = () => {
    floatEntries.forEach(el => el.classList.remove('is-scroll'));
  };

  const onScrollForFloat = () => {
    if (!PC_MEDIA.matches) {
      removeFloatScrollClass();
      return;
    }

    addFloatScrollClass();

    if (stopTimer) clearTimeout(stopTimer);
    stopTimer = setTimeout(() => {
      removeFloatScrollClass();
    }, SCROLL_STOP_DELAY);
  };

  window.addEventListener('scroll', onScrollForFloat, { passive: true });

  const handleMediaChange = () => {
    if (!PC_MEDIA.matches) {
      removeFloatScrollClass();
    }
  };
  PC_MEDIA.addEventListener?.('change', handleMediaChange);
  if (!PC_MEDIA.addEventListener) {
    PC_MEDIA.addListener(handleMediaChange);
  }
});


/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
function observeElements(selector, activeClass = "is-active", options = {}, keepActive = false) {
  const elements = document.querySelectorAll(selector);

  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add(activeClass);

        if (!keepActive) {
          observer.unobserve(entry.target);
        }
      } else {
        if (!keepActive) {
          entry.target.classList.remove(activeClass);
        }
      }
    });
  }

  const observer = new IntersectionObserver(handleIntersect, options);
  elements.forEach((element) => observer.observe(element));
}

function getRootMargin(pcMargin, spMargin) {
  return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
}
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

observeElements(".js-job-list", "is-active", { 
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
});