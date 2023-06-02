<footer id="footer">
    <div class="container ">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-nav',
            'container' => 'ul',
            'container_class' => '',
            'menu_class' => 'box-header menu-footer'
        ));
        ?>
        <p class="copyright "> Copyright ©<?php echo date('Y') ?> MNG-JAPAN . All rights reserved </p>
    </div>
</footer>
<div id="back-to-top" >
    <a href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
</body>

<script src="<?php asset('js/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?php asset('js/bootstrap.min.js'); ?>"></script>
<script src="<?php asset('js/main.js'); ?>?date=<?=date('YmdGis');?>" type="text/javascript"></script>
<?php //wp_footer(); ?>
</html>