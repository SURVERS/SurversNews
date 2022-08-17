$(".del_ava_css").click(function(){
	var texts = "tr";
	$.ajax({
		url: "../../SCRIPTS/PHP/deleteava.php",
		data: {form_data: texts},
		success: function(dat){
			window.location.href = '../../profile.php';
		}
	})
})

function updateAva(){
	SendMessage("Успешно", "Вы успешно загрузили аватарку, нажмите кнопку 'Загрузить >>', чтобы сохранить ее в профиле", "success", 4000);
}