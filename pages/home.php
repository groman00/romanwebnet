<div class="home-page panel-scroller">
    <section class="panel-background">
        <div class="home-blurb">
            <!-- <div class="logo">GR</div> -->
            <h1>Gregory M. Roman</h1>
            <h4>Sr. Software Engineer</h4>
            <h6>New York, NY</h6>
        </div>
        <div class="arrow-down">
            <?php svg_icon('chevron-down', 'bounce'); ?>
        </div>
    </section>
    <section class="panel"></section>
    <section class="panel">
        <div class="container">
            <h2 class="panel-heading">Technical Experience</h2>
            <div class="technology-grid row">
            <?php
                $arr = ['Javacript', 'CSS3', 'HTML5', 'jQuery', 'Page Speed', 'SEO', 'Mobile Web', 'Bootstrap', 'Node.js', 'Backbone.js', 'Gulp', 'Sass', 'PHP', 'BrightScript'];
                foreach ($arr as &$value) {
                    echo '<div class="col-m-6 col-t-4 "><h4 class="title animated" data-animation="swing">' . $value . '</h4></div>';
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
                    Hello, my name is Greg Roman and I'm a Senior Software Engineer based in New York City.  
                    I am currently employed by AOL Inc. as a member of the AOL Alpha team.  
                    I have 8+ years of experience building modern, high performing websites and applications for nationally recognized brands.
                    More recently, I have developed multiple channels for <a href="https://www.roku.com/" target="_blank">Roku</a> and prototypes for <a href="https://www.oculus.com/" target="_blank">Oculus Rift</a>.
                    Feel free to <a title="Email" href="mailto:greg@romanwebnet.com">contact me</a> for any reason or go check me out on Twitter <a href="https://twitter.com/romanwebnet" title="Twitter" target="_blank">@romanwebnet</a>
                </p>
            </div>
        </div>
    </section>    
</div>