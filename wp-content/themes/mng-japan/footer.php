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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php asset('js/main.js'); ?>?date=<?=date('YmdGis');?>" type="text/javascript"></script>
<script>
    $(function (){
        $('#form-contact').submit(function(){
            Swal.showLoading();
            $.ajax({
                method : "POST",
                url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data : {
                    action: "confirm_user_contact",
                    company_name: $("#company_name").val(),
                    person_charge: $("#person_charge").val(),
                    phone_number: $("#phone_number").val(),
                    email: $("#email").val(),
                    content: $("#content").val(),
                },

                success: function(response) {
                    console.log(response);
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            })
            return false;
        })
    });
</script>
<?php //wp_footer(); ?>
</html>