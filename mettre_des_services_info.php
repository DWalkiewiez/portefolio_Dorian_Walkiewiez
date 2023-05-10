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
<h1>Mettre à disposition des utilisateurs un service informatique</h1>
    <br><br>
    <table>
        <tr class= 'impair'>
            <td><b><i> projets FAQ M2L </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/tableFAQM2L.png" alt>
                <img id="slide2" src="img/connexionFAQM2L.png" alt>
                <img id="slide3" src="accueilFAQM2L.png" alt>
                <img id="slide4" src="img/profilFAQM2L.png" alt>
                <img id="slide5" src="img/codeFAQM2L.png" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> pojets FREDI WEB </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/tableFREDI.png" alt>
                <img id="slide2" src="img/page de conneection fredi.PNG" alt>
                <img id="slide3" src="img/code connexion.PNG" alt>
                <img id="slide4" src="img/modifier ligne.PNG" alt>
                <img id="slide5" src="img/formulaire FREDI.PNG" alt>
                <img id="slide6" src="img/code modifier ligne de frais.PNG" alt>
                <img id="slide7" src="img/ligne de frais.PNG" alt>
                <img id="slide8" src="img/liste des utilisateurs.PNG" alt>
                <img id="slide9" src="img/liste util.PNG" alt>
                <img id="slide10" src="img/page compte FREDI.PNG" alt>
                <img id="slide11" src="img/page ligne de frais FREDI.PNG" alt>
                <img id="slide12" src="img\deconnexion FREDI.PNG" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'impair'>
            <td><b><i> pojets FREDI mobile </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\androidconnexion.PNG" alt>
                <img id="slide2" src="img\androidlignefrais.PNG" alt>
                <img id="slide3" src="img\androidlignefrais2.PNG" alt>
                <img id="slide4" src="img\androidconnexionAPI.PNG" alt>
                <img id="slide5" src="img\androidAPI.PNG" alt>
                </div>		
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> mise en ligne et reférencement via ionos  du site web Anatek.fr </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/anatek1.png" alt>
                <img id="slide2" src="img/anatek2.png" alt>
                <img id="slide3" src="img/anatek6.png" alt>
                <img id="slide4" src="img/anatek7.png" alt>
                <img id="slide5" src="img/anatek8.png" alt>
                <img id="slide6" src="img/anatek9.png" alt>
                <img id="slide7" src="img/anatek10.png" alt>
                </div>		
            </td>
        </tr>
    </table>
    <br><br>
</div>
</body>
</html>