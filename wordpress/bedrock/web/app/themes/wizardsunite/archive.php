<?php
/* 
Template Name: Creatures Archives
*/
?>



<?php get_header(); ?>
<body>
    


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
        <div class="row cards">

            <div class="col-12">
                <h2>Magical Creatures</h2>
                <p>The following Foundables can be found in the Care of Magical Creatures category of the Registry in Harry Potter: Wizards Unite.</p>
            </div>
            <!-- card 1.1 -->

<?php if ( have_posts() ) :
	while ( have_posts() ) :
        
        ?>
            <div class="col-12 col-md-4">
               
                <div class="card">
                    
                    <div class="card_txt_container">
                    <?php the_post(); ?>
                        <h2><a href="#"><?php the_title() ?></a></h2>
                        <p>
                        <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                 <!-- end card-->

            </div>
    <?php endwhile;
            endif; ?>
             <!-- end col-->

        </div>
         <!-- end row-->
         
    </div>
    <!-- end container-->
</div>
 <!-- end main-wrapper-->


<?php get_footer() ?>
</body>

</html>