$(".dataTable").DataTable();
$("#alert").removeClass("d-none");

tinymce.init({
	selector: ".tinymce",
});

setTimeout(() => {
	$(".alert").alert("close");
}, 4000);

function deleteConfirm(url) {
	$("#btn-delete").attr("href", url);
}

function changeStatusUser(url) {
	$("#changeStatusUserModal .form-sample").attr("action", url);
}

function updateParticipant(url, tourid) {
	$("#updateParticipantModal .form-sample").attr("action", url);
	$("#updateParticipantModal .tournamentId").val(tourid);
}

function joinTournamentModal(tourid, uid) {
	$("#joinTournamentModal .tourId").val(tourid);
	$("#joinTournamentModal .userId").val(uid);
}

// $("#auth-forms .regist-trigger").on('click',function(e){
// 	e.preventDefault();
// 	$("#auth-forms .login-auth").addClass("d-none");
// 	$("#auth-forms .regist-auth").removeClass("d-none");
// });

// $("#auth-forms .login-trigger").on('click',function(e){
// 	e.preventDefault();
// 	$("#auth-forms .login-auth").removeClass("d-none");
// 	$("#auth-forms .regist-auth").addClass("d-none");
// });
