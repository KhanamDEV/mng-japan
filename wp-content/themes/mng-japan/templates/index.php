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
    <section id="banner-home" class="position-relative">
        <img src="<?php asset('images/home_page.png'); ?>" alt="" class="img-banner">
        <div style="
    position: absolute;
    bottom: 60px;
    left: 0;
    text-align: center;
    width: 100%;
">
            <p class="sub-title"
               style="font-size: 35px;color: white;line-height: 35px;line-height: 50px;background-color: #ffff008a;display: inline-block;padding: 5px 35px;">
                私たちは外国人の就労を応援しています</p>
        </div>

    </section>
    <section id="recruitment" class="padding-content bg-white">
        <div class="container">
            <h2 class="title" style="font-size: 40px; color: #E52138">人材開式会社</h2>

            <div class="line"></div>
            <h2 class="title" style="font-size: 40px">の強み</h2>
            <div class="group-block-content ">
                <div class="row">
                    <div class="col-md-3">
                        <div class="block-content cursor-pointer">
                            <a href="<?php echo get_permalink('24')?>"><span class="position-relative">人材募集力</span></a>
                            <div class="sub-content">
                                外国籍の方々を <br> メインにして <br>
                                ご依頼の人数を <br> 提供可能です
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-content cursor-pointer">
                            <a href="<?php echo get_permalink('24')?>"><span class="position-relative">提案力</span></a>
                            <div class="sub-content">
                                保有スキル、<br>
                                経験など <br>
                                貴社ニーズに <br>
                                合わせて紹介致します
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-content cursor-pointer">
                            <a href="<?php echo get_permalink('24')?>"><span class="position-relative">管理体制</span></a>
                            <div class="sub-content">
                                経験豊富な <br>
                                スタッフが <br>
                                常時対応致します
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="block-content cursor-pointer">
                            <a href="<?php echo get_permalink('24')?>"><span class="position-relative">業務提携</span></a>
                            <div class="sub-content">
                                国内外送り出し <br>
                                機関や <br>
                                多くの協力会社様 <br>
                                と連携しています

                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content mt-4 cursor-pointer">
                    <a class="font-large" href="<?php echo get_permalink('29')?>"><span class="position-relative">相談・お問い合わせ・資料請求はこちら →</span></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

