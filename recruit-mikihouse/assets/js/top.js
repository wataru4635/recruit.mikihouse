"use strict";

/* ===============================================
# 採用情報セクション；ホバーアニメーション
=============================================== */
// ---------- 設定 ----------
var FROM_COLOR = '#000000';
var TO_COLOR = '#C4A552';
var FROM_STOP = 95; // %
var TO_STOP = 95; // %  好みで調整
var DURATION = 250; // ms

// ---------- 判定（スマホ/低モーションでは無効化） ----------
var canHover = matchMedia('(any-hover: hover)').matches;
var reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;
if (!(canHover && !reduced)) {
  // モバイル等：初期値だけセットして終了（アニメなし）
  document.querySelectorAll('.top-recruit__img-wrap').forEach(function (wrap) {
    wrap.style.setProperty('--grad-color', 'rgb(0,0,0)');
    wrap.style.setProperty('--grad-stop', FROM_STOP + '%');
  });
} else {
  // CSS の ease: cubic-bezier(0.25, 0.1, 0.25, 1) を簡易実装
  var ease = function ease(t) {
    // BezierのYだけを近似（実務上十分な体感になります）
    var y1 = 0.1,
      y2 = 1.0;
    var c = 3 * y1;
    var b = 3 * (y2 - y1) - c;
    var a = 1 - c - b;
    return ((a * t + b) * t + c) * t;
  };
  var animateGradient = function animateGradient(el) {
    var _ref = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {},
      _ref$fromColor = _ref.fromColor,
      fromColor = _ref$fromColor === void 0 ? FROM_COLOR : _ref$fromColor,
      _ref$toColor = _ref.toColor,
      toColor = _ref$toColor === void 0 ? TO_COLOR : _ref$toColor,
      _ref$fromStop = _ref.fromStop,
      fromStop = _ref$fromStop === void 0 ? FROM_STOP : _ref$fromStop,
      _ref$toStop = _ref.toStop,
      toStop = _ref$toStop === void 0 ? TO_STOP : _ref$toStop,
      _ref$duration = _ref.duration,
      duration = _ref$duration === void 0 ? DURATION : _ref$duration;
    var fromC = hexToRgb(fromColor);
    var toC = hexToRgb(toColor);
    var start = performance.now();

    // 多重起動対策
    if (el.__raf) cancelAnimationFrame(el.__raf);
    var tick = function tick(now) {
      var raw = Math.min((now - start) / duration, 1);
      var t = ease(raw);

      // 色補間
      var r = Math.round(fromC.r + (toC.r - fromC.r) * t);
      var g = Math.round(fromC.g + (toC.g - fromC.g) * t);
      var b = Math.round(fromC.b + (toC.b - fromC.b) * t);
      el.style.setProperty('--grad-color', rgbStr(r, g, b));

      // ストップ位置補間（%）
      var stop = (fromStop + (toStop - fromStop) * t).toFixed(2);
      el.style.setProperty('--grad-stop', stop + '%');
      if (raw < 1) el.__raf = requestAnimationFrame(tick);
    };
    el.__raf = requestAnimationFrame(tick);
  }; // ---------- イベント付与（hover環境のみ） ----------
  // ---------- ユーティリティ ----------
  var hexToRgb = function hexToRgb(hex) {
    var x = hex.replace('#', '');
    var n = parseInt(x.length === 3 ? x.split('').map(function (c) {
      return c + c;
    }).join('') : x, 16);
    return {
      r: n >> 16 & 255,
      g: n >> 8 & 255,
      b: n & 255
    };
  };
  var rgbStr = function rgbStr(r, g, b) {
    return "rgb(".concat(r, ",").concat(g, ",").concat(b, ")");
  };
  document.querySelectorAll('.top-recruit__img-wrap').forEach(function (wrap) {
    // 初期値
    wrap.style.setProperty('--grad-color', 'rgb(0,0,0)');
    wrap.style.setProperty('--grad-stop', FROM_STOP + '%');
    var link = wrap.closest('.top-recruit__link') || wrap;
    link.addEventListener('mouseenter', function () {
      animateGradient(wrap, {
        fromColor: FROM_COLOR,
        toColor: TO_COLOR,
        fromStop: FROM_STOP,
        toStop: TO_STOP,
        duration: DURATION
      });
    });
    link.addEventListener('mouseleave', function () {
      animateGradient(wrap, {
        fromColor: TO_COLOR,
        toColor: FROM_COLOR,
        fromStop: TO_STOP,
        toStop: FROM_STOP,
        duration: DURATION
      });
    });
  });
}