<?php
/*
Template Name: homepage
*/
get_header();  ?>

<div class="container-fluid">




    <!-- Offcanvas menu ================================================== -->

	<div class="row row-offcanvas row-offcanvas-left">

<?php include('sidebar.php'); ?>


		<div class="col-sm-9">

    <!-- Carousel ================================================== -->
   
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/MG_1173b.jpg" alt="Apple iPhone 5S">
<<<<<<< HEAD
            <div class="carousel-caption">
              <h1>Create your dream kitchen for less.</h1>
              <!--<p>The iPhone 5s isn't a radical departure from its predecessor in body (unless you count a new gold color), but under the hood are a number of changes that give Apple's newest flagship some real firepower, with the best still yet to come. </p>-->
            </div>
          </div>
          <div class="item">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/cad-images-large7.png" alt="Samsung Galaxy Note 3">
            <div class="carousel-caption">
              <h1>With our beautifully designed kitchen units.</h1>
              <!--<p>Similar to the updates Samsung made to the Galaxy S4, the new Note 3 features a bigger display while remaining very similar in size to the Note II; the biggest change in the Note 3 is the refinement of the S Pen and its accompanying software.</p>-->
            </div>
          </div>
         <div class="item">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/Inderst-Render-V2carousel.png" alt="Samsung Galaxy Note 3">
            <div class="carousel-caption">
              <h1>Using our easy-to-use free online tool.</h1>
=======
            <div class="carousel-caption">
              <h1>Create your dream kitchen for less...</h1>
              <!--<p>The iPhone 5s isn't a radical departure from its predecessor in body (unless you count a new gold color), but under the hood are a number of changes that give Apple's newest flagship some real firepower, with the best still yet to come. </p>-->
            </div>
          </div>
          <div class="item">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/Voila_Capture-2014-05-03_09-51-32_pmb.png" alt="Samsung Galaxy Note 3">
            <div class="carousel-caption">
              <h3>...with our beautifully designed quality kitchen units.</h3>
>>>>>>> 7ddade3ac47e9f0c4b40ad73871fe4b5c94a67b4
              <!--<p>Similar to the updates Samsung made to the Galaxy S4, the new Note 3 features a bigger display while remaining very similar in size to the Note II; the biggest change in the Note 3 is the refinement of the S Pen and its accompanying software.</p>-->
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>





			<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<article>
<<<<<<< HEAD
            <h1 class="sitetitle"><?php echo get_bloginfo ('name'); ?></h1>
=======
            <h1><?php the_title(); ?></h1>
>>>>>>> 7ddade3ac47e9f0c4b40ad73871fe4b5c94a67b4
            <div class="hpintro">
						<?php the_content(); ?>
            </div>
					</article>
			<?php endwhile; ?>
			<?php endif; ?>

<<<<<<< HEAD


<div id="featurettes">
<hr>
        <div class="row featurette">
         <div class="col-sm-7">
          <h2 class="featurette-heading"><?php the_field('first_kitchen_title'); ?><span class="text-muted"><a href="<?php the_field('first_kitchen_subtitle_link'); ?>"><?php the_field('first_kitchen_subtitle'); ?></a></span></h2>
          <p class="lead"><?php the_field('first_kitchen_paragraph'); ?></p>
          <p><?php the_field('first_kitchen_subparagraph'); ?></p>
        </div>
          <div class="col-sm-5">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <div class="item active">
            <img src="<?php the_field('first_kitchen_image_link'); ?>" alt="<?php the_field('first_kitchen_title'); ?>">
            </div>
            <div class="item">
            <img src="<?php the_field('first_kitchen_second_image_link'); ?>" alt="<?php the_field('first_kitchen_title'); ?>">
          </div><!--item-->
        </div><!--carousel-inner-->
        </div><!--carousel-example-generic-->
        </div><!--col-sm-5-->
        </div>

<hr>
        <div class="row featurette">
          <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php the_field('first_featurette_image_link'); ?>" alt="Generic placeholder image">
        </div>
         <div class="col-sm-7">
          <h2 class="featurette-heading"><?php the_field('first_featurette_title'); ?><span class="text-muted"><a href="<?php the_field('first_featurette_subtitle_link'); ?>"><?php the_field('first_featurette_subtitle'); ?></a></span></h2>
          <p class="lead"><?php the_field('first_featurette_paragraph'); ?></p>
        </div>

        </div>

<hr>

        <div class="row featurette">
          <div class="col-sm-7">
          <h2 class="featurette-heading"><?php the_field('second_featurette_title'); ?><span class="text-muted"><a href="<?php the_field('second_featurette_subtitle_link'); ?>"><?php the_field('second_featurette_subtitle'); ?></a></span></h2>
          <p class="lead"><?php the_field('second_featurette_paragraph'); ?></p>
        </div>
           <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php the_field('second_featurette_image_link'); ?>" alt="Generic placeholder image">
=======
<hr>

        <div class="row featurette">
         <div class="col-sm-7">
          <h2 class="featurette-heading">Measure your room. <span class="text-muted"><a href="http://www.mj-pm.co.uk/simplekitchens/measuring-your-kitchen/">Read our handy guide.</a></span></h2>
          <p class="lead">Part of the reason we're able to offer our kitchen units at such exceptional value is that we don't bundle an expensive measuring service. Instead we provide a comprehensive guide to measuring your room.</p>
        </div>
          <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/DSCF8996.jpg" alt="Generic placeholder image">
>>>>>>> 7ddade3ac47e9f0c4b40ad73871fe4b5c94a67b4
        </div>
        </div>

<hr>

        <div class="row featurette">
<<<<<<< HEAD
          <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php the_field('third_featurette_image_link'); ?>" alt="Generic placeholder image">
        </div>
         <div class="col-sm-7">
          <h2 class="featurette-heading"><?php the_field('third_featurette_title'); ?><span class="text-muted"><a href="<?php the_field('third_featurette_subtitle_link'); ?>"><?php the_field('third_featurette_subtitle'); ?></a></span></h2>
          <p class="lead"><?php the_field('third_featurette_paragraph'); ?></p>
        </div>
        </div>
<hr>
        <div class="row featurette">
         <div class="col-sm-7">
          <h2 class="featurette-heading"><?php the_field('fourth_featurette_title'); ?><span class="text-muted"><a href="<?php the_field('fourth_featurette_subtitle_link'); ?>"><?php the_field('fourth_featurette_subtitle'); ?></a></span></h2>
          <p class="lead"><?php the_field('fourth_featurette_paragraph'); ?></p>
        </div>
          <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php the_field('fourth_featurette_image_link'); ?>" alt="Generic placeholder image">
        </div>
        </div>
</div>
=======
        <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/kitchen-design-software-pictures-50067.jpg" alt="Generic placeholder image">
        </div>
         <div class="col-sm-7">
          <h2 class="featurette-heading">Design your kitchen. <span class="text-muted">Using our <em>free</em> online tool.</span></h2>
          <p class="lead">We provide an easy-to-use online tool for you to design your kitchen in your web browser. You can then save your kitchen plan and order your units from within our website!</p>
          <p>Alternatively, here's a guide to designing your kitchen the old-fashioned way, with pen and paper.</p>
        </div>
        </div>
        <hr>

        <div class="row featurette">

         <div class="col-sm-7">
          <h2 class="featurette-heading">Browse our catalogue. <span class="text-muted"><a href="http://www.mj-pm.co.uk/simplekitchens/shop/">Select your units and order</a>.</span></h2>
          <p class="lead">If you already have a good idea of what you're looking for, click here to browse and choose our kitchen units.</p>
        </div>
                <div class="col-sm-5">
          <img class="featurette-image img-responsive" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/Voila_Capture-2014-05-03_09-51-32_pmb.png" alt="Generic placeholder image">
        </div>
        </div>

>>>>>>> 7ddade3ac47e9f0c4b40ad73871fe4b5c94a67b4
<hr>

<?php the_field('homepage1'); ?>


		</div><!-- .col-sm-9 -->

	</div><!-- .row -->



</div><!-- .container-fluid -->
	
<?php get_footer(); ?>