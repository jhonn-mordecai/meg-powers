<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_gods-of-the-mountains.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">Gods of the Mountains</span>
    </h1>
    <div class="project-details">
        <p>More info soon.</p>
    </div>
  </section>
  <div class="project-gallery">

    <?php foreach ($cd_gods_mountains as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>