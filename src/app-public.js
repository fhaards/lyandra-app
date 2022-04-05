var eventDetail   = $("#eventDetailModal");
var eventTitle 	  = eventDetail.find(".title");
var eventSubtitle = eventDetail.find(".subtitle");
var eventDescript = eventDetail.find(".description");
var bannerImg 	  = eventDetail.find(".banner-img");
var logoImg 	  = eventDetail.find(".logo-img");
var eventDate 	  = eventDetail.find(".event-date");

$("#events .readmore-event-trigger").on("click", function (e) {
	e.preventDefault();
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
			// console.log(response.tournament_name);
			// var imgSource = bannerImg.attr("src");
			logoImg.attr("src",'uploads/tournaments/'+response.tournament_id + '/' + response.logo);
			bannerImg.attr("src",'uploads/tournaments/'+response.tournament_id + '/' + response.banner);
			eventTitle.html(response.tournament_name);
			eventDescript.html(response.description);
			eventDate.html(response.event_date);
			// eventTitle.html(response[0].tournament_name);
		},
	});
}
