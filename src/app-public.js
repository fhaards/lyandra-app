let eventDetail = $("#event-detail");
var eventTitle = eventDetail.find(".title");
var eventSubtitle = eventDetail.find(".subtitle");
var eventDescript = eventDetail.find(".description");
var bannerImg = eventDetail.find(".banner-img");

$("#events .readmore").on("click", function (e) {
	e.preventDefault();
	$(".event-detail").removeClass("d-none");
	$("body").addClass("overflow-hidden");
	var thisId = $(this).attr("atid");
	getEventDetails(thisId);
});

$("#event-detail").on("click", ".close-detail", function (e) {
	e.preventDefault();
	$(".event-detail").addClass("d-none");
	$("body").removeClass("overflow-hidden");
});

function getEventDetails(param) {
	$.ajax({
		url: BASEURL + "public/event-detail/" + param,
		type: "POST",
		data: { id: param },
		dataType: "json",
		success: function (response) {
			// console.log(response.tournament_name);
			// var imgSource = bannerImg.attr("src");
			bannerImg.attr("src",'uploads/tournaments/'+response.tournament_id + '/' + response.banner);
			eventSubtitle.html(response.tournament_name);
			eventDescript.html(response.description);
			// eventTitle.html(response[0].tournament_name);
		},
	});
}
