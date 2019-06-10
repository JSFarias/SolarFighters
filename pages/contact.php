<?php
$to = 'jhonatas.s.farias@gmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = <<<EMAIL

$message

---                 
FROM SOLAR FIGHTERS PAGE
From: $name
Email: $email
EMAIL;

$header = "From: $email";

if($_POST){
    if($name == '' || $email == '' || $subject == '' || $message == '')
        $feedback = "Fill all the blanks, please.";
    else{
        mail($to, $subject, $body, $header);
        $feedback = "Your message has been send, thank you!";
    }                    
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
	<link rel="icon" href="../images/Geral/imgPerfilSF.PNG" />
    <meta charset="utf-8" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://solarfighters.xyz/pages/characters.html">
    <meta property="og:title" content="Solar Fighters :: Characters">
    <meta property="og:site_name" content="Solar Fighters">
    <meta property="og:description" content="Conheça os heróis do game">
    <meta property="og:image" content="http://solarfighters.xyz/images/Geral/fb/fb_chars.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="450"> 
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="966242223397117"/>       

    <!--
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        -->


    <link href="../css/estilo-geral.css" rel="stylesheet" />
    <script src="../js/cookie.js"></script>

    <script>
        var arrLang1 = {
            'pt': {
                'contact': 'Contato',
                'msg1a': 'Que saber mais?',
                'msg1b': 'Tirar dúvidas?',
                'msg1c': 'Dar feedbacks?',
                'msg1d': 'Entre em contato, você receberá um retorno o mais rápido possível.',
                'your-name': '*Nome:',
                'your-email': '*Email:',
                'your-subject': '*Assunto:',
                'your-msg': '*Sua mensagem:',
            },
            'en': {
                'contact': 'Contact',
                'msg1a': 'Want to know more?',
                'msg1b': 'Have any doubts?',
                'msg1c': 'Wanna give feedbacks?',
                'msg1d': 'Get in touch, you will receive a return as soon as possible.',
                'your-name': '*Name:',
                'your-email': '*Email:',
                'your-subject': '*Subject:',
                'your-msg': '*Your message',
            }
        };

        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");

            //botoes
            var lang = readCookie("idioma");

            if (lang == null)
                lang = 'en';

            if (lang == 'pt')
                document.getElementById("submit").value = "Enviar";
            if (lang == 'en')
                document.getElementById("submit").value = "Send";

            //traduz
            $('.translate').click(function () {
                var lang = $(this).attr('id');

                if (lang == 'pt')
                    document.getElementById("submit").value = "Enviar";
                if (lang == 'en')
                    document.getElementById("submit").value = "Send";
            });
        });
    </script>        

    <style>
        body {
            background-image: url('../images/BGs/bg_main.jpg');            
            background-size:800px;
        }
        .container-mod {
            padding-top:160px;
            padding-left: 0;
            padding-right: 0;
        }
         label{
            font-size:12px;
        }
        .input{
            color:#202020;
            background-color:#f0f0f0;
            border-width:0;                        
            width:400px;
            padding: 6px 8px 6px 8px;
            margin-top:0;
            margin-bottom:12px;
            box-shadow:inset 0 0 10px rgba(0,0,0, .2);
        }       
        .input-single-line{
            height:30px;
        }
        .form-body{
            font-size:14px;
            margin:20px 35px 25px 0;
        }        
        .content{
            padding-top:10px;
            display:inline-block;
        }
        .txt-body1{
            padding: 10px 85px 10px 80px;
            text-align:center;            
            width:400px;            
        }        
        #feedback{
            padding: 60px 55px 40px 50px;
            text-align:center;                 
            font-size:14px;       
            color:#ff6a00;
            width:400px;          
        }        
        /*.msgs-col{
            padding-top:110px;
        }*/
        #contact{
            color:#FFF;
        }
        #submit{
            background-color:#303030;
            border-width:1px;
            color:#e0e0e0;
            border-color:#a0a0a0;
            width:100px;
        }
        #submit:hover{
            background-color:#fffaa1;
            font-weight:bold;
            color:#b64e0a;
            border-color:#ffa81e;
            filter: brightness(1.3);
        }
    </style>

</head>
<body>
    <!------------------------HEADER------------------>
    <img class="linha-degrade" src="../images/Geral/linha_degrade.png" />
    <div class="panel panel-heading">
        <div class="header">
            <div class="pull-left" id="header"></div>
            <!-------------------------------IDIOMAS-->
            <a class="translate pull-right" id="pt"><img class="idioma" src="../../images/Geral/linguas_pt.png" /></a>
            <a class="translate pull-right" id="en"><img class="idioma" src="../../images/Geral/linguas_en.png" /></a>
        </div>
    </div>       
    <img class="linha-degrade" src="../images/Geral/linha_degrade.png" />

    <!------------------------CONTAINER------------------>
    <div class="container container-mod">    
        <!------------------------CONTATO------------------>
        <h3 id="contact" class="lang" key="contact">Contact</h3>        
        <div class="content table-row">
            <div class="table-cell pull-left msgs-col">
                <p id="feedback"><?php echo $feedback; ?> </p>
                <p id="msg-contact" class="lang txt-body1" key="msg1a"></p>
                <p id="msg-contact" class="lang txt-body1" key="msg1b"></p>
                <p id="msg-contact" class="lang txt-body1" key="msg1c"></p>
                <p id="msg-contact" class="lang txt-body1" key="msg1d"></p>
                
            </div>
            <div class="table-cell pull-right">
                <form action="?" method="post" class="form-body pull-right">
                    <div>
                        <label for="name" class="lang" key="your-name"></label></br>
                        <input id="name" class="input input-single-line" name="name" type="text" value="" size="30" /></br>
                    </div>
                    <div>
                        <label for="email" class="lang" key="your-email"></label></br>
                        <input id="email" class="input input-single-line" name="email" type="text" value="" size="30" /></br>
                    </div>
                    <div>
                        <label for="subject" class="lang" key="your-subject"></label></br>
                        <input id="subject" class="input input-single-line" name="subject" type="text" value="" size="30" /></br>
                    </div>
                    <div>
                        <label for="message" class="lang" key="your-msg"></label></br>
                        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea></br>
                    </div>
                    <div>
                        <input id="submit" type="submit" class="lang pull-right" key="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-----------------------FOOTER----------------------->
    <div class="panel panel-footer">
        <div id="footer"></div>
    </div>

</body>
<!--google analytics-->
<?php include_once("analyticstracking.php") ?>
<!--google analytics-->
</html>
