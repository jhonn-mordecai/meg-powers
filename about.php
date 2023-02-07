<?php include('globals.php'); ?>
<?php include('components/header.php'); ?>

<div class="fluid-container">
    <section class="about">
        <h1>
            <span class="sr-only">About Me</span>
            <span class="icon-about"></span>
        </h1>
        <div class="about-headshot">
            <picture>
                <source media="(max-width: 850px)" srcset="<?= $BASE_URL ?>/img/headshot-portrait-1200.jpg">
                <source media="(min-width: 851px)" srcset="<?= $BASE_URL ?>/img/headshot-portrait.jpg">
                <img src="<?= $BASE_URL ?>/img/headshot-portrait.jpg" alt="Meg Powers">
            </picture>
        </div>
        <div class="about-description">
            
            <div class="write-up">
                <p>Meg Powers is a professional costume designer, recent graduate of the Geffen School of Drama Masters program, and inter-disciplinary artist with an emphasis on filmmaking, puppetry, animation, and comics/cartooning.</p> 
                <p>Recent design credits include <span class="italic">The Lightning Thief</span> (Theatre Works USA,  2022), <span class="italic">L' Orfeo</span> (Yale Baroque Opera, 2022), <span class="italic">Twelfth Night</span> (Yale Shakespeare Repertory Project, 2022), <span class="italic">Cabaret</span> (Yale Dramatic Association, 2021), <span class="italic">Constellations</span> (Yale Cabaret, 2021), <span class="italic">The Gods of the Mountains</span> (The Spectral Citadel, 2021), <span class="italic">The Kitchen of Truth</span> (Yale Cabaret, 2021), <span class="italic">Alice</span> (Yale School of Drama, 2020), and <span class="italic">TVC15: Long Live the New Flesh</span> (Yale Cabaret, 2020).</p>
                <p>In addition to designing, Powers is the co-founder of the eerie queer performance collective, The Spectral Citadel, and contributes a monthly comic to the Rhode Island publication <span class="italic">Motif Magazine</span>.</p>
            </div>

            <div class="about-contact-links">
                <p><a href="mailto:meghpowers@gmail.com" title="Email">Email</a>.</p>
                <p><a href="<?= $BASE_URL; ?>/meg-powers-resume2022.pdf" title="Resume" target="_blank">Resum&eacute;</a>.</p>
            </div>
        </div>
    </section>
</div>

<?php include('components/footer.php'); ?>