$("#profile-pages .edit-photo-profile-trigger").on('click',function(e){
	e.preventDefault();
	$("#profile-pages .profile-account-forms").toggleClass("d-none");
	$("#profile-pages .profile-photo-forms").toggleClass("d-none");
});