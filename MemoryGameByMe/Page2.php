<!DOCTYPE html>
<html>
<head>
    <script src="Jquery/JQuery/jquery-3.1.1.js" type="text/javascript"></script>
  
        <title>DragonBall Memory</title>
<?php

$nom = $_GET['txtNom'];
{
echo 'HELLO! '.$nom ; echo ' BIENVENUE SUR LE JEU DE SARKIS'; 
};

?>
<body>
    <h1> <i> <b style="color: antiquewhite">Essayes de trouver le beaugoss </b></i> 
        <b style="color: antiquewhite">SARKIS</b>
        <i style=> <b style="color: antiquewhite"> en regroupant 2 images identiques de lui </b></i></h1>
            <div id="TableauCarte">
                <div id="carte1"><img src="images 150x150/images1.jpg" height="150" width="150" /></div>
            <div id="carte2"><img src="images 150x150/images2.jpg" height="150" width="150"  /></div>
            <div id="carte3"><img src="images 150x150/images3.jpg" height="150" width="150" /></div>
            <div id="carte4"><img src="images 150x150/images4.jpg" height="150" width="150" /></div>
            <div id="carte5"><img src="images 150x150/images5.jpg" height="150" width="150"  /></div>
            <div id="carte6"><img src="images 150x150/images6.jpg" height="150" width="150" /></div>
            <div id="carte7"><img src="images 150x150/images7.jpg" height="150" width="150" /></div>
            <div id="carte8"><img src="images 150x150/images8.jpg" height="150" width="150" /></div>
            <div id="carte9"><img src="images 150x150/images1.jpg" height="150" width="150" /></div>
            <div id="carte10"><img src="images 150x150/images2.jpg" height="150" width="150" /></div>
            <div id="carte11"><img src="images 150x150/images3.jpg" height="150" width="150" /></div>
            <div id="carte12"><img src="images 150x150/images4.jpg" height="150" width="150" /></div>
            <div id="carte13"><img src="images 150x150/images5.jpg" height="150" width="150" /></div>
            <div id="carte14"><img src="images 150x150/images6.jpg" height="150" width="150" /></div>
            <div id="carte15"><img src="images 150x150/images7.jpg" height="150" width="150" /></div>
            <div id="carte16"><img src="images 150x150/images8.jpg" height="150" width="150" /></div>
        </div>
</body>
<script type="text/javascript">
var ouvreCase = "";
var ouvreImage = "";
var compte = 0;
var trouve =  0;
$(
   function()
    {
           $('#refresh').on('click', function() 
                         {
                    location.reload();
                         }
                            );
            function tirageAleatoire (from, to)
                {
                    return Math.floor(Math.random() * (to - from + 1) + from);
                };

            function melange() 
                {
                var children = $("#TableauCarte").children();
                var child = $("#TableauCarte div:first-child");

                var tabImage = new Array();

                for (i=0; i<children.length; i++) 
                    {
                        tabImage[i] = $("#"+child.attr("id")+" img").attr("src");
                        child = child.next();
                    }

                var child = $("#TableauCarte div:first-child");

                for (j=0; j<children.length; j++) 
                    {
                        randIndex = tirageAleatoire(0, tabImage.length - 1);


                        $("#"+child.attr("id")+" img").attr("src", tabImage[randIndex]);
                        tabImage.splice(randIndex, 1);

                        child = child.next();
                    }
                };
            $(
            function reinitialise() 
                {
                    melange();
                    $("img").hide();
                    $("img").removeClass("opacity");
                    compte = 0;
                    $("#msg").remove();
                    $("#compter").html("" + compte);
                    ouvreCase = "";
                    ouvreImage = "";
                    trouve = 0;
                    return false;
                }
              );

          $(
             function() 
             {
                $("img").hide();
                $("#TableauCarte div").click(ouvrirCarte);

                melange();
             
                function ouvrirCarte() 
                  {

                    id = $(this).attr("id");

                    if ($("#"+id+" img").is(":hidden")) 
                          {
                             $("#TableauCarte div").unbind("click", ouvrirCarte);

                                $("#"+id+" img").slideDown('fast');

                                if (ouvreImage == "") 
                                    {
                                        ouvreCase = id;
                                        ouvreImage = $("#"+id+" img").attr("src");
                                        setTimeout(function() {
                                            $("#TableauCarte div").bind("click", ouvrirCarte)
                                                              }, 300);
                                    } 
                                else {
                                    currentopened = $("#"+id+" img").attr("src");
                                     if (ouvreImage != currentopened) 
                                         {

                                            setTimeout(
                                                    function() 
                                                    {
                                                        $("#"+id+" img").slideUp('fast');
                                                        $("#"+ouvreCase+" img").slideUp('fast');
                                                        ouvreCase = "";
                                                        ouvreImage = "";
                                                    }, 
                                                        
                                                   400);
                                         } 
                                     else 
                                         {

                                            $("#"+id+" img").addClass("opacity");
                                            $("#"+ouvreCase+" img").addClass("opacity");
                                            trouve++;
                                            ouvreCase = "";
                                            ouvreImage = "";
                                         }
                                    setTimeout
                                        (
                                            function() 
                                                {
                                                 $("#TableauCarte div").bind("click", ouvrirCarte)
                                                }, 
                                                400
                                        );
                                     }

                                compte++;
                                $("#compter").html("" + compte);

                                if (trouve === 8) 
                                {
                                    alert('Félicitation!!!! Tu peux maintenat RECOMMENCER avec SARKIS en cliquant sur OK puis REJOUER');
                                };
                          }
                 }
             }

            );
    }
 );
        </script>
        <style type="text/css">
        body {
                color:black;
                background-color:white;
                background-image:url(images/alan-labisch-326573.jpg);
                background-attachment: fixed ;
                background-repeat:no-repeat;
                background-size: 100% 100% ;
             }
        #TableauCarte {
            margin: 0 auto;
            width: 800px;
            z-index: 1;
                      }

        #TableauCarte div {
            float: left;
            width: 150px;
            height: 150px;
            background-image: url(Images/téléchargement5.PNG);
            background-size: 100% 100% ;
            margin: 5px;
            padding: 5px;
            cursor: crosshair;
            -webkit-border-radius: .5em;
            -moz-border-radius: .5em;
            border-radius: .5em;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.5);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.5);
            box-shadow: 0 1px 2px rgba(0,0,0,.5);
            z-index: 2;
                          }
        #boxcard div img {
                border: none;
                z-index: 3;
                         }

        .opacity {
            opacity: 100;
            filter: alpha(opacity=0);
                 }

        #boutton {
            text-align: center;
            padding: 15px;

                 }
         .link {
                font-size: 20px;
                color: gold;
                text-decoration: none;
                background: silver;
                padding: 2px 8px;
                -webkit-border-radius: .5em;
                -moz-border-radius: .5em;
                border-radius: .5em;
              }
        .Replay:hover {
            background: aqua;
                    }
        </style>
         
        <div id="boutton">
            <span class="link">
                <span id="compter">0</span>Cliques
            </span>
            <input type="button" style=" color: goldenrod" value="Rejouer" id="refresh" class="Replay"/>
        </div>
        
        
        
</head>
</html>