//preloader//
setTimeout(function () {
    $(".loader-bg").fadeToggle();
}, 1000);
//nav bar//
// const btn = document.querySelector("button.mobile-menu-button");
// const menu = document.querySelector(".mobile-menu");
// btn.addEventListener("click", () => {
//   menu.classList.toggle("closed");
//   const currentState = btn.getAttribute("data-state");
//   if (!currentState || currentState === "closed") {
//     btn.setAttribute("data-state", "opened");
//     btn.setAttribute("aria-expanded", "true");
//   } else {
//     btn.setAttribute("data-state", "closed");
//     btn.setAttribute("aria-expanded", "false");
//   }
// });
//add to cart tick//s
function toggle() {
    var blur = document.getElementById("blur");
    blur.classList.toggle("active");
    var popup = document.getElementById("popup");
    popup.classList.toggle("active");
}
//products details//
const imgs = document.querySelectorAll(".img-select a");
const imgBtns = [...imgs];
let imgId = 1;
imgBtns.forEach((imgItem) => {
    imgItem.addEventListener("click", (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});
function slideImage() {
    const displayWidth = document.querySelector(
        ".img-showcase img:first-child"
    ).clientWidth;
    document.querySelector(".img-showcase").style.transform = `translateX(${
        -(imgId - 1) * displayWidth
    }px)`;
}
window.addEventListener("resize", slideImage);

function myFunction(x) {
    x.classList.toggle("change");
}


/*  CODEPEN order list */

$(document).ready(function() {
  $(".accordion2").on("click", function() {
    $(this).toggleClass("active");
    $(this).next().slideToggle(200);
  });
});


/* nav bar */
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});


/* order-list Add button */

$('.mainBtn').click(function(){
    $(this).text(1);
    $(this).siblings('.minusBtn ,.plusBtn').css('display' ,'inline-block');
  });
  var counter = 0;
  $(".plusBtn").click(function(){
    var count = Number($(this).siblings('.mainBtn').text());
    $(this).siblings('.mainBtn').text(count +1);
  });
  $(".minusBtn").click(function(){
    var count = Number($(this).siblings('.mainBtn').text());
    $(this).siblings('.mainBtn').text(count -1);
  });