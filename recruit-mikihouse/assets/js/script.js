"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/* ===============================================
# ヘッダー；スクロールでクラスを追加
# + PCのみ：.js-float-entry は「スクロール中のみ is-scroll」
=============================================== */
document.addEventListener('DOMContentLoaded', function () {
  var _PC_MEDIA$addEventLis;
  var header = document.querySelector('.header');
  var floatEntries = document.querySelectorAll('.js-float-entry');
  var THRESHOLD = 50; // ヘッダーの発火位置(px)
  var SCROLL_STOP_DELAY = 500; // スクロール停止判定(ms)
  var PC_MEDIA = window.matchMedia('(min-width: 768px)');

  /* -------------------------------
  # ヘッダーの is-scroll 制御（既存仕様）
  ------------------------------- */
  var ticking = false;
  var applyHeader = function applyHeader() {
    if (!header) return;
    var y = window.pageYOffset || document.documentElement.scrollTop || 0;
    header.classList.toggle('is-scroll', y > THRESHOLD);
    ticking = false;
  };

  // 初期状態反映（中間位置スタートも想定）
  applyHeader();

  // rAF でスクロールイベント間引き
  window.addEventListener('scroll', function () {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(applyHeader);
    }
  }, {
    passive: true
  });

  /* -------------------------------
  # PC限定：.js-float-entry は「スクロール中のみ is-scroll」
  ------------------------------- */
  var stopTimer = null;
  var addFloatScrollClass = function addFloatScrollClass() {
    // PCのみ有効
    if (!PC_MEDIA.matches) return;
    floatEntries.forEach(function (el) {
      return el.classList.add('is-scroll');
    });
  };
  var removeFloatScrollClass = function removeFloatScrollClass() {
    floatEntries.forEach(function (el) {
      return el.classList.remove('is-scroll');
    });
  };
  var onScrollForFloat = function onScrollForFloat() {
    // PC以外は何もしない（万一付いていたら外す）
    if (!PC_MEDIA.matches) {
      removeFloatScrollClass();
      return;
    }

    // スクロール発生 → 付与
    addFloatScrollClass();

    // 停止判定のデバウンス
    if (stopTimer) clearTimeout(stopTimer);
    stopTimer = setTimeout(function () {
      // スクロールが止まったら外す
      removeFloatScrollClass();
    }, SCROLL_STOP_DELAY);
  };

  // スクロール時のハンドラ（ヘッダーと共存）
  window.addEventListener('scroll', onScrollForFloat, {
    passive: true
  });

  // 画面幅が切り替わった時の後始末（SP→PC/PC→SP）
  var handleMediaChange = function handleMediaChange() {
    if (!PC_MEDIA.matches) {
      // SPでは常に外しておく
      removeFloatScrollClass();
    }
    // PCに切り替わった直後は何もしない（スクロール開始で付与）
  };

  (_PC_MEDIA$addEventLis = PC_MEDIA.addEventListener) === null || _PC_MEDIA$addEventLis === void 0 ? void 0 : _PC_MEDIA$addEventLis.call(PC_MEDIA, 'change', handleMediaChange);
  // Safari等の古い実装向けフォールバック
  if (!PC_MEDIA.addEventListener) {
    PC_MEDIA.addListener(handleMediaChange);
  }
});

/* ===============================================
# アニメーション
// =============================================== */
function observeElements(selector) {
  var activeClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "is-active";
  var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
  var keepActive = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
  var elements = document.querySelectorAll(selector);
  function handleIntersect(entries, observer) {
    entries.forEach(function (entry) {
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
  var observer = new IntersectionObserver(handleIntersect, options);
  elements.forEach(function (element) {
    return observer.observe(element);
  });
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
  document.querySelectorAll(selector).forEach(function (element) {
    var text = element.textContent;
    element.setAttribute('aria-label', text);
    element.setAttribute('role', 'text');
    element.textContent = '';
    _toConsumableArray(text).forEach(function (_char, index) {
      var span = document.createElement('span');
      span.textContent = _char;
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
    var clone = el.cloneNode(true);
    clone.querySelectorAll("br").forEach(function (br) {
      return br.remove();
    });
    return clone.innerText.trim();
  }
  return el.innerText.trim();
}

// 複数の .translate-clean をまとめて処理
var targets = document.querySelectorAll(".translate-clean");
var textsForTranslate = Array.from(targets).map(function (el) {
  return getTextForTranslate(el);
});