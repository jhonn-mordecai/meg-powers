<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_illustration.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Illustration</span>
        <span class="icon-illustration"></span>
    </h1>
    <p>
      Click each thumbnail to view full-size + more info.
    </p>
  </section>
  <div class="project-gallery">

        <?php
            foreach ($illustrations as $data => $item): 
        ?>

        <a href="" class="gallery-thumbnail illustration-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img']; ?>" alt="<?= $item['alt']; ?>" data-info="<?= $item['info']; ?>" class="<?= $item['align_class']; ?>">
        </a>

        <?php if($item['ref_link']): ?>
          <span class="ref-link" style="display:none;"><?= $item['ref_link']; ?></span>
        <?php endif; ?>
      
      <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>