<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:22
 * Template Name: Greeting
 */
?>
<?php get_header(); ?>
<main id="main">
    <section id="banner-home">
        <img src="<?php asset('images/greeting.jpg'); ?>" class="img-banner" alt="">
    </section>
    <section id="greeting" class="padding-content bg-white">
        <div class="container">
            <h2 class="title">ご挨拶</h2>
            <div class="line w-100"></div>
            <p class="info">
                私は2013年に、ベトナムから留学生として日本にやってまいりました。
                <br>
                2023年 現在までの10年間に、 日本の方々をはじめ、多くの国の人たちとの人脈を築いてきました。
                <br>
                その中で、ベトナムをはじめアジア諸国の方々の就業支援をすることにより
                <br>
                みんなの夢の実現とさらにはその国々の発展の一助になりたいとの思いから、
                <br>
                この度「MNG人材開発株式会社」を立ち上げる運びとなりました。
                <br>
                弊社は、あらゆる業種・分野にも対応できるよう豊富な人材を揃えております。
                <br>
                会社設立1か月足らずで、求職者登録数は100名を超えました。
                <br>
                弊社としては、これに満足せずにさらに優秀な人材を紹介できるよう日々邁進しております。
                <br>
                具体的には日本語能力N2以上、 N1相当を有し、ご要望に応えられる人材を提案させて頂きます。
                <br>
                <br>
                MNG人材開発株式会社 社員一同、 企業様の発展にお役に立てることを信じております。
            </p>
            <div class="signature">
                <img src="<?php asset('images/signature.png'); ?>" class="img-banner" alt="">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>

