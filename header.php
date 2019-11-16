<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="navigation__button">
    <span></span>
    <span></span>
    <span></span>
</div>

<header class="navigation">
    <div class="navigation__container container">
        <div class="navigation__title">
            <a href="/">
                <h1>[Name]</h1>
            </a>
        </div>
        <div class="navigation__links">
            <ul>
                <li><a href="#" title="">link</a></li>
                <li><a href="#" title="">link</a></li>
                <li><a href="#" title="">link</a></li>
            </ul>
        </div>
    </div>
</header>