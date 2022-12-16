// Hamburger menu open and close fuction
const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}
if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

function changeValue() {
  var price = Document.getElementsByClassName("price").value;
  price = parseInt(price);
  var num = Document.getElementsByClassName("num").value;
  num = parseInt(num);
  var total = num * price;
  Document.getElementsByClassName("total").input.innerHTML = total;
}
