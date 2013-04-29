<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--the name of the page or post in the title
      and have the name of the site as well -->
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <link href="/wp-content/themes/ventureLateralBootstrap/style-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>

    <!-- the wp_head() function is what plugins and themes 
    use to add CSS and JavaScript to the header.php file-->
    <?php wp_head(); ?>
  </head>
  <body>

  <!-- Part 1: Wrap all page content here -->
  <div id="wrap">

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">
              
              <li class="page_item page-item-1 current_page_item"><a href="/index.php"><i class="icon-home marginRight"></i>Home</a></li>
              <li class="page_item page-item-2 current_page_item"><a href="/blog"><i class="icon-bookmark marginRight"></i>Blog</a></li>
              <li class="page_item page-item-1 current_page_item"><a href="/index.php#work"><i class="icon-briefcase marginRight"></i>Work</a></li>
              <li class="page_item page-item-3 current_page_item"><a href="/hire"><i class="icon-star marginRight"></i>Hire</a></li>
              <li class="page_item page-item-4 current_page_item"><a href="/about"><i class="icon-user marginRight"></i>About</a></li>
              <li class="page_item page-item-4 current_page_item"><a href="/what-i-learned-from-past-start-ups"><i class="icon-lightbulb marginRight"></i>Start Up Lessons</a></li>
              <li class="page_item page-item-4 current_page_item"><a href="/wp-content/themes/ventureLateralBootstrap/pavan-katepalli-developer.pdf"><i class="icon-list-alt marginRight"></i>Resume</a></li>

          
          </ul>

          <ul class="nav pull-right">

                <li class="page_item page-item-5 current_page_item"><a href="https://github.com/pavankat" target="_blank"><i class="icon-github-alt"></i></a></li>
                <li class="page_item page-item-6 current_page_item"><a href="http://www.twitter.com/pavankat" target="_blank"><i class="icon-twitter"></i></a></li>
                <li class="page_item page-item-7 current_page_item"><a href="http://www.linkedin.com/in/pavankat" target="_blank"><i class=" icon-linkedin-sign"></i></a></li>
              

              <!-- took out second paramater of the below function
              , 'exclude' => 4-->
              <?php //wp_list_pages(array('title_li' => '')); ?>

          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container" id="bodyPadding">