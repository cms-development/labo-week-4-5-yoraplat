<?php
/* 
Template Name: Word fan - Contact
*/
?>
<?php get_header(); ?>

<header class="header-wrapper">
        
        <a href="" class="logo"><img src="./images/logo.png" alt="Wizards Unite"></a>
    
    <!-- navigatie -->
    <div class="container header_container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="logo">Wizards Unite Fanpage</h1>
            </div>
            <div class="col-12 col-md-6 nav">
                <nav class="nav-main">
                    <ul class="navbar-right">
                    <li class="page_item"><a class="nav-item__link active" href="/index" title="Fans">De Fanclub</a></li>
                        <li class="page_item"><a class="nav-item__link" href="/creatures_post_type" title="Creatures">Magical Creatures</a></li>
                        <li class="page_item"><a class="nav-item__link" href="/word-fan-contact" title="Contact">Word fan!</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="main-wrapper">
    <!-- page content -->
    <div class="container">

        <!-- cards level 1-->
        <div class="row">
            <!-- card 1.1 -->
            <div class="col-12 col-md-3">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widget_area") ) : ?>
<?php endif;?>

                </div>
            <div class="col-12 col-md-9">
               <h2>Word fan</h2> 
               <p>
                    Word ook een fan
                <?php echo do_shortcode('[contact-form-7 id="48" title="Word fan"]') ?>
               </p>

            </div>
            

        </div>
         <!-- end row-->

    </div>
    <!-- end container-->
</div>
 <!-- end main-wrapper-->
<?php get_footer(); ?>