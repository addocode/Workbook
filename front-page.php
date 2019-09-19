<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">

  <title>Workbook Frontpage</title>
  <meta name="description" content="Workbook Zentrum elektronische Medien">
  <meta name="Adam Dolinsky" content="Mediamatiker in Ausbildung">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/wappen-ch-300x300.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/wappen-ch-300x300.png" type="image/x-icon"/>
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-front-page.css"/>

</head>

<body>
  <div class="whitespace">
    <div class="sideL">
	
	<img src="<?php echo get_template_directory_uri(); ?>/img/lba.svg">

    </div>
    <div class="sideR">
      <section id="search-2" class="widget widget_search">
        <form role="search" method="get" class="search-form" action="http://localhost:8888/wordpress/">
          <input type="search" id="search-form-1" class="search-field" placeholder="Suchen&nbsp;…" value="" name="s">
        </form>
      </section>
      <div class="the-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-zem-2.svg" class="logo-zem-header">
        <h1 class="mainpage-h1">archiv der workbooks</h1>
      </div>
      <p class="mainpage-p">
	  
        <?php
        // Show the selected front page content.
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'front-page' );
          endwhile;
        else :
          get_template_part( 'template-parts/post/content', 'none' );
        endif;
        ?>

        <?php if( dynamic_sidebar('front_page_widget_area') ) : else : endif; ?>

      </p>


      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
      <?php endif;?>

     
    </div>
  </div>
</body>
</html>


