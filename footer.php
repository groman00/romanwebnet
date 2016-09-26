        <footer class="footer" <?php if (get_permalink() == '/') echo 'data-50p="opacity:0;" data-100p="opacity:1;"'; ?>>
            <div class="container">&copy; <?php echo date('Y') ?> <a href="http://www.romanwebnet.com">romanwebnet.com</a></div>
        </footer>
        <?php include 'icons.php'; ?>        
        <?php wp_footer(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bundle.js"></script>
    </body>
</html>

