$("#tournament-detail .upload-bracket").on('click',function(e){
	e.preventDefault();
	$("#tournament-detail .upload-bracket-form").toggleClass("d-none");
	$("#tournament-detail .upload-bracket-info").addClass("d-none");
});

$("#tournament-detail .close-upload-bracket-form").on('click',function(e){
	e.preventDefault();
	$("#tournament-detail .upload-bracket-form").toggleClass("d-none");
    $("#tournament-detail .upload-bracket-info").removeClass("d-none");
});