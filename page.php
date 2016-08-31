<?php get_header(); ?>
    
    <?php 
        $page = 'home';
        switch (get_permalink()) {
            case '/some-page':
                $page = 'some-page';
                break;
            default:
                break;
        }
        include 'pages/' . $page . '.php';
    ?>

<?php get_footer(); ?>