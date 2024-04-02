<?php include('../globals.php'); ?>
<?php include('../nitty-gritty/_sun-is-sinking-in-the-west.php'); ?>
<?php include('../components/header.php'); ?>

<div class="fluid-container">
  <section class="project-headings">
    <h1>
        <span class="sr-only">Costume Design</span>
        <span class="icon-costume-dsn"></span>
        <span class="project-title">The Sun Is Sinking In the West</span>
    </h1>
    <div class="project-details">
        <p>Playwright: Steven Glavey</p>
        <p>THE SUN IS SINKING IN THE WEST is a new play written by a longtime  collaborator, Steven Glavey. As much an intimate family drama as a horror story, this play explores the grim complicities of the Westward Expansion through vampire folklore and takes inspiration from Aleksey Tolstoy, spaghetti westerns, and giallo.</p>
        <!-- <p>This was a rare and fulfilling opportunity to develop the costumes in direct conversation with the playwright, and we are both very happy with the results. To see a fully realized build of Lilybell Glanton's Look 3 dress, <a href="" title="View photos of Lilybell Glanton's Look 3 dress">click here</a>.</p> -->
    </div>
  </section>
  <div class="project-gallery">

    <?php foreach ($cd_sun_sinking as $data => $item): ?>
        <a href="" class="gallery-thumbnail" aria-expanded="false" role="button">
            <img src="<?= $item['img'] ?>" alt="<?= $item['alt'] ?>" class="object-top-align">
        </a>
    <?php endforeach; ?>
  </div>
</div>

<?php include('../components/gallery_modal.php'); ?>
<?php include('../components/footer.php'); ?>