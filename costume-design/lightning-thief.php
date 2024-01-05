<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_lightning-thief.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">The Lightning Thief &nbsp; <small style="font-size:0.8em;">TYA Edition</small></span>
    </h1>
    <div class="project-details">
        <p>A TheaterWorksUSA Production</p>
        <p>Book by Joe Tracz <br>
          Music, Lyrics, and Orchestrations by Rob Rokicki <br> 
          Adapted from the book <i>The Lightning Thief</i> by Rick Riordan <br> 
          Direction and Choreography by Josiah Davis <br> 
          Costume Design by Meg Powers / Scenic Design by Jean Kim / Music Direction by Adam J. Rineer
        </p>

        <div class="embed-responsive">
          <iframe height="400" src="https://www.youtube.com/embed/OnwGxFl9jq8?si=Moz-A6E40pWqUgw2" title="The Lightning Thief TYA Edition" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="width:100%;" allowfullscreen></iframe>
        </div>
        <p>
          <a href="https://twusa.org/shows-artists/on-tour-2/the-lightning-thief-tya-edition/" title="The Lightning Thief info on TYA website" target="_blank">See more information and production photos here.</a>
        </p>
    </div>
  </section>
  
  <h2>Costume Sketches</h2>
  <div class="project-gallery">

    <?php foreach ($cd_lightning_thief as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img']; ?>" alt="<?= $item['alt']; ?>" class="object-top-align" loading="lazy">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>