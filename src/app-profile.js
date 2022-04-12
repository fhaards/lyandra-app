var bornDates = $("#profile-pages .born-date");
loadAgesFirst();

$("#profile-pages .edit-photo-profile-trigger").on("click", function (e) {
	e.preventDefault();
	$("#profile-pages .profile-account-forms").toggleClass("d-none");
	$("#profile-pages .profile-photo-forms").toggleClass("d-none");
});


function loadAges(getBd) {
	var getAg = Math.floor(moment().diff(getBd, "years", true));
	$("#profile-pages .profile-age").html(getAg);
}

function loadAgesFirst() {
	var loadBornDates = bornDates.val();
	if (loadBornDates !== '') {
		return loadAges(loadBornDates);
	}
}

bornDates.on("change", function (e) {
	e.preventDefault();
	var getBd = $(this).val();
	return loadAges(getBd);
});
