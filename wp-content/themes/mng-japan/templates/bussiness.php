<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:22
 * Template Name: Business
 */
?>
<?php get_header(); ?>
<main id="main">


    <section id="flow-diagram" class="padding-content">
        <div class="container">
            <h2 class="title">ご依頼から就業までのフロー図（一例）</h2>
            <div class="line w-100"></div>
            <div class="flow mb-5">
                <img class="text-fixed" src="<?php asset('images/textflow1.png'); ?>" alt="">
                <div class="content w-100">
                    <img class="flow1" src="<?php asset('images/flow1.png'); ?>" alt="">
                    <p class="mt-4">
                        弊社は主にベトナム人の求職者紹介をしております。
                        <br>
                        もちろん日本人、他の外国人の方々も紹介可能です。
                        <br>
                        採用までの料金は一切かかりません。採用決定まで何人でも無料で
                        <br>
                        紹介させて頂きます。
                        <br>
                        弊社では事前に求職者と面談・対話を実施し、日本語力、
                        <br>
                        業務経験、保有スキル、適性など
                        <br>
                        総合的に判断して常に精度の高いマッチングを目指しています。
                    </p>
                    <p class="info">
                        <span class="font-bold">※アピールポイント </span>
                        <br>
                        日本在住のベトナム人をはじめ、外国人の方々は将来の夢や目的意識が高く、困難に立ち
                        <br>
                        向かい我慢強く乗り越えようとする意思が強い方が多数おれらます。
                        <br>
                        そして何より真面目、勤勉ですのでご採用頂いた企業様からお褒めの言葉を頂いております。
                        <br>
                        もちろん、ご採用後のアフターフォローも対応させて頂いております。
                    </p>
                </div>
            </div>
            <img src="<?php asset('images/flow.png'); ?>" class="" alt="">
            <p class="font-bold mt-5">※ ご採用後に早期離職に至ってしまった場合、<span style="color: red">返金保証</span>がございます</p>
            <table class="table table-bordered mt-3 text-center">
                <tr>
                    <td>入社後</td>
                    <td>1ヶ月以内に退職</td>
                    <td>1~2ヶ月以内に退職</td>
                    <td>2~3ヶ月以内に退職</td>
                </tr>
                <tr>
                    <td>返金</td>
                    <td class="col-refund">
                        <div >
                            <span>紹介手数料の</span>
                            80%
                        </div>
                    </td>
                    <td class="col-refund">
                        <div>
                            <span>紹介手数料の</span>
                            50%
                        </div>
                    </td>
                    <td class="col-refund">
                        <div>
                            <span>紹介手数料の</span>
                            20%
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>


</main>
<?php get_footer(); ?>

