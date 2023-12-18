<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:22
 * Template Name: Q&A
 */
?>
<?php get_header(); ?>
<main id="main">
    <section id="qa" class="padding-content">
        <div class="container">
            <h2 class="title">よ く あ る ご 質 問</h2>
            <div class="line w-100"></div>

            <div class="row  text-center" style="margin-top: 100px">
                <div class="col-lg-9 col-xl-9 col-md-12 col-12 col-qa">
                    <div class="group-qa">
                        <div class="item-qa">
                            <div class="position-relative">
                                <img class="question-user left" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                <p data-group="採用までの期間について" data-order="Q1" class="question first position-relative">求人をお願いしてから、採用まで期間はどのくらいかかりますか？</p>
                            </div>
                            <div class="position-relative reverse">
                                <img class="answer-user right" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                <p class="answer">最短で1週間です。詳細はお気軽にご相談下さい。</p>
                            </div>
                        </div>
                    </div>
                    <div class="group-qa">

                            <div class="item-qa">
                                <div class="position-relative reverse">
                                    <img class="question-user right" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                    <p data-group="採用・派遣の地域について" data-order="Q2" class="question first position-relative">求人の依頼地域はどこまで可能ですか？</p>
                                </div>
                                <div class="position-relative ">
                                    <img class="answer-user left" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                    <p class="answer"> 全国対応致します。</p>
                                </div>
                            </div>


                    </div>
                    <div class="group-qa">
                        <div class="item-qa">
                            <div class="position-relative">
                                <img class="question-user left" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                <p data-group="求職者の日本語能力について" data-order="Q3" class="question first  position-relative"> 求職者の日本語能力はどのくらいですか ?</p>
                            </div>
                            <div class="position-relative reverse">
                                <img class="answer-user right" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                <p class="answer">原則として日常会話可能レベルであるN3からN2、専門性が求められる場合N1相当の可能を有するものとしています。 <br>
                                    これらは弊社にて事前に面談し、能力把握をしております。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="group-qa">
                        <div class="item-qa">
                            <div class="position-relative reverse">
                                <img class="question-user right" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                <p data-group="費用について" data-order="Q3-1" class="question first position-relative"> 派遣、紹介などそれぞれの費用が知りたい ?</p>
                            </div>
                            <div class="position-relative">
                                <img class="answer-user left" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                <p class="answer"> 退職時期に応じて返金致します。</p>
                            </div>
                        </div>
                        <div class="item-qa">
                            <div class="position-relative">
                                <img class="question-user left" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                <p data-group="面接について" data-order="Q3-2" class="question first position-relative"> 会社の都合で、退職させた場合 紹介料を返してくれますか?</p>
                            </div>
                            <div class="position-relative reverse">
                                <img class="answer-user right" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                <p class="answer">
                                    求職者レベルや相場に応じて、ご提示させて頂きます。 <br> お見積り提示後でもご相談可能です。
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="group-qa">
                        <div class="item-qa">
                            <div class="position-relative reverse">
                                <img class="question-user left" src="<?php asset('images/QA01@2x.png'); ?>"  alt="">
                                <p data-group="ビザについて" data-order="Q4-1" class="question first position-relative">ビザについて相談できますか?</p>
                            </div>
                            <div class="position-relative ">
                                <img class="answer-user right" src="<?php asset('images/QA02@2x.png'); ?>"  alt="">
                                <p class="answer">はい。専門のスタッフがいますので、いつでもご相談ください。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-bold text-center mt-5 title-second" style="font-size: 22px">
                その他、気になる点がございましたら、下記までお気軽にご相談下さい。
            </p>
            <div class="item-quick-contact mt-3">
                <div class="info">
                    <table class="table-info bg-white">
                        <tr>
                            <td class="pr-3">電話番号</td>
                            <td>: 049-256-7139</td>
                        </tr>
                        <tr>
                            <td class="pr-3">URL</td>
                            <td>: <a href="https://mngjapan.co.jp/">https://mngjapan.co.jp/</a></td>
                        </tr>
                        <tr>
                            <td class="pr-3 swap-content"><span>代表メールアドレス・問い合わせ先</span><span style="display: none">メール</span></td>
                            <td>: mngjvkakehashi@gmail.com</td>
                        </tr>
                    </table>
                </div>
                <div class="qr">
                    <img style="height: 130px; width: auto" src="<?php asset('images/qrcode_mngjapan.com.png'); ?>" alt="">
                </div>
            </div>
        </div>

    </section>

</main>
<?php get_footer(); ?>

