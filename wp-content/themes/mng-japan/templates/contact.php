<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:22
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<main id="main">
    <section id="banner-home">
        <img src="<?php asset('images/contact.png'); ?>" class="img-banner" alt="">
    </section>
    <section id="contact" class="padding-content bg-white">
        <div class="container">
            <h2 class="title">お問い合わせ</h2>
            <div class="line"></div>
            <p class="font-bold text-center info">
                この度は、MNG人材開発株式会社に関心を寄せて頂き誠にありがとうございます。
                <br>
                必ず求人会社様のお役に立てると信じております。
                <br>
                下記のお問合せ先まで、ご質問、ご相談、資料ご請求などお送りください
            </p>
            <form action="" class="form-contact" id="form-contact" style="font-size: 20px">
                <div class="form-group">
                    <label for="">法人様名※</label>
                    <input required id="company_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ご担当者様名※</label>
                    <input required id="person_charge" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">お電話番号※</label>
                    <input required id="phone_number" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">メール※</label>
                    <input required id="email" type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">問い合わせ内容※</label>
                    <textarea required name="" id="content" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn">送信</button>
            </form>
        </div>
    </section>

</main>

<?php get_footer(); ?>

