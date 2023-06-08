<?php
require_once ABSPATH . '/vendor/autoload.php';

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * @param $path
 */
function asset($path)
{
    echo get_stylesheet_directory_uri() . "/assets/$path";
}

/**
 * @param $param
 */
function dd($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    exit();
}

/**
 * Function register menu
 */
register_nav_menus([
    'header-nav' => 'Header menu',
    'footer-nav' => 'Footer menu',
]);
/**
 * Table Contact
 */
// function mng_table_contact(){
//     global $wpdb;
//     $charsetCollate = $wpdb->get_charset_collate();
//     $contact = $wpdb->prefix . 'contacts';
//     $createContactTable = "CREATE TABLE IF NOT EXISTS `{$contact}` (
//             `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
//             `company_name` varchar (255) ,
//             `person_charge` varchar(255) ,
//             `phone_number` varchar(255) ,
//             `email` varchar(255) ,
//             `content_inquiry` longtext ,
//             `created_at` timestamp NOT NULL,
//             PRIMARY KEY (`id`)
//         ) {$charsetCollate};";
//     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//     dbDelta( $createContactTable );
// }
// add_action('init', 'mng_table_contact');

/**
 * Action when user send contact
 */
 add_action('wp_ajax_confirm_user_contact', 'confirmUserContact');
 add_action('wp_ajax_nopriv_confirm_user_contact', 'confirmUserContact');
 function confirmUserContact(){
     global $wpdb;

     $data = $_POST;
//     $dataContact = [
//         'name' => $data['company_name'] ?? null,
//         'furigana' => $data['furigana'] ?? null,
//         'postcode' => $data['postcode'] ?? null,
//         'prefecture' => $data['prefecture'] ?? null,
//         'address' => $data['address'] ?? null,
//         'phone_number' => $data['phone_number'] ?? null,
//         'email' => $data['email'] ?? null,
//         'plan_construction' => $data['plan_construction'] ?? null,
//         'content_inquiry' => $data['content_inquiry'] ?? null,
//         'created_at' => date('Y-m-d H:i:s')
//     ];

     $templateJa = '
     <div style="display: flex; margin-bottom: 20px">
                             <span style="display: block; width: 180px">法人様名: </span>
                             <span style="display: block;" class="data-contact-name">'.$data['company_name'].'</span>
                         </div>
                         <div style="display: flex; margin-bottom: 20px">
                             <span style="display: block; width: 180px">ご担当者様名: </span>
                             <span style="display: block;" class="data-contact-furigana">'.$data['person_charge'].'</span>
                         </div>
                         <div style="display: flex; margin-bottom: 20px">
                             <span style="display: block; width: 180px">お電話番号: </span>
                             <span style="display: block;" class="data-contact-postcode">'.$data['phone_number'].'</span>
                         </div>
                         <div style="display: flex; margin-bottom: 20px">
                             <span style="display: block; width: 180px">メール: </span>
                             <span style="display: block;" class="data-contact-prefecture">'.$data['email'].'</span>
                         </div>
                         <div style="display: flex; margin-bottom: 20px">
                             <span style="display: block; width: 180px">問い合わせ内容: </span>
                             <span style="display: block;" class="data-contact-address">'.$data['content'].'</span>
                         </div>
                         
     ';

     try {
         $mail = new PHPMailer\PHPMailer\PHPMailer(true);
         $mail->isSMTP();
         $mail->CharSet  = "utf-8";
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'kharnam3009@gmail.com';
         $mail->Password = 'arohdxyecfvwwljd';
         $mail->SMTPSecure = 'tsl';
         $mail->Port = 587;
         $mail->setFrom('no-reply@mngjapan.com', 'MNG 人材開発株式会社');
         $mail->addAddress('khanamdev@gmail.com');
         $mail->isHTML(true);
         $mail->Subject = '[MNG 人材開発株式会社] お問い合わせ';
         $mail->Body = $templateJa;
         $mail->smtpConnect( array(
             "ssl" => array(
                 "verify_peer" => false,
                 "verify_peer_name" => false,
                 "allow_self_signed" => true
             )
         ));
         echo  $mail->send();
         die();

     } catch (Exception $e){
         echo $e->getMessage();
     }
     die();
 }
