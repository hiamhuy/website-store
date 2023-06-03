function coppMenu() {
	var dptCategory = document.querySelector(".dpt-cat");
	var dptPlace = document.querySelector(".departments");
	dptPlace.innerHTML = dptCategory.innerHTML;

	var mainNav = document.querySelector(".header-nav nav");
	var navPlace = document.querySelector(".off-canvas nav");
	navPlace.innerHTML = mainNav.innerHTML;

	var topNav = document.querySelector(".header-top .wrapper");
	var topPlace = document.querySelector(".off-canvas .thetop-nav");
	topPlace.innerHTML = topNav.innerHTML;
}
coppMenu();

const menuButton = document.querySelector(".trigger");
const closeButton = document.querySelector(".t-close");
const addclass = document.querySelector(".site");

menuButton.addEventListener("click", () => {
	addclass.classList.toggle("showmenu");
});
closeButton.addEventListener("click", () => {
	addclass.classList.remove("showmenu");
});

const submenu = document.querySelectorAll(".has-child .icon-small");
submenu.forEach((menu) => {
	menu.addEventListener("click", toggle);
});
function toggle(e) {
	e.preventDefault();
	submenu.forEach((item) => {
		item != this ? item.closest(".has-child").classList.remove("expand") : null;
	});
	if (this.closest(".has-child").classList != "expand");
	this.closest(".has-child").classList.toggle("expand");
}

const swiper = new Swiper(".swiper", {
	loop: true,
	pagination: {
		el: ".swiper-pagination",
	},
});

//show search
const searchButton = document.querySelector(".t-search");
const tClose = document.querySelector(".search-close");
const showClass = document.querySelector(".site");

searchButton.addEventListener("click", () => {
	showClass.classList.toggle("showsearch");
});
tClose.addEventListener("click", () => {
	showClass.classList.remove("showsearch");
});

// page-single
//show dpt menu
const depatmentButton = document.querySelector(".dpt-cat .dpt-trigger");
const dptClass = document.querySelector(".site");

depatmentButton.addEventListener("click", () => {
	dptClass.classList.toggle("showdpt");
});

//product image slider
var productThumb = new Swiper(".small-image", {
	loop: true,
	spaceBetween: 10,
	slidesPerView: 3,
	freeMode: true,
	watchSlidesProgress: true,
	breakpoints: {
		480: {
			spaceBetween: 32,
		},
	},
});
var productBig = new Swiper(".big-image", {
	loop: true,
	autoHeight: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: productThumb,
	},
});

const divtoShow = ".mini-cart";
const divPopup = document.querySelector(divtoShow);
const divTrigger = document.querySelector(".cart-trigger");

divTrigger.addEventListener("click", () => {
	setTimeout(() => {
		if (!divPopup.classList.contains("show")) {
			divPopup.classList.add("show");
		}
	}, 250);
});
document.addEventListener("click", (e) => {
	const isClosest = e.target.closest(divtoShow);
	if (!isClosest && divPopup.classList.contains("show")) {
		divPopup.classList.remove("show");
	}
});
