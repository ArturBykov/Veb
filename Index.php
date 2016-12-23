<!DOCTYPE html>
<html>
    <head>
        <?php 
            $title = "All news";
            require_once "block/head.php";
            //$news = getNews(3);
            require_once "conn.php";
        ?>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        
        <script>
         /*   $(document).ready(function(){
                $(".slider").each(function(){
                    var obj = %(this);
                    $(obj).append("<div class='nav'></div>");
                    $(obj).find("li").each(function(){
                        $(obj).find(".nav").append("<span rel ='"+$(this).index()+"'></span>");
                        &(this).addClass("slider"+$(this).index());
                    });
                    $(obj).find("span").first().addClass("on");
                });
            });
            function sliderJS (obj, sl){
                var ul = $(sl).find("ul");
                var bl = $(sl).find("li.slider"+obj);
                var step = $(bl).width();
                $(ul).animate({marginLeft: "-"+step*obj}, 500);
            }
            $(document).on("click", ".slider .nav span", function(){
                var sl = $(this).closest(".slider");
                $(sl).find("span").removeClass("on");
                $(this).addClass("on");
                var obj = $(this).attr("rel");
                sliderJS(obj, sl);
                return false;
            });
        */        
        </script>
        
        <style type="text/css">
        /*
            .slider{
                z-index: 9;
                width: 90%;
                height: 290px;
                overflow: hidden;
                margin: 0 5 5px;
                position: relative;
            }
            .slider ul, .slider li{
                padding: 0;
                margin: 0;
                list-style: none;
            }
            .slider ul{
                width: 9999px;
            }
            .slider ul li{
                list-style-type: none;
                float: left;
                width: 700px;
                height: 290px;
            }
            .slider .nav{
                position: absolute;
                left: 15px;
                bottom: 12px;
            }
            .slider .nav span{
                opacity: 0.9;
                background: #fff;
                margin: 0 8px 0 0;
                width: 16px;
                height: 16px;
                border-radius: 8px;
                cursor: pointer;
                overflow: hidden;
                display: block;
                float: left;
                box-shadow: 0 1px 2px #000;
            }
            .slider .nav span.on{
                background: #2e9419;
            }
        */
        </style>        
        
    </head>
    <body>
        
         <?php 
            require_once "block/header.php";
        ?>
        
        
        
        <div class="wrap">
   	<header>
   		<label for="slide-1">Первый слайд</label>
   		<label for="slide-2">Второй слайд</label>
   		<label for="slide-3">Третий слайд</label>
 	</header>
    <input id="slide-1" type="radio" name="slides" checked>
    <section class="slide slide-one">
    	<h1>Заголовок Один</h1>
    </section>
    <input id="slide-2" type="radio" name="slides">
    <section class="slide slide-two">
    	<h1>Заголовок Два</h1>
    </section>
    <input id="slide-3" type="radio" name="slides">
    <section class="slide slide-three">
    	<h1>Заголовок Три</h1>
    </section>
   
</div>
        

         <?php 
            require_once "block/header.php"
        ?>
        
        
        <div id="wrapper">
            <div id="leftCol">
               <?php 
            require_once "block/header.php";
            require_once "conn.php";
            $link = mysqli_connect($host, $user, $password, $database)
                or die ("miss" . mysqli_error($link));
        
            $query = "SELECT * FROM news";
            $result = mysqli_query($link, $query) 
                or die("MISS" . mysqli_error($link));
            if($result){
                
                echo "OK";
            }
            
            $row  = mysqli_fetch_array($result);
        
            
            for($i = 0; $i < count($row); $i++){
                echo '<h2>'.$row[$i].'<h2>'; 
                
            }
        
            mysqli_close($link);
        
        ?>
                <div id="bigArticle">
                    <img src="img/i.jpg">
                    <h2>Article!</h2>
                    <p>
                        Tropical cyclones typically form over large bodies of relatively warm water. They derive their energy through the evaporation of water from the ocean surface, which ultimately recondenses into clouds and rain when moist air rises and cools to saturation. This energy source differs from that of mid-latitude cyclonic storms, such as nor'easters and European windstorms, which are fueled primarily by horizontal temperature contrasts. The strong rotating winds of a tropical cyclone are a result of the conservation of angular momentum imparted by the Earth's rotation as air flows inwards toward the axis of rotation. As a result, they rarely form within 5° of the equator.[5] Tropical cyclones are typically between 100 and 2,000 km (62 and 1,243 mi) in diameter.
                    </p>
                </div>
                
                <div id="iv"><p><a href="Index2.php">Next</a></p></div>
                <div class="clear"><br></div>
            ?>
                <div class="article">
                    <img src="img/2.jpg">
                    <h3>Article!</h3>
                    <p>
                       Tropical cyclones are areas of relatively low pressure in the troposphere, with the largest pressure perturbations occurring at low altitudes near the surface. Weather in the eye is normally calm and free of clouds, although the sea may be extremely violent
                    </p>
                </div>
                <div class="article">
                    <img src="img/1.jpg">
                    <h3>Article!</h3>
                    <p>
                        At the center of a mature tropical cyclone, air sinks rather than rises. For a sufficiently strong storm, air may sink over a layer deep enough to suppress cloud formation, thereby creating a clear "eye".
                    </p>
                </div>

            </div>
            
             <?php require_once "block/add.php"; ?>
        </div>
        
    </body>
    
     <?php require_once "block/footer.php"; ?>
</html>