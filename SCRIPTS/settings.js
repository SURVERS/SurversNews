window.onload = function() {
    document.addEventListener('keydown', function(e){
        if(e.code == "Escape"){
            HideDialog("DIALOG_INPUT");
        }
    })

    $("#textof1").click(function(){
        SendMessage("Подсказка", "Если хотите сбросить E-Mail то впишите символ - '-'", "info", 4000);
        ShowDialog("DIALOG_INPUT", 1, "Редактор EMAIL", "Введите новый E-Mail адрес:", "email", 144, "Далее >>");
    });
    $("#textof2").click(function(){
        UpdateSettings(2);
    });
    $(".save_settings").click(function(){
        var email = $("#textof1").text();
        var t_email = 0;
        switch($("#textof2").text()){
            case "Отключена":{
                t_email = 0;
                break;
            }
            default:{
                t_email = 1;
                break;
            }
        }
        $.ajax({
            url: "../PHP/updatesettings.php",
            data: {
                email: email,
                t_email: t_email
            },
            success: function(dat){
                window.location.href = '../../profile.php';
            }
        })
    })
    $("#exit_settings").click(function(){
        window.location.href = "../../profile.php";
    })
    window.onbeforeunload = function() {
        DeleteCookie('forsid');
        return false;
    };
};
