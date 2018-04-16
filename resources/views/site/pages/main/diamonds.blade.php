<script>
    'use strict';

    function switchPngToGif() {
        let png = document.getElementById('js-diamondPng');
        let gif = document.getElementById('js-diamondGif');

        png.classList.remove('diamond-active');
        gif.classList.add('diamond-active');
        png.classList.add('d-none');
    }
</script>


<section id="section_diamond" class="section__diamond position-relative z-index-3">
    <div class="container position-relative">
        <div class="position-absolute" id="insertImgMain">
            <img id="js-diamondPng" class="img-fluid diamond-1 diamond-item diamond-active"
                 src="/images/pages/main/diamond-1.png">
            <img id="js-diamondGif" class="img-fluid diamond-1 diamond-item" src="/images/static/ooooooooo.gif"
                 onload="switchPngToGif()">
        </div>

        <div class="position-relative" style="z-index:-2;">
            <img class="img-fluid diamond-relative" src="/images/pages/main/diamond-2.png" style="opacity: 0">
        </div>

    </div>

    <div class="section__diamond-footer">

    </div>
</section>

