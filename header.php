<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" rel="stylesheet">
</head>
    <body>
    <header id="header" class="header">
        <nav class="nav container">
            <a class="nav-item" href="/blog/" title="Blog">
                <?php svg_icon('rss'); ?>
            </a>
            <a class="nav-item" href="https://twitter.com/romanwebnet" title="Twitter" target="_blank">
                <?php svg_icon('twitter'); ?>
            </a>            
            <a class="nav-item" href="https://github.com/groman00" title="Github" target="_blank">
                <?php svg_icon('github'); ?>
            </a>
            <a class="nav-item" href="https://www.linkedin.com/in/gregory-roman-8486485" title="LinkedIn" target="_blank">
                <?php svg_icon('linkedin'); ?>
            </a>            
            <a class="nav-item" href="mailto:greg@romanwebnet.com" title="E-mail">
                <?php svg_icon('email'); ?>
            </a>
        </nav>
    </header>
