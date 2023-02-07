<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_twelfth-night.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">Twelfth Night</span>
    </h1>
    <div class="project-details">
        <p>Yale Shakespeare Repertory Project</p>
        <p>Director: James Fleming / Costume Design: Meg Powers / Set Design: Cat Raynor / Lighting Design: Yichen Zhou</p>
        <p>Photos: Marcelo Martinez Garcia and Leigh R. Busby</p>
    </div>
  </section>
  <div class="project-gallery">

    <?php foreach ($cd_twelfth_night as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>