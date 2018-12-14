<?php
 /* Main Footer Template */
?>
<?php wp_footer(); ?>
</main>
<footer class="footer">
    <div class="social-icons">
        <?php
        wp_nav_menu( $arg = [
            'theme_location' => 'footer'
        ]);
        ?>
    </div>
    <div class="footer-text">made with ❤️ and 🍵 in Bruges</div>
</footer>
</body>
</html>