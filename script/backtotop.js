const backtotop = document.querySelector(".backtotop");
window.onscroll = function () {
	if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
		backtotop.style.display = "block";
	} else {
		if (backtotop.classList.contains("block")) {
			backtotop.style.display = "block";
		}
		backtotop.style.display = "none";
	}
};

backtotop.addEventListener("click", function (e) {
	// window.scrollTo({ top: 0, behavior: "smooth" });
	e.preventDefault();
	var scrollToTop = window.setInterval(function () {
		var pos = window.pageYOffset;
		if (pos > 0) {
			window.scrollTo(0, pos - 20);
		} else {
			window.clearInterval(scrollToTop);
		}
	}, 4);
});
