"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
/* ===============================================
# ヘッダー；スクロールでクラスを追加
=============================================== */
document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('.header');
  if (!header) return;
  var THRESHOLD = 50;
  var ticking = false;
  var apply = function apply() {
    var y = window.pageYOffset || document.documentElement.scrollTop || 0;
    var shouldAdd = y > THRESHOLD;
    header.classList.toggle('is-scroll', shouldAdd);
    ticking = false;
  };

  // 初期状態反映（リロードで中間位置スタートも想定）
  apply();

  // スクロールをrAFで間引き
  window.addEventListener('scroll', function () {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(apply);
    }
  }, {
    passive: true
  });
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