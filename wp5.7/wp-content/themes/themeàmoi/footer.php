    </div>
    <footer>
        <?php
        wp_nav_menu  ([
            'theme_location' => "footer",
            'container' => false, //retirer le container du bootstrap
            'menu_class' => "navbar-nav mr-auto"
        ])                
        ?>
    </footer>
    <?php wp_footer() ?>
</body>
</html>