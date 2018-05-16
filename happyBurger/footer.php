<footer>
    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/links.png " alt=""></a>            
</footer>

<?php wp_footer();?>

</div>
</div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript " src="https://code.jquery.com/jquery-3.2.1.min.js "></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js "></script>
    <script>
    
        // main dropdown initialization
$('.dropdown-button.main-menu-item').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
});
// nested dropdown initialization
$('.dropdown-button.sub-menu-item').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: ($('.dropdown-content').width() * 3) / 3.05 + 3, // Spacing from edge
    belowOrigin: false, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
});

    </script>
</body>

</html>