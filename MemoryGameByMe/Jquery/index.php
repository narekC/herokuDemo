<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script>
            
            // Au chargement de la page !!!!
        $
        (
            function()    
    { $('#txtVal1').val()
        $('#btnCalculer').click
        (
               function()
       {
           //alert("vous avez cliqué sur le bouton");
           //alert($('#txtVal1').val());
           
           //En une seule ligne
$('#txtRes').val( parseInt( $('#txtVal1').val()) + parseInt( $('#txtVal2').val());

//En plusieurs lignes
//var nb1 = parseInt( $('#txtVal1').val());
//var nb2 = parseInt( $('#txtVal2').val());
//$('#txtRes').val(nb1 + nb2) ;
       }
                );
    }
            );
        </script>
    </head>
    <body>
        <label>Saisir votre 1er nombre</label>
        <br>
        <input id="txtVal1" type="text">
        <br>
        <label>Saisir votre 2ème nombre</label>
        <br>
        <input id="txtVal2" type="text">
        <br>
        <label>Votre résultat</label><br>
        <input id="txtRes" type="text">
        <br>
        <input id="btnCalculer" type="button" value="Calculer">

    </body>
</html>
