<?php include('../globals.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
    <section class="project-headings">
        <h1>
            <span class="sr-only">Craftwork</span>
            <span class="icon-craftwork"></span>
        </h1>
        <p>Coming soon!</p>
        <p>
            <a href="<?= $BASE_URL; ?>" title="Home">Go Home</a>
        </p>
    </section>
    <div class="project-gallery">

        <?php
            foreach ($craftwork as $data => $item): 
        ?>

        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" data-credit="<?= $item['credit'] ?>" data-info="<?= $item['info'] ?>">
        </a>
      
      <?php endforeach; ?>
  </div>
</div>
    
<?php include('../components/footer.php'); ?>