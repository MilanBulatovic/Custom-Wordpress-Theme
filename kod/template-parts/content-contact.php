<?php
/**
 * Template part for displaying content in Kontakt page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KOD
 */

?>
<div class="container-md">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
               
            
            
        </header><!-- .entry-header -->


        <div class="contact-entry-content contact-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mail-send.png" alt="bin" class="mail-send">
            <div class="entry-headline">

                <?php the_content(); ?>
                <!-- <h1>Reakcija na stvarnost</h1>
                <h6>Ukoliko imate neki predlog, reakciju ili pitanje, pošaljite nam kroz kontakt formu ispod.</h6> -->
            </div>
            <form action="" class="contact-form">
                
                    <input class="form-control" type="text" placeholder="Ime" id="exampleFormControlInput">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Poruka"></textarea>
                    <button class="cta">Pošalji</button>
              
            </form>

          
        </div><!-- .entry-content -->

        <div class="red-divider"></div>

        <div class="contact-details">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h5 class="adress"> Stara Varoš, Bratstva i jedinstva, B-T
                            81000, Podgorica, Crna Gora</h5>
                        <h5 class="phone"><a href="tel:+382 20 336 214"> Tel: +382 20 20 336 214</a></h5>
                        <h5 class="email"><a href="mailto:info@kod.org.me"> Email: info@kod.org.me</a></h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11778.354217117063!2d19.2611346!3d42.436492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xccaa4e60e19bf4f!2sOrganizacija%20KOD!5e0!3m2!1sen!2s!4v1633226859173!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>