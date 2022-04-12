var eventDetail = $("#eventDetailModal");
var eventTitle = eventDetail.find(".title");
var eventSubtitle = eventDetail.find(".subtitle");
var eventDescript = eventDetail.find(".description");
var bannerImg = eventDetail.find(".banner-img");
var logoImg = eventDetail.find(".logo-img");
var eventDate = eventDetail.find(".event-date");
var eventDateHidden = eventDetail.find(".event-date-hidden");
var startDate = eventDetail.find(".start-date");
var endDate = eventDetail.find(".end-date");
var eventRules = eventDetail.find(".event-rules");
var eventMap = eventDetail.find(".event-map");
var eventRegist = eventDetail.find(".event-regist");
var condWeight = eventDetail.find(".condtition-weight");
var condAge = eventDetail.find(".condtition-age");
var eventType = eventDetail.find(".type");

var countdownHandlerId = undefined;

// var eventRegist = eventDetail.find(".event-regist");

$("#events .readmore-event-trigger").on("click", function (e) {
	e.preventDefault();
	clearInterval(countdownHandlerId);
	var thisId = $(this).attr("atid");
	getEventDetails(thisId);
});

function getEventDetails(param) {
	$.ajax({
		url: BASEURL + "public/event-detail/" + param,
		type: "POST",
		data: { id: param },
		dataType: "json",
		success: function (response) {

			logoImg.attr("src","uploads/tournaments/" + response.tournament_id + "/" + response.logo);
			bannerImg.attr("src","uploads/tournaments/" + response.tournament_id + "/" + response.banner);
			eventRules.attr("href","uploads/tournaments/" + response.tournament_id + "/" + response.rules);
			eventRegist.attr("href",BASEURL + "tournament/show/" + response.tournament_id);
			eventMap.attr("href", response.venue_map);
			eventTitle.html(response.tournament_name);
			eventDescript.html(response.description);
			condWeight.html(response.min_weight + '-' + response.max_weight + ' Kg');
			condAge.html(response.min_age + '-' + response.max_age);
			eventType.html(response.type + " Elemination");

			eventDate.html(moment(response.event_date).format("LL"));
			startDate.html(moment(response.regist_date).format("LL"));
			endDate.html(moment(response.closed_date).format("LL"));


			var time = moment(response.event_date);
			var countDownDate = time.valueOf();

			countdownHandlerId = setInterval(function () {
				var now = new Date().getTime();
				var distance = countDownDate - now;
				var days    = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				document.getElementById("time-countdown").innerHTML =
					"<p class='time fw-bold me-3'>" +
					days +
					"d </p><p class='time fw-bold me-3'>" +
					hours +
					"h </p><p class='time fw-bold me-3'>" +
					minutes +
					"m </p><p class='time fw-bold me-3'>" +
					seconds +
					"s </p>";
				// If the count down is finished, write some text
				if (distance < 0) {
					clearInterval(countdownHandlerId);
					document.getElementById("time-countdown").innerHTML = "EXPIRED";
				}
			}, 1000);
		},
	});
}

