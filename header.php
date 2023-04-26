<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TrueWorld
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  
  <title>My Blog</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="https://fonts.cdnfonts.com/css/garamond" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
    <div class="nav-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="logo">
      <nav>
        <ul class="nav-links nav-menu" >
          <li><a class="nav-link active" data-category="all">All</a></li>
          <li><a class="nav-link" data-category="poetry">Poetry</a></li>
          <li><a class="nav-link" data-category="short-stories">Short stories</a></li>
          <li><a class="nav-link" data-category="opinion">Opinion</a></li>
          <li><a class="nav-link" data-category="photography">Photography</a></li>
        </ul>
      </nav>
      <div id="breadcrumb-menu">
        <div class="breadcrumb toggle-btn breadcrumb-bars">
          <!--/* <span class="breadcrumb-icon "></span> */-->
          <span class="breadcrumb-icon"></span>
          <!--/* <span class="breadcrumb-icon"></span> */-->
        </div>

        <ul>
          <li><a class="nav-link active" data-category="all">All</a></li>
          <li><a class="nav-link" data-category="poetry">Poetry</a></li>
          <li><a class="nav-link" data-category="short-stories">Short stories</a></li>
          <li><a class="nav-link" data-category="opinion">Opinion</a></li>
          <li><a class="nav-link" data-category="photography">Photography</a></li>
          
        </ul>
      </div>
    </div>
  </header>