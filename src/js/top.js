/* ===============================================
# 採用情報セクション；ホバーアニメーション
=============================================== */
// ---------- 設定 ----------
const FROM_COLOR = '#000000';
const TO_COLOR   = '#C4A552';
const FROM_STOP  = 95;    // %
const TO_STOP    = 95;    // %  好みで調整
const DURATION   = 250;   // ms

// ---------- 判定（スマホ/低モーションでは無効化） ----------
const canHover = matchMedia('(any-hover: hover)').matches;
const reduced  = matchMedia('(prefers-reduced-motion: reduce)').matches;
if (!(canHover && !reduced)) {
  // モバイル等：初期値だけセットして終了（アニメなし）
  document.querySelectorAll('.top-recruit__img-wrap').forEach(wrap => {
    wrap.style.setProperty('--grad-color', 'rgb(0,0,0)');
    wrap.style.setProperty('--grad-stop', FROM_STOP + '%');
  });
} else {
  // ---------- ユーティリティ ----------
  const hexToRgb = (hex) => {
    const x = hex.replace('#','');
    const n = parseInt(x.length === 3 ? x.split('').map(c=>c+c).join('') : x, 16);
    return { r:(n>>16)&255, g:(n>>8)&255, b:n&255 };
  };
  const rgbStr = (r,g,b) => `rgb(${r},${g},${b})`;

  // CSS の ease: cubic-bezier(0.25, 0.1, 0.25, 1) を簡易実装
  function ease(t){
    // BezierのYだけを近似（実務上十分な体感になります）
    const y1 = 0.1, y2 = 1.0;
    const c = 3 * y1;
    const b = 3 * (y2 - y1) - c;
    const a = 1 - c - b;
    return ((a * t + b) * t + c) * t;
  }

  function animateGradient(el, {
    fromColor = FROM_COLOR, toColor = TO_COLOR,
    fromStop  = FROM_STOP,  toStop  = TO_STOP,
    duration  = DURATION
  } = {}) {
    const fromC = hexToRgb(fromColor);
    const toC   = hexToRgb(toColor);
    const start = performance.now();

    // 多重起動対策
    if (el.__raf) cancelAnimationFrame(el.__raf);

    const tick = (now) => {
      const raw = Math.min((now - start) / duration, 1);
      const t = ease(raw);

      // 色補間
      const r = Math.round(fromC.r + (toC.r - fromC.r) * t);
      const g = Math.round(fromC.g + (toC.g - fromC.g) * t);
      const b = Math.round(fromC.b + (toC.b - fromC.b) * t);
      el.style.setProperty('--grad-color', rgbStr(r,g,b));

      // ストップ位置補間（%）
      const stop = (fromStop + (toStop - fromStop) * t).toFixed(2);
      el.style.setProperty('--grad-stop', stop + '%');

      if (raw < 1) el.__raf = requestAnimationFrame(tick);
    };
    el.__raf = requestAnimationFrame(tick);
  }

  // ---------- イベント付与（hover環境のみ） ----------
  document.querySelectorAll('.top-recruit__img-wrap').forEach(wrap => {
    // 初期値
    wrap.style.setProperty('--grad-color', 'rgb(0,0,0)');
    wrap.style.setProperty('--grad-stop', FROM_STOP + '%');

    const link = wrap.closest('.top-recruit__link') || wrap;

    link.addEventListener('mouseenter', () => {
      animateGradient(wrap, {
        fromColor: FROM_COLOR, toColor: TO_COLOR,
        fromStop : FROM_STOP,  toStop : TO_STOP,
        duration : DURATION
      });
    });

    link.addEventListener('mouseleave', () => {
      animateGradient(wrap, {
        fromColor: TO_COLOR, toColor: FROM_COLOR,
        fromStop : TO_STOP,  toStop : FROM_STOP,
        duration : DURATION
      });
    });
  });
}
