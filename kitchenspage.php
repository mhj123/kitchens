<?php
/*
Template Name: kitchenspage

 */
get_header();
?>

<div class="container-fluid">
	<div class="row">
    <div class="col-sm-3">
    <?php include('sidebar.php'); ?>

</div>

    <div class="container marketing">


    <div class="col-sm-9">

      <!-- Three columns of text below the carousel -->
      <div class="row">

<h1><?php the_title();?></h1>

        <div class="col-sm-6">
<div class="imgcentr">
          <img class="img-circle" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/MG_5283-hancock.jpg" alt="Generic placeholder image" style="width: 200px; height: 200px;">
</div>
          <h2>Hancock</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="http://www.mj-pm.co.uk/simplekitchens/hancock-kitchen-range/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-6">
<div class="imgcentr">
          <img class="img-circle" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/MG_1428-groveland.jpg" alt="Generic placeholder image" style="width: 200px; height: 200px;">
</div>
          <h2>Groveland</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="http://www.mj-pm.co.uk/simplekitchens/hancock-kitchen-range/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
</div>
<div class="row">
        <div class="col-sm-6">
<div class="imgcentr">
          <img class="img-circle" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/MG_1201-1.jpg" alt="Generic placeholder image" style="width: 200px; height: 200px;">
</div>
          <h2>Tyringham</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="http://www.mj-pm.co.uk/simplekitchens/hancock-kitchen-range/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-6">
<div class="imgcentr">
          <img class="img-circle" src="<?php echo home_url(); ?>/wp-content/uploads/2014/05/MG_4057.jpg" alt="Generic placeholder image" style="width: 200px; height: 200px;">
</div>
          <h2>Goreham</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="http://www.mj-pm.co.uk/simplekitchens/hancock-kitchen-range/" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
</div>
</div><!--container marketing -->
</div>
</div>

<?php get_footer(); ?>