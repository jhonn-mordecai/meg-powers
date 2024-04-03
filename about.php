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
                <p>Meg Powers is a professional costume designer and inter-disciplinary artist with an emphasis on film-making, puppetry, animation, and comics/cartooning. Their design philosophy is driven by the humanity of the performers they dress, an empathetic approach to character analysis that emphasizes nuance, an exploration of history that specializes in subcultures and overlooked populations, and the desire to empower audiences across a broad spectrum of marginalization through catharsis, fun, and fantasy.</p> 
                <p>Recent costume design credits include <span class="italic">Macbeth</span> (puppet design & construction, The Helen Forman Theatre, 2024), <span class="italic">Lewberger and the Wizard of Friendship</span> (Theatre 2 @ Theatre Row, 2023), <span class="italic">The Lightning Thief</span> (Theatre Works USA, 2022), <span class="italic">L'Orfeo</span> (Yale Baroque Opera, 2022), <span class="italic">Twelfth Night</span> (Yale Shakespeare Repertory Project, 2022), <span class="italic">Cabaret</span> (Yale Dramatic Association, 2021), <span class="italic">Constellations</span> (Yale Cabaret, 2021), <span class="italic">The Gods of the Mountains</span> (The Spectral Citadel, 2021), <span class="italic">The Kitchen of Truth</span> (Yale Cabaret, 2021), <span class="italic">Alice</span> (Yale School of Drama, 2020), and <span class="italic">TVC15: Long Live the New Flesh</span> (Yale Cabaret, 2020).</p>
                <p>In addition to designing, Powers is skilled in a wide breadth of craft disciplines and has built and customized pieces for opera, film, television, Broadway musicals, and beyond. They are the co-founder of the queer gothic performance collective, The Spectral Citadel, and they contribute a monthly comic to the Rhode Island publication <span class="italic">Motif Magazine</span>.</p>
                <p>Powers is a graduate of the Geffen School of Drama Masters program and Purchase College Design and Technology theatre conservatory.</p>
                <p>They were the recipient of the Jay and Rhonda Keene Scholarship in Costume Design and were recognized for their passion for and dedication to costume design and construction through the Opera Theatre of St. Louis Emerson Program.</p>
            </div>

            <div class="about-contact-links">
                <p><a href="mailto:meghpowers@gmail.com" title="Email">Email</a>.</p>
                <p><a href="<?= $BASE_URL; ?>/meg-powers-resume-2024.pdf" title="Resume" target="_blank">Resum&eacute;</a>.</p>
            </div>
        </div>
    </section>
</div>

<?php include('components/footer.php'); ?>