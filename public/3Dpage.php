<?php

$title = "Overview";
require "../vendor/autoload.php";
require_once "../src/header.php";
?>


<!-- THREE JS LINKS FROM CODEPEN   -->
<script src="https://assets.codepen.io/4027472/three.min.js"></script>
<!--Orbit-->
<script src="https://assets.codepen.io/4027472/OrbitControls.js"></script>
<!--GLTFLoader-->
<script src="https://assets.codepen.io/4027472/GLTFLoader.js"></script>
<!--Gsap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

<!--Font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;900&display=swap" rel="stylesheet">

<!--global CSS-->
<link rel="stylesheet" href="/style/index.css">
<!--md CSS-->
<link rel="stylesheet" href="/style/dropdown/dropdown.css">
<!--Chargement video CSS-->
<link rel="stylesheet" href="/style/chargement_page/chargement.css">

<!--Chargement video JS-->
<script src="/style/chargement_page/chargement.js"></script>
<!--md JS-->
<script src="/style/dropdown/dropdown.js"></script>
<!--Check image JS-->
<script src="/style/checkImage/imageCheck.js"></script>



<!--Boutton étages-->
<button style="margin-left: 100px;" id="bouton-play1" class="boutton4">étage haut</button>
<button style="margin-left: 300px;" id="bouton-play2" style="margin-left: 100px;" class="boutton4">étage bas</button>

<!--Chargement video-->
<video id="background-video" autoplay muted>
    <source src="/img/chargement.mp4" type="video/mp4">
</video>
<!-- Bouton Select Room -->
<div class="select-room" onclick="toggleDropdown()">Select Room <img class="arrow"
        src="/public/style/md/image/arrow.png" alt="">
</div>

<!-- Menu déroulant -->
<div class="md" id="md">

    <a href="#" id="roomTitle1" class="roomsLink" onclick="showContent(1)">Pleïades</a>
    <div class="md-content" id="content1">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle2" class="roomsLink" onclick="showContent(2)">Suchet</a>
    <div class="md-content" id="content2">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle3" class="roomsLink" onclick="showContent(3)">Chasseron</a>
    <div class="md-content" id="content3">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle4" class="roomsLink" onclick="showContent(4)">Argentine</a>
    <div class="md-content" id="content4">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle5" class="roomsLink" onclick="showContent(5)">Chamossaire</a>
    <div class="md-content" id="content5">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle6" class="roomsLink" onclick="showContent(6)">Mönch</a>
    <div class="md-content" id="content6">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle7" class="roomsLink" onclick="showContent(7)">Eiger</a>
    <div class="md-content" id="content7">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle8" class="roomsLink" onclick="showContent(8)">Dent du midi</a>
    <div class="md-content" id="content8">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle9" class="roomsLink" onclick="showContent(9)">Wengen</a>
    <div class="md-content" id="content9">
        <p>lien animation <br> <br> disponibilité</p>
    </div>

    <a href="#" id="roomTitle10" class="roomsLink" onclick="showContent(10), size()">Jungfrau</a>
    <div class="md-content" id="content10">
        <!--img dispo-->
        <p>Contenu de l'option 10</p><img id="iconFree" class="" src="/public/style/checkImage/images/green.gif" alt="">
    </div>
</div>


<!-- light JS -->
<script src="/js/light.js"></script>

<!--Salles animation JS-->
<script src="/js/animation.js"></script>
<!--global JS-->
<script src="/js/Animation2.js"></script>
<script src="/js/gltf.js"></script>
<?php
require "../src/footer.php";
?>
