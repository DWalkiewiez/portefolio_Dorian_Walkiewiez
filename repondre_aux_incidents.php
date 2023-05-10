<!DOCTYPE html>
<html lang="fr">
<style>
*{box-sizing: border-box}

body{margin:0;min-height:100vh; display:flex;flex-flow:column;padding:20px}
ul{list-style-type: none;padding:0;margin:0}
img{max-width:100%;display:block}
	
.galerie {
margin:auto;
max-width:600px;
max-height:398px;
display: flex; 
overflow-y: hidden;
scroll-behavior: smooth;
scroll-snap-type: x mandatory
	
}

.galerie img {

min-width:100%;
align-self: center; /*pour le responsive*/
scroll-snap-align: center
	
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>portefolio Dorian Walkiewiez</title>
</head>
<body>
<div class = 'back' >
<h1>Répondre aux incidents et aux demandes d’assistance et d’évolution</h1>
    <br><br>
    <table>
        <tr class= 'impair'>
            <td><b><i> TP GLPI </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\TPglpi2.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> Cas rugby </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/rugby1.png" alt>
                <img id="slide2" src="img/rugby2.png" alt>
                <img id="slide3" src="img/rugby3.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'impair'>
            <td><b><i> Cas facturation </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/facturation1.png" alt>
                <img id="slide2" src="img/facturation2.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> sraping le dencheur auto </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\listetempermonkey.png" alt>
                <img id="slide2" src="img\listesitestrello.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'impair'>
            <td><b><i> ajout de fonctinalité du site web le denicheur auto </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\cssdenicheur1.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> évolution du css du site le dénicheur auto pro </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\cssdenicheur2.png" alt>
                <img id="slide2" src="img\cssdenicheur3.png" alt>
                </div>		
            </td>
        </tr>
    </table>
    <br><br>
</div>
</body>
</html>