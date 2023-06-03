window.onload = function () {
	document.querySelector(".site").classList.toggle("showmodal");
	const backtotop = document.querySelector(".backtotop");
	backtotop.style.display = "none";
};
document.querySelector(".modalclose").addEventListener("click", () => {
	document.querySelector(".site").classList.remove("showmodal");
});
