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

        <span class="italic"></span>
            
            <div class="write-up">
                <p>Meg Powers is a costume designer and inter-disciplinary artist whose practice includes filmmaking, puppetry, and sequential art. Their philosophy is driven by the humanity of performers, an empathetic approach to character analysis that emphasizes nuance, an exploration of history through subculture, and the desire to empower audiences across a broad spectrum of experience through catharsis, fun, and fantasy.</p>

                <p>Powers is also a skilled craftsperson and has built pieces for opera, film, television, Broadway, and beyond.  </p>

                <p>Recent design credits of note include <span class="italic">Boat Day</span> (upcoming film, Cusp of Rebirth Productions, 2024), <span class="italic">Macbeth</span> (puppet design & construction, The Helen Forman Theatre, 2024), <span class="italic">Lewberger and the Wizard of Friendship</span> (Theatre 2 @ Theatre Row, 2023), <span class="italic">The Lightning Thief</span> (Theatre Works USA, 2022), <span class="italic">L'Orfeo</span> (Yale Baroque Opera, 2022), <span class="italic">Twelfth Night</span> (Yale Shakespeare Repertory Project, 2022), <span class="italic">Cabaret</span> (Yale Dramatic Association, 2021), <span class="italic">Constellations</span> (Yale Cabaret, 2021), <span class="italic">The Gods of the Mountains</span> (The Spectral Citadel, 2021), <span class="italic">The Kitchen of Truth</span> (Yale Cabaret, 2021), <span class="italic">Alice</span> (Yale School of Drama, 2020), and <span class="italic">TVC15: Long Live the New Flesh</span> (Yale Cabaret, 2020).</p>

                <p>Powers is a graduate of Yale's Geffen School of Drama Masters program and Purchase College Design and Technology theatre conservatory.</p>

                <p>They are a recipient of the 2023-2024 <span class="italic">1/52 Project</span> award. Other awards include the Jay and Rhonda Keene Scholarship in Costume Design and recognition for their dedication to costume design and construction through the Opera Theatre of St. Louis Emerson Program.</p>
            </div>

            <div class="about-contact-links">
                <p><a href="mailto:meghpowers@gmail.com" title="Email">Email</a>.</p>
                <p>
                    <a href="<?= $BASE_URL; ?>/meg-powers-resume-2024.pdf" title="Resume" target="_blank">Resum&eacute;</a> <br>
                    <small style="font-size:0.85rem;"><i>Please contact for a complete list of design credits prior to 2020.</i></small>
                </p>
            </div>
        </div>
    </section>
</div>

<?php include('components/footer.php'); ?>