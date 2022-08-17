//---------- Скрипт создана команией SURVERS FAMILY and GUMBALL FAMILY ----------//
function setCookie(name, value, time = -1){
    // если time -1 то куки автоматически не удалиться..
    if(time == -1)
        document.cookie = `${name}=${value};`;
    else
        document.cookie = `${name}=${value}; max-age=${time}`;
}
function DeleteCookie(name){
    document.cookie = `${name}=""; max-age=0`;
}
function getCookie(name){
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}