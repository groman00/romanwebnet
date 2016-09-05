<div class="home-page panel-scroller">
    <section class="panel-background">
        <div class="home-blurb">
            <div class="logo">GR</div>
            <h1>Greg Roman</h1>
            <h4>Senior Software Engineer</h4>
            <h6>New York, NY</h6>
        </div>
        <div class="arrow-down">
            <?php svg_icon('chevron-down', 'bounce'); ?>
        </div>
    </section>
    <section class="panel"></section>
    <section class="panel">
        <div class="container">
            <h2 class="panel-heading">Technologies</h2>
            <div class="technology-grid row">
            <?php
                $arr = ['Javacript', 'CSS3', 'HTML5', 'jQuery', 'Page Speed', 'SEO', 'Mobile Web', 'Bootstrap', 'Node.js', 'Backbone.js', 'Gulp', 'Sass', 'PHP'];
                foreach ($arr as &$value) {
                    echo '<div class="col-m-6"><h4 class="title">' . $value . '</h4></div>';
                }
            ?>                                                             
            </div>
        </div>
    </section>
    <section class="panel">
        <div class="container">
            <div class="home-bio">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/IMG_0063.JPG"/>
                </div>
                <p class="copy">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat ornare purus, accumsan venenatis lectus faucibus vitae. Sed bibendum est id hendrerit suscipit. Mauris viverra mi justo, id malesuada neque tristique id. Phasellus vel commodo massa, a mattis enim. Pellentesque sit amet tempor augue. Suspendisse dui nibh, vehicula non eros at, aliquam ultricies odio. Fusce ac pellentesque nulla. Etiam consectetur tortor quis mauris pellentesque maximus. Sed porttitor turpis non urna porttitor tincidunt.
                </p>
            </div>
        </div>
    </section>    
</div>