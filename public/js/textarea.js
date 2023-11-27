// let textarea1 = document.querySelectorAll("textarea");
// let clientHeight1 = textarea1.clientHeight;

// textarea1.addEventListener('input', ()=>{
//     textarea1.style.height = clientHeight1 + 'px';
//     let scrollHeight = textarea1.scrollHeight;
//     textarea1.style.height = scrollHeight + 'px';
// });

// let textarea2 = document.getElementsByClassName('right');
// let clientHeight2 = textarea2.clientHeight;

// textarea2.addEventListener('input', ()=>{
//     textarea2.style.height = clientHeight2 + 'px';
//     let scrollHeight = textarea2.scrollHeight;
//     textarea2.style.height = scrollHeight + 'px';
// });
window.addEventListener("DOMContentLoaded", () => {
  // textareaタグを全て取得
  const textareaEls = document.querySelectorAll("textarea");
  textareaEls.forEach((textareaEl) => {
    // デフォルト値としてスタイル属性を付与
    textareaEl.setAttribute("style", 'height: ${textareaEl.scrollHeight}px; overflow:hidden;');
    // inputイベントが発生するたびに関数呼び出し
    textareaEl.addEventListener("input", setTextareaHeight);
  });
  // textareaの高さを計算して指定する関数
  function setTextareaHeight() {
    this.style.height = "auto";
    this.style.height = `${this.scrollHeight}px`;
  }
});