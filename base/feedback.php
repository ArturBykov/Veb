<!DOCTYPE html>
<html>
    <head>
        <?php 
            $title = "feedback";
            require_once "block/head.php";
        ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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
        
        
        
        <?php require_once "block/header.php";?>
        
        <div id="wrapper">
            <div id="leftCol">
                <input type="text" placeholder="Имя" id="name" name="name"><br />
                <input type="text" placeholder="Email" id="email" name="email"><br />
                <input type="text" placeholder="message inform" id="subject" name="subject"><br />
                <textarea name="message" id="message"></textarea><br />
                <div id="messageShow"> </div>
                <input type="button" name="done" id="done" value="Send">
            </div>
            
             <?php require_once "block/add.php"; ?>
        </div>
        
    </body>
    
     <?php require_once "block/footer.php"; ?>
</html>