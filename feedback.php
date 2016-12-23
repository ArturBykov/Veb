<!DOCTYPE html>
<!-- saved from url=(0034)http://localhost/blog/feedback.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
<title>feedback</title>
<link href="./feedback1_files/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./feedback1_files/style(1).css">
<link rel="stylesheet" type="text/css" href="./feedback1_files/slider.css">      
    <script src="./feedback1_files/jquery.min.js.Без названия"></script>
         <script>
            $(document).ready (function(){
                $("#done").click (function(){
                    $('#messageShow').hide ();
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var subject = $("#subject").val();
                    var message = $("#message").val();
                    console.log(name);
                    var fail = "";
                    if(name.length < 3) 
                        fail = "Слишком кароткое имя";
                    else if (email.split ('@').length -1 == 0 || email.split ('.').length -1 == 0)
                        fail = "Вы ввели не коректный mail";
                    else if(message.length < 1) 
                        fail = "Слишком кароткое сообщение!";
                    if(fail !=""){
                        $('#messageShow').html (fail + "<div class = 'clear'><br></div>");
                        $('#messageShow').show();
                        return false;
                    }
                });
            });
        </script>
    </head>
    
    <body>
        
         <?php 
            require_once "block/header.php"
        ?>
        
        <div id="wrapper">
            <div id="leftCol">
                <input type="text" placeholder="Имя" id="name" name="name"><br>
                <input type="text" placeholder="Email" id="email" name="email"><br>
                <input type="text" placeholder="message inform" id="subject" name="subject"><br>
                <textarea name="message" id="message"></textarea><br>
                <div id="messageShow"> </div>
                <input type="button" name="done" id="done" value="Send">
            </div>
            
             <div id="rightCol">
    <div class="banner">
        <img src="./feedback1_files/baner1.jpg" alt="Baner" title="Baner">
    </div>
    <div class="banner">
        <img src="./feedback1_files/baner2.jpg" alt="Baner" title="Baner">
    </div>
                
</div>        </div>
        
    
    
     <footer>
    <div id="social">
        <a href="http://vk.com/" title="Vk" target="_blank">
            <img src="./feedback1_files/vk.png" alt="Vk" title="Vk">
        </a>
    </div>
        <div id="right">
            Все прова защищеный © 
            2016        </div>
</footer></body></html>