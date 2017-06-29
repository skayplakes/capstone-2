<?php

echo "
"


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="modern-slide-in/css/sequence-theme.modern-slide-in.css" />

	<link rel="stylesheet" type="text/css" href="modern-slide-in/css/sequence-theme.modern-slide-in">
</head>
<body>

<div id="sequence" class="seq">

    <div class="seq-screen">
      <ul class="seq-canvas">
        <li class="seq-in">
          <div class="seq-model">
            <img data-seq src="images/orph.png" alt="A female model with long curly brown hair wears a gray sweater, brown shorts, bright yellow socks, and black high heel shoes. She raises one leg, and tilts her head to the side" />
          </div>

          <div class="seq-title">
            <h2 data-seq>Powered by Sequence.js</h2>
            <h3 data-seq>The responsive CSS animation framework</h3>
          </div>
        </li>

        <li>
          <div class="seq-model">
            <img data-seq src="images/legion.jpg" alt="A pale-skin female model with dark eye shadow and tied up hair wears dark green gloves, gray linen boots, and a woolen lined hood on a black zip-up jacket over a black top and shorts. She holds her jacket open with both hands and slightly raises her left knee whilst looking to the floor" />
          </div>

          <div class="seq-title">
            <h2 data-seq>Create Unique Animated Themes</h2>
            <h3 data-seq>For sliders, presentations, <br />banners, and other step-based applications</h3>
          </div>
        </li>

        <li>
          <div class="seq-model">
            <img data-seq src="images/hermesicon.png" alt="A pale-skin female model with platted hair wears a dark button-up jacket with gray shorts, black tights, brown shoes, and black gloves. She throws both arms back and raises one knee -- as if mid-jump -- whilst looking into the distance" />
          </div>

          <div class="seq-title">
            <h2 data-seq>Rapid Development of Step-Based Applications</h2>
            <h3 data-seq>All of the JavaScript functionality you need built-in</h3>
          </div>
        </li>
      </ul>
    </div>

    <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
      <button type="button" class="seq-prev" aria-label="Previous">Previous</button>
      <button type="button" class="seq-next" aria-label="Next">Next</button>
    </fieldset>

    <ul role="navigation" aria-label="Pagination" class="seq-pagination">
      <li><a href="#step1" rel="step1" title="Go to slide 1"><img src="images/orphicon.svg" /></a></li>
      <li><a href="#step2" rel="step2" title="Go to slide 2"><img src="images/legionfool.svg" /></a></li>
      <li><a href="#step3" rel="step3" title="Go to slide 3"><img src="images/hermesicon2.svg" /></a></li>
    </ul>
</div>

<script src="modern-slide-in/scripts/imagesloaded.pkgd.min.js"></script>
<script src="modern-slide-in/scripts/hammer.min.js"></script>
<script src="modern-slide-in/scripts/sequence.min.js"></script>
<script src="modern-slide-in/scripts/sequence-theme.modern-slide-in.js"></script>

</body>
</html>