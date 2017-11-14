
window.onload = function () {
var rect = document.getElementById('rect');
rect.onclick = function () {
  rect.classList.add("stayBigger");
  rect.classList.remove("beBigger");
};
};
