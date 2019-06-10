$(function () {
    //carrega no começo
    var lang = readCookie("idioma");

    if (lang == null) {
        lang = 'en';
        writeCookie("idioma", lang, 1);
    }

    $('.lang').each(function (index, element) {
        $(this).text(arrLang1[lang][$(this).attr('key')]);
    });

    //traduz
    $('.translate').click(function () {
        var lang = $(this).attr('id');        
        $('.lang').each(function (index, element) {
            $(this).text(arrLang1[lang][$(this).attr('key')]);
        });

        writeCookie("idioma", lang, 1);

    });   
});