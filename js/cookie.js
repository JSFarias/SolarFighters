function writeCookie(idioma, valor, dias) {
    var expira = "";

    if (dias) {
        var date = new Date();
        date.setTime(date.getTime() + (dias * 24 * 60 * 60 * 1000));
        expira = "; expira=" + date.toGMTString();
    }
    if (valor != "" && valor != null && valor != "null") {
        document.cookie = idioma + "=" + valor + expira + ";path=/";
    }
}

function readCookie(idioma) {
    var qualIdioma = idioma + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var c = cookies[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(qualIdioma) == 0)
            return c.substring(qualIdioma.length, c.length);
    }
    return null;
}

function eraseCookie(idioma) {
    writeCookie(idioma, "", -1);
}