<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_one-flea-spare.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">One Flea Spare</span>
    </h1>
    <div class="project-details">
        <p>By Naomi Wallace</p>
        <p></p>
    </div>
  </section>
  <div class="project-gallery">
        <?php foreach ($cd_ofs['sketches'] as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="<?= $item['align_class'] ?>">
        </a>
        <?php endforeach; ?>
  </div>

  <div class="project-details">
    <p class="secondary-title">Color References</p>
    <p></p>
  </div>
  <div class="project-gallery">
        <?php foreach ($cd_ofs['prints'] as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="<?= $item['align_class'] ?>">
        </a>
        <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>