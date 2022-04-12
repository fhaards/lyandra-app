var navBars = $("#navbars");
var notifList = navBars.find(".notif-list");
var notifCountTx = navBars.find(".notif-count");
var notifBell = navBars.find(".notification-bell");
var clickNotif = navBars.find(".click-notif");
// var notifStatus = localStorage.getItem("notif_status");

showNotif(sessId);

function showNotif(sessId) {
	$.ajax({
		url: BASE_URL + "notification/minimal/" + sessId,
		type: "GET",
		data: { id: sessId },
		dataType: "json",
		success: function (response) {
			var listForNotif = "";
			var notifCount = response.length;

			if (notifCount !== 0) {
				notifBell.removeClass("d-none");
			} else {
				notifBell.addClass("d-none");
			}
			notifCountTx.html(notifCount);

			for (var i = 0; i < response.length; i++) {
				listForNotif += "";
				listForNotif +=
					'<a href="' +
					response[i].notif_url +
					'" class="dropdown-item preview-item py-3">';
				listForNotif += '<div class="preview-thumbnail">';
				listForNotif += '<i class="mdi mdi mdi-file-check text-primary"></i>';
				listForNotif += "</div>";
				listForNotif += '<div class="preview-item-content">';
				listForNotif +=
					'<h6 class="preview-subject fw-normal text-dark mb-1">' +
					response[i].notif_title +
					"</h6>";
				listForNotif +=
					'<p class="fw-light small-text mb-0">' +
					response[i].notif_msg +
					"</p>";
				listForNotif += "</div>";
				listForNotif += "</a>";
			}
			notifList.append(listForNotif);
		},
	});
}

// if(notifStatus === 0){
//     notifBell.removeClass("d-none");
// } else {
//     notifBell.addClass("d-none");
// }

// clickNotif.on("click", function(e){
//     e.preventDefault();
//     localStorage.setItem("notif_status","0");
// });

