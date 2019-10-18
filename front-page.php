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

  <!--
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.css.map"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css.map"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.css.map"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css.map"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css.map"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css.map"/>
  -->

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

        <style>
          #catsubcat {
            list-style: none;
            padding: 0 0 0 0;
            width: 170px;
          }
          #catsubcat li {
            display: block;
            background-color: rgb(139,146,91);
            font-weight: bold;
            margin: 6px 1px;
            cursor: pointer;
            padding: 20px;
            list-style: circle;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 3px;
          }
          #catsubcat li:hover {
            background-color: rgba(77,91,67,1);
          }
          #catsubcat ul {
            list-style: none;
            padding: 0 0 0 0;
          }
          #catsubcat ul{
            display: none;
          }
          #catsubcat ul li {
            font-weight: normal;
            cursor: auto;
            background-color: #fff;
            padding: 0 0 0 7px;
          }
          #catsubcat a {
            text-decoration: none;
          }
          #catsubcat a:hover {
            /*text-decoration: underline;*/
          }

          .list-group-item a {
            font-size: 30px;
            font-family: sans-serif;
            color: white;
          }
          .list-group-item:nth-child(1) {
            display: none;
          }
        </style>

      </p>


      <!--
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
      -->
    
     
    </div>
 </div>

  <script>
    $("#catsubcat > li").click(function(){

    if(false == $(this).next().is(':visible')) {
      $('#catsubcat ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
    });

    $('#catsubcat ul:eq(0)').show();
  </script>
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.js.map"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js.map"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js.map"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js.map"></script>
  -->

</body>
</html>


