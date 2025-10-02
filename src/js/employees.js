mixitup('#employees-list', {
  selectors: { target: '.mix' },
  animation: {
  effects: 'fade',            // scaleを外して高さの違和感を防止
  duration: 450,
  nudge: false,               // 隣接ターゲットを押しのける挙動を無効化
  animateResizeContainer: true,
  animateResizeTargets: true, // ターゲット自身の高さ/幅変化もスムーズに
  clampHeight: false,
  clampWidth: false
}
});