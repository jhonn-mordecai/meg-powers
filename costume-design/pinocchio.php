<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_pinocchio.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">The Adventures of Pinocchio</span>
    </h1>
    <div class="project-details">
        <p>Composed by Jonathan Dove / Libretto by Alisdair Middleton</p>
        <p>Design collaboration between myself, set designer Jimmy Stubbs, and lighting designer Nicole E. Lang. This hypothetical production was designed for Manhattan's New Victory children's theatre. We wanted to take advantage of the small stage by treating the scenery like an advent calendar or puppet theatre; costumes would take advantage of vertical space and serve as set dressing as well as character illustration. </p>
        <p>Set model design, construction, and photography  by Jimmy Stubbs, lighting design by Nicole E. Lang.</p>
    </div>
  </section>
  <div class="section-tabs">
    <a id="pinocchio-illustration" class="tab-btn active">Illustrations</a>
    <a id="pinocchio-model" class="tab-btn">Concept Set Model</a>
  </div>

  <div id="pinocchio-illustration" class="project-gallery">

    <?php foreach ($cd_pinocchio_sketch as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="Pinocchio costume concept sketch" class="<?= $item['align_class'] ?>" loading="lazy">
        </a>
    <?php endforeach; ?>
  </div>

  <div id="pinocchio-model" class="project-gallery">
    <?php foreach ($cd_pinocchio_model as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="Pinocchio concept model" loading="lazy">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>