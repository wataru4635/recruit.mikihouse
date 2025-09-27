/**
 * PostCSSプラグイン：grid-gapプロパティを削除する
 * このプラグインは、CSSからgrid-gapプロパティを見つけて削除します
 */
module.exports = () => {
  return {
    postcssPlugin: 'remove-grid-gap',
    Declaration(decl) {
      // grid-gapプロパティを検出して削除
      if (decl.prop === 'grid-gap') {
        decl.remove();
      }
    }
  };
};

module.exports.postcss = true;
