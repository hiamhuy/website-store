// stock product bar width percentage
var stocks = document.querySelectorAll(".products .stock");
for (let x = 0; x < stocks.length; x++) {
	let stock = stocks[x].dataset.stock;
	let available = stocks[x].querySelector(".qty-available").innerHTML;
	let sold = stocks[x].querySelector(".qty-sold").innerHTML;
	let percent = (sold * 100) / stock;

	stocks[x].querySelector(".available").style.width = percent + "%";
}
