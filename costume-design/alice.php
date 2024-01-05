<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_alice.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings" style="margin-bottom:1rem;">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">Alice</span>
    </h1>
    <div class="alice-details project-details">
        <p>University Theatre, February 2020</p>
        <p>Concept by Robert Wilson / Directed by <a href="https://www.loganellis.org/" title="Logan Ellis website" target="_blank">Logan Ellis</a></p>
        <p>Music and Lyrics by Tom Waits and Kathleen Brennan / Libretto by Paul Schmidt<br>
        Costume Design by Meg Powers / Scenic Design by Anna Grigo / Lighting Design by Riva Fairhall / Projection Design by Brittany Bland / Music Direction by Dan Pardo</p>
        <p>Photos by T. Charles Erickson</p>
    </div>
  </section>
  <div class="alice-tabs section-tabs">
    <a id="alice-photos" class="tab-btn active">Photos</a>
    <a id="alice-sketch-drawings" class="tab-btn">Sketches / Working Drawings</a>
  </div>
  <div id="alice-photos" class="project-gallery">

    <?php foreach ($cd_alice['photos'] as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="<?= $item['align_class'] ?>" loading="lazy">
        </a>
    <?php endforeach; ?>
  </div>

  <div id="alice-sketch-drawings" class="project-gallery">

    <?php foreach ($cd_alice['sketches'] as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="<?= $item['align_class'] ?>" loading="lazy">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>