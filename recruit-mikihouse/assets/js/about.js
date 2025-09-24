"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
/* ===============================================
  # YouTubeモーダル（複数動画対応）
  =============================================== */
var modal = document.getElementById("youtubeModal");
var iframe = document.getElementById("youtubeFrame");
var triggers = document.querySelectorAll(".js-open-youtube");
var closeBtn = document.querySelector(".youtube-modal__close");

// URL/ID から動画IDを抽出（watch / youtu.be / shorts / 直接ID に対応）
function extractVideoId(input) {
  if (!input) return "";
  // 直接ID（11文字）ならそのまま
  if (/^[a-zA-Z0-9_-]{11}$/.test(input)) return input;

  // URLパターン
  try {
    var u = new URL(input, location.origin);

    // 短縮 youtu.be/VIDEOID
    if (u.hostname.includes("youtu.be")) {
      var id = u.pathname.split("/").filter(Boolean)[0];
      if (id) return id;
    }

    // 通常 watch?v=VIDEOID
    if (u.searchParams.has("v")) {
      return u.searchParams.get("v");
    }

    // shorts/VIDEOID
    if (u.pathname.includes("/shorts/")) {
      var parts = u.pathname.split("/shorts/")[1];
      if (parts) return parts.split("/")[0];
    }

    // embed/VIDEOID
    if (u.pathname.includes("/embed/")) {
      var _parts = u.pathname.split("/embed/")[1];
      if (_parts) return _parts.split("/")[0];
    }
  } catch (_) {
    // 相対や不正文字列でも無視して次へ
  }
  return "";
}
function buildEmbedSrc(videoId) {
  var params = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var base = "https://www.youtube-nocookie.com/embed/".concat(videoId);
  var q = new URLSearchParams(_objectSpread({
    autoplay: 1,
    rel: 0
  }, params));
  return "".concat(base, "?").concat(q.toString());
}
function openModalWithVideo(input) {
  var videoId = extractVideoId(input);
  if (!videoId) return;
  modal.classList.add("show");
  modal.setAttribute("aria-hidden", "false");
  document.body.classList.add("is-hidden");
  var isMobile = window.innerWidth <= 768;
  var setSrc = function setSrc() {
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
  setTimeout(function () {
    iframe.src = "";
  }, 300);
}

// イベント付与（複数サムネイル対応）
triggers.forEach(function (btn) {
  btn.addEventListener("click", function () {
    openModalWithVideo(btn.dataset.video);
  });
});

// 背景クリック閉じ
modal.addEventListener("click", function (e) {
  if (e.target === modal) closeModal();
});

// ボタン閉じ
closeBtn.addEventListener("click", closeModal);

// Esc キー閉じ
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && modal.classList.contains("show")) {
    closeModal();
  }
});

/* ===============================================
# データで見るミキハウス（カウントアップ）
=============================================== */

(function () {
  var root = document.querySelector('.js-data-view-count-up');
  if (!root) return;

  // ===== 調整用パラメータ =====
  var OBS_THRESHOLD = 0.2; // どれだけ見えたら発火するか（少し遅めに）
  var ITEM_STAGGER_MS = 110; // 各アイテムの遅延間隔
  var BASE_DURATION_MS = 1300; // ベースのカウント時間（全体的に少し長め）
  var VARIANCE_RATIO = 0.25; // 各数字ごとの時間のバラつき（自然さ）

  // ===== イージング：序盤を抑えて後半伸びる（delayed ease-out）=====
  // hold で最初の停滞率を調整。0.12～0.2くらいが"少しゆっくり"
  var delayedEaseOut = function delayedEaseOut(t) {
    var hold = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0.16;
    if (t <= hold) return t / hold * 0.05; // 序盤はほぼ止まっているように
    var u = (t - hold) / (1 - hold);
    return 1 - Math.pow(1 - u, 5); // easeOutQuint 部分
  };

  var prefersReduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
  var readTarget = function readTarget(el) {
    var attr = el.getAttribute('data-count-to');
    if (attr != null) return +attr;
    return +el.textContent.replace(/[^\d]/g, '');
  };
  var formatWithSpans = function formatWithSpans(num) {
    var s = Number(num).toLocaleString('en-US');
    var html = '';
    var _iterator = _createForOfIteratorHelper(s),
      _step;
    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var ch = _step.value;
        if (ch === ',') {
          html += "<span class=\"data-view__num-separator\">,</span>";
        } else {
          html += ch; // 数字やその他はそのまま
        }
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
    return html;
  };

  // 初期整形（0表示にしておく）
  var nums = _toConsumableArray(root.querySelectorAll('.data-view__num'));
  nums.forEach(function (el) {
    return el.innerHTML = formatWithSpans(0);
  });

  // 監視して、見えたら開始
  var io = new IntersectionObserver(function (entries) {
    var e = entries[0];
    if (!e.isIntersecting) return;

    // 「入場演出」
    root.classList.add('is-animated');
    _toConsumableArray(root.querySelectorAll('.data-view__item')).forEach(function (item, i) {
      item.style.transitionDelay = "".concat(Math.min(i * (ITEM_STAGGER_MS * 0.7), 420), "ms");
    });
    startAllCounts();
    io.unobserve(root);
  }, {
    threshold: OBS_THRESHOLD
  });
  io.observe(root);
  function startAllCounts() {
    nums.forEach(function (el, i) {
      var _el$getAttribute, _el$getAttribute2;
      var to = readTarget(el);
      var from = +((_el$getAttribute = el.getAttribute('data-count-from')) !== null && _el$getAttribute !== void 0 ? _el$getAttribute : 0);
      var base = +((_el$getAttribute2 = el.getAttribute('data-count-duration')) !== null && _el$getAttribute2 !== void 0 ? _el$getAttribute2 : BASE_DURATION_MS);
      var variance = base * (Math.random() * VARIANCE_RATIO);
      var duration = prefersReduced ? 0 : Math.round(base + variance);

      // 数字自体も軽くスタッガー（アイテム演出より少し遅らせる）
      var delay = prefersReduced ? 0 : i * ITEM_STAGGER_MS;
      if (duration <= 0) {
        el.innerHTML = formatWithSpans(to);
        return;
      }
      setTimeout(function () {
        return animateCount(el, from, to, duration, delayedEaseOut);
      }, delay);
    });
  }
  function animateCount(el, from, to, duration, easeFn) {
    var startTs,
      prev = null;
    el.innerHTML = formatWithSpans(from);
    var step = function step(ts) {
      if (!startTs) startTs = ts;
      var t = Math.min((ts - startTs) / duration, 1);
      var eased = easeFn(t);
      var val = Math.floor(from + (to - from) * eased);
      if (val !== prev) {
        el.innerHTML = formatWithSpans(val);
        prev = val;
      }
      if (t < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }
})();