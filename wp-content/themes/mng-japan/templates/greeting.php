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
    <section id="banner-home" style="">
        <img  src="<?php asset('images/BG-boss.png'); ?>" class="img-banner p-banner" alt="">
    </section>
    <section id="greeting" class="padding-content bg-white">
        <div class="container">
            <h2 class="title">ご挨拶</h2>
            <div class="line w-100"></div>
            <p class="info">
                 皆様へ
                <br>
                <br>
                <span style="opacity: 0">私</span> 私は2013年に、ベトナムから留学生として日本にやってまいりました。
                <br>
                それからの10年間、日本の方々をはじめ多くの国の人たちとの人脈を築いてまいりました。
                <br>
                その中で、多くのベトナム人の夢の実現とベトナムを含む各国の発展を支援することを
                <br>
                目指して、「MNG人材開発株式会社」を立ち上げました。
                <br>
                私たちは、多様な人材を活用し、企業や組織の成長と発展をサポートしています。
                <br>
                ベトナム人は、努力家で意欲的な人材が多く、その特性を最大限に活かして
                <br>
                日本の労働市場で貢献できると確信しております。
                <br>
                私たちは、彼らが日本のビジネス環境に適応し、貢献できるようにサポート体制も構築しています。
                <br>
                日本とベトナムは、歴史的な絆と共通の価値観に基づく友好関係を築いてきました。
                <br>
                この友好関係を深める一助となることを使命とし、ベトナム人就労の架け橋としての役割を果たしてまいります。
                <br>
                私たちは、確かな信頼と透明性を基に、お客様のニーズに合わせた最適な人材をご提供することをお約束します。
                <br>
                何卒お引立の程 よろしくお願い申し上げます。
            </p>
            <div class="signature">
                <img src="<?php asset('images/signature.png'); ?>"  alt="">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>

