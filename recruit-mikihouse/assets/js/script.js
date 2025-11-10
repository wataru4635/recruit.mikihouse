"use strict";

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
  drawer.addEventListener("click", event => {
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
# ヘッダー、フローティングボタンのスクロール制御
=============================================== */
document.addEventListener('DOMContentLoaded', () => {
  var _PC_MEDIA$addEventLis;
  const header = document.querySelector('.header');
  const floatEntries = document.querySelectorAll('.js-float-entry');
  const floatEntryBtnSp = document.querySelector('.float-entry-btn-sp');
  const THRESHOLD = 50;
  const SCROLL_STOP_DELAY = 2000;
  const PC_MEDIA = window.matchMedia('(min-width: 768px)');
  let lastScrollY = 0;
  let ticking = false;
  let spTimer = null;

  /* -------------------------------
  # スクロール方向の検出とヘッダー・フローティングボタンの制御
  ------------------------------- */
  const handleScroll = () => {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(() => {
        const currentScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
        const isScrollingDown = currentScrollY > lastScrollY;
        const isScrolled = currentScrollY > THRESHOLD;
        if (header && PC_MEDIA.matches && isScrolled) {
          if (isScrollingDown) {
            header.classList.add('is-hidden');
          } else {
            header.classList.remove('is-hidden');
          }
        } else if (header && !PC_MEDIA.matches) {
          header.classList.toggle('is-scroll', isScrolled);
        }
        if (PC_MEDIA.matches && floatEntries.length > 0 && isScrolled) {
          if (isScrollingDown) {
            floatEntries.forEach(el => el.classList.add('is-scroll'));
          } else {
            floatEntries.forEach(el => el.classList.remove('is-scroll'));
          }
        } else if (!PC_MEDIA.matches) {
          floatEntries.forEach(el => el.classList.remove('is-scroll'));
        }
        if (!PC_MEDIA.matches && floatEntryBtnSp && isScrolled && isScrollingDown) {
          floatEntryBtnSp.classList.add('is-scroll');
          if (spTimer) clearTimeout(spTimer);
          spTimer = setTimeout(() => {
            floatEntryBtnSp.classList.remove('is-scroll');
          }, SCROLL_STOP_DELAY);
        } else if (PC_MEDIA.matches && floatEntryBtnSp) {
          floatEntryBtnSp.classList.remove('is-scroll');
        }
        lastScrollY = currentScrollY;
        ticking = false;
      });
    }
  };
  const initializeElements = () => {
    const currentScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
    if (PC_MEDIA.matches) {
      if (header) header.classList.remove('is-scroll', 'is-hidden');
      if (floatEntryBtnSp) floatEntryBtnSp.classList.remove('is-scroll');
      floatEntries.forEach(el => el.classList.remove('is-scroll'));
    } else {
      if (header) {
        header.classList.remove('is-hidden');
        header.classList.toggle('is-scroll', currentScrollY > THRESHOLD);
      }
      if (floatEntryBtnSp) floatEntryBtnSp.classList.remove('is-scroll');
      floatEntries.forEach(el => el.classList.remove('is-scroll'));
    }
  };
  window.addEventListener('scroll', handleScroll, {
    passive: true
  });
  const handleMediaChange = () => {
    initializeElements();
    if (spTimer) {
      clearTimeout(spTimer);
      spTimer = null;
    }
  };
  (_PC_MEDIA$addEventLis = PC_MEDIA.addEventListener) === null || _PC_MEDIA$addEventLis === void 0 ? void 0 : _PC_MEDIA$addEventLis.call(PC_MEDIA, 'change', handleMediaChange);
  if (!PC_MEDIA.addEventListener) {
    PC_MEDIA.addListener(handleMediaChange);
  }
  initializeElements();
});

/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
  function observeElements(selector) {
    let activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
    let options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    let keepActive = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
    const elements = document.querySelectorAll(selector);
    function handleIntersect(entries, observer) {
      entries.forEach(entry => {
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
    elements.forEach(element => observer.observe(element));
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
});