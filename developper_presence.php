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
<h1>Développer la présence en ligne de l’organisation</h1>
    <br><br>
    <table>
        <tr class= 'impair'>
            <td><b><i>Création du site web Anatek.fr avec WordPress (nocode)</b></i></td>
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
        <tr class= 'pair'>
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
    </table>
    <br><br>
</div>
</body>
</html>