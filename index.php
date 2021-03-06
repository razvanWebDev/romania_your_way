<?php include "PHP/header.php"; ?>
<?php include "PHP/nav.php"; ?>

<section class="hero">
    <div class="hero-slogan">
        <h2>Get the Best of Romania</h2>
        <h3>Travel in Your own Way!</h3>
        <p>
            Be ready for an incredible journey and let us guide you on the way to beautiful places,
            breath taking lanscapes and incredible experiences.
        </p>
    </div>
</section>
<section class="main-attraction">
    <div class="main-carousel">
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
        <?php  include "PHP/main_carousel_cell.php"; ?>
    </div>
    <div class="main-attractions-container">
        <div class="description">
            <h2>Disover the beauty of<br>
                <span class="attraction-name">MaramureČ™</span>
            </h2>
            <p>
                With an incredible cultural herytage,
                the Romanain region of Maramures is a land of
                tales and stories, music and breathtaking
                landscapes.
            </p>
            <a href="#" class="btn">EXPLORE</a>
        </div>
        <div class="images-container">
            <img src="img/essentials/maramures_2.png" alt="explore" class="top-right">
            <img src="img/essentials/maramures_3.png" alt="explore" class="bottom-right">
            <img src="img/essentials/maramures_1.png" alt="explore" class="middle">
        </div>
    </div>
</section>
<section class="romanian-essentials">
    <h2 class="section-title">Romanian Essentials</h2>
    <div class="romanian-essentials-carousel">
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?>
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?> 
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?> 
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?>
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?> 
        <?php  include "PHP/romanian_essentials_carousel_cell.php"; ?> 
    </div>
</section>
<section class="about-section">
    <div class="description">
        <h2>Know Us Better</h2>
        <p>
            This is us. Since xyz, we dedicate our efforts to building the best Romanian travel experiences.
            We are passionate about Romania and we want to show its beauty to the entire world 
        </p>
        <a href="#" class="btn">OUR TEAM</a>
    </div>
    <div class="images-container">
        <img src="img/ui/danube.png" alt="explore" class="top-right">
    </div>
</section>
<section class="tailored-section">
    <h2 class="section-title">Our Tailored Tours Selection</h2>
    <div class="tailored-tours-container">
        <?php  include "PHP/tailored_tours_card.php"; ?>
        <?php  include "PHP/tailored_tours_card.php"; ?>
        <?php  include "PHP/tailored_tours_card.php"; ?>
        <?php  include "PHP/tailored_tours_card.php"; ?>
        <?php  include "PHP/tailored_tours_card.php"; ?>
        <?php  include "PHP/tailored_tours_card.php"; ?>
    </div>
    
</section>

<?php include "PHP/footer.php"; ?>