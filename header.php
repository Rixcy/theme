<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <?php 
        // Fix menu overlap
         if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
        ?>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navcollapse">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php bloginfo('wpurl');?>">Home</a></li>
                <?php wp_list_pages( '&title_li=' ); ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
