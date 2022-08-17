function UpdateTextForInput(texts, id, id_text){
	var ids = "#textof" + id_text;
	switch(id){
		case 1:{
			if(texts == "-"){
				UpdateSettings(1, "Установить электронную почту", ids);
				SendMessage("Успешно", "Вы сбросили E-Mail адресс со своего аккаунта!", "success", 3000);
				SendMessage("Подсказка", "Не забудьте подтвердить свои настройки нажав кнопку - \"Отправить\"!", "info", 4000);
			}
			else{
				//var form_data = texts;
				$.ajax({
					url: "wrap.php",
					data: {form_data: texts},
					success: function(dat){
						switch(getCookie("result")){
							case "1":{
								SendMessage("Ошибка", ERROR1, "warning", 3000);
								break;
							}
							case "2":{
								SendMessage("Успешно", "Вы сохранили свой E-Mail!", "success", 3000);
								SendMessage("Подсказка", "Не забудьте подтвердить свои настройки нажав кнопку - \"Отправить\"!", "info", 4000);
								UpdateSettings(1, texts, ids);
								break;
							}
							default:{
								SendMessage("Ошибка", ERROR2, "warning", 3000);
								break;	
							}
						}
					}
				});
			}
			break;
		}
	}
}
function HideDialog(dialog_id){
	switch(dialog_id){
		case "DIALOG_INPUT":{
			$("#input_dialog").remove();
			$("#global_block").css({ "opacity":"10" });
			break;
		}
	}
	DeleteCookie('forsid');
}
function ShowDialog(dialog_id, dialog_forsid, caption, info, pl, mx, name_button_1){
	if(getCookie('forsid')) return HideDialog(getCookie('forsid'));
	var dialogs = document.querySelector("#dialogs");
	switch(dialog_id){
		case "DIALOG_INPUT":{
			setCookie('forsid', dialog_forsid);

			var divs = document.createElement("div");
			divs.id = "input_dialog";
			dialogs.appendChild(divs);
			var inputdialog = document.querySelector("#input_dialog");
			var g_text = document.createElement("h3");
			var div2 = document.createElement("div");
			var info_text = document.createElement("h4");
			var input = document.createElement("input");
			var button = document.createElement("button");
			var button2 = document.createElement("button");
			
			div2.id = "polosa2";
			info_text.innerHTML = info;
			g_text.innerHTML = caption;
			g_text.setAttribute("class", "text_input_global");
			info_text.setAttribute("class", "text_three");
			input.setAttribute("class", "input_dialogs");
			button.setAttribute("class", "confirm_input_dialog");
			button.innerHTML = name_button_1;
			button.setAttribute("onclick", "submitemail()");
			button2.setAttribute("class", "confirm_input_dialog");
			button2.innerHTML = "Закрыть";
			button2.setAttribute("onclick", "closedialog()");
			input.placeholder = pl;
			input.maxlength = mx;

			
			inputdialog.appendChild(div2);
			inputdialog.appendChild(g_text);
			inputdialog.appendChild(info_text);
			inputdialog.appendChild(input);
			inputdialog.appendChild(button);
			inputdialog.appendChild(button2);
			break;
		}
	}
}
function SendMessage(titl, texts, themes, times){
	new Toast({
  		title: titl,
  		text: texts,
  		theme: themes,
  		autohide: true,
  		interval: times
	});
}
function UpdateSettings(id, value = -1, id_text = -1){
	switch(id){
		case 1:{
			$(id_text).text(value);
			HideDialog("DIALOG_INPUT");
			break;
		}
		case 2:{
			if($("#textof1").text() == "Установить электронную почту") return SendMessage("Ошибка", "Привяжите e-mail!", "warning", 3000);
			if($("#textof2").text() == "Отключена") return $("#textof2").text("Включена");
			if($("#textof2").text() == "Включена") return $("#textof2").text("Отключена");
			break;
		}
	}
}
function submitemail(){
	// да я сделал тупо, типа onclick добавил, это старое говно, но почему то не работало на $(класс).click...
	var id_user = getCookie('forsid');
    if($(".input_dialogs").val().length < 1) return alert(ERROR3);
    UpdateTextForInput($(".input_dialogs").val(), 1, id_user);
}
function closedialog(){
	return HideDialog("DIALOG_INPUT");
}