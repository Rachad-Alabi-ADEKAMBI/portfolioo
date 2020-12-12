var content = document.querySelector("#hamburger-content");
var sidebarBody = document.querySelector("#hamburger-sidebar-body");
var button = document.querySelector("hamburger-btn");
var overlay = document.querySelector("hamburger-overlay");
var activatedClass = "hamburger-activated";

sidebarBody.innerHTML = content.innerHTML;

button.addEventListener("click", function (e) {
  e.preventDefault;
  console.log(this.parentNode);
});
