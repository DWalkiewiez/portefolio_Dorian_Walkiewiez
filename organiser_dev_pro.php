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
<h1>Organiser son développement professionnel</h1>
    <br><br>
    <table>
        <tr class= 'impair'>
            <td><b><i> veille technologique </b></i></td>
            <td>
                <body>
                <div class="galerie">
                <img id="slide1" src="img\veilleflipboard.png" alt>
                <img id="slide2" src="img\veillezdnet.png" alt>
                <img id="slide3" src="img\veilledoc.png" alt>
                </div>	
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> Création du site web Anatek.fr avec WordPress (nocode) </b></i></td>
            <td>
                <body>
                <div class="galerie">
                <img id="slide1" src="img\logoWP+DIVI.png" alt>
                <img id="slide2" src="img\anatek3.png" alt>
                <img id="slide3" src="img\anatek4.png" alt>
                <img id="slide4" src="img\anatek5.png" alt>
                </div>	
            </td>
        </tr>
        <tr class= 'impair'>
            <td><b><i> mise en ligne et reférencement via ionos  du site web Anatek.fr </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/referencementAnatek.png" alt>
                </div>  
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> scraping le dencheur auto </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/listetempermonkey.png" alt>
                <img id="slide2" src="img/scrape1.png" alt>
                <img id="slide3" src="img/scrape2.png" alt>
                <img id="slide4" src="img/scrape3.png" alt>
                <img id="slide5" src="img/scrape4.png" alt>
                <img id="slide6" src="img/scrape5.png" alt>
                <img id="slide7" src="img/scrape6.png" alt>
                <img id="slide8" src="img/scrape7.png" alt>
                <img id="slide9" src="img/scrape8.png" alt>
                <img id="slide10" src="img/scrape9.png" alt>
                <img id="slide11" src="img/scrape10.png" alt>
                <img id="slide12" src="img/scrape11.png" alt>
                </div>
            </td>
        </tr>
        <tr class= 'impair'>
            <td><b><i> ajout de fonctinalité du site web le denicheur auto </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img/ajoutfoncLDA1.png" alt>
                <img id="slide2" src="img/ajoutfoncLDA2.png" alt>
                <img id="slide3" src="img/ajoutfoncLDA3.png" alt>
                <img id="slide4" src="img/ajoutfoncLDA4.png" alt>
                <img id="slide5" src="img/ajoutfoncLDA5.png" alt>
                </div>	
            </td>
        </tr>
        <tr class= 'pair'>
            <td><b><i> évolution du css du site le dénicheur auto pro </b></i></td>
            <td>
                <div class="galerie">
                <img id="slide1" src="img\cssdenicheur2.png" alt>
                </div>
            </td>
        </tr>
    </table>
    <br><br>
</div>
</body>
</html>