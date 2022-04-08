var detailUs = $("#detailUserModal");
var username = detailUs.find(".user-username");
var nameUser = detailUs.find(".user-name");
var gender = detailUs.find(".user-gender");
var phone = detailUs.find(".user-phone");
var belt = detailUs.find(".user-belt");
var weight = detailUs.find(".user-weight");
var height = detailUs.find(".user-height");
var address = detailUs.find(".user-address");
var photo = detailUs.find(".user-photo");
var contingentName = detailUs.find(".user-contingent");
// var userStatus      = detailUs.find(".userStatus");
// var userId = detailUs.find(".userId");
// var contingentAddress = detailUs.find(".contingentAddress");

function detailUser(param) {
	$.ajax({
		url: BASE_URL + "user/detail/" + param,
		type: "GET",
		data: { id: param },
		dataType: "json",
		success: function (response) {

            if(response.photo === null){
                photo.attr("src", BASE_URL + "uploads/profile/default.png");
            } else {
                photo.attr("src", BASE_URL + "uploads/profile/"+ response.uid + "/"+ response.photo);
            }
			username.html(response.username);
			nameUser.html(response.name);
			gender.html(response.gender);
			phone.html(response.phone);
			belt.html(response.belt);
			weight.html(response.weight + " Kg");
			height.html(response.height + " cm");
			address.html(response.address);
			photo.html(response.photo);
			contingentName.html(response.contingent_name);
		},
	});
}
