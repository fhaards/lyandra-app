// Set the date we're counting down to
var countDownDate = new Date("Apr 30, 2022 01:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {
	// Get today's date and time
	var now = new Date().getTime();
	// Find the distance between now and the count down date
	var distance = countDownDate - now;
	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	// Display the result in the element with id="time-countdown"
	document.getElementById("time-countdown").innerHTML =
		"<span class='p-2 bg-light text-primary fw-bold rounded-2 text-sm me-2'>" +
		days +
		"d </span><span class='p-2 bg-light text-primary fw-bold rounded-2 text-sm me-2'>" +
		hours +
		"h </span><span class='p-2 bg-light text-primary fw-bold rounded-2 text-sm me-2'>" +
		minutes +
		"m </span><span class='p-2 bg-light text-primary fw-bold rounded-2 text-sm me-2'>" +
		seconds +
		"s </span>";
	// If the count down is finished, write some text
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("time-countdown").innerHTML = "EXPIRED";
	}
}, 1000);
