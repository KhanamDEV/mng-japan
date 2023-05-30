<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:22
 * Template Name: Index
 */
?>
<?php get_header(); ?>
<main id="main">
    <section id="banner-home">
        <img src="<?php asset('images/home_page.png'); ?>" alt="">
    </section>
    <section id="recruitment" class="padding-content bg-white">
        <div class="container">
            <h2 class="title">人材紹介手数料は30万から</h2>
            <p class="sub-title">お問い合わせ・ご依頼いただいた後、<br>最短1週間で面談可能</p>
            <div class="line"></div>
            <h2 class="title">3つの特徴</h2>
            <div class="group-block-content ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="block-content">
                            <p>入職までの費用は 完全無料</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block-content">
                            <p>面接回数は 無制限</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block-content">
                            <p>返金規定あり</p>
                        </div>
                    </div>
                </div>
                <div class="block-content mt-4 cursor-pointer">
                    <a href="">相談・お問い合わせ・資料請求はこちら →</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

