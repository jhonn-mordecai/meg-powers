<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_cabaret.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">Cabaret</span>
    </h1>
    <div class="project-details">
        <p>Yale Dramatic Association, October 2021</p>
        <p>Director: <a href="https://collegearts.yale.edu/biography/lynda-paul" title="Lynda Paul profile" target="_blank">Lynda Paul</a> / Costume Design: Meg Powers / Set Design: Jimmy Stubbs / Lighting Design: Eitan Acks</p>
    </div>
  </section>
  <div class="project-gallery">

    <?php foreach ($cd_cabaret as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="<?= $item['align_class'] ?>">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>