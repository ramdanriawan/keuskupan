$(document).ready(function(){
	// untuk mengatasi form registrasi kepala keluarga
	$("#registrasi_kepala_keluarga").submit(function(){
		event.preventDefault();
		if($(this).find("#username").val() == "" || $(this).find("#username").val().indexOf(" ") > -1){
			alert("Username Tidak Boleh Kosong Atau Mengandung Spasi");
		}else if($(this).find("#password1").val() != $(this).find("#password2").val()){
			alert("Password1 dan Password2 harus sama!");
		}
		else{
			$(this).unbind("submit");
		}
	})

	//untuk mengatasi

})