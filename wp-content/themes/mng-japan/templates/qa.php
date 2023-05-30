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
            <h2 class="title">～　よ く あ る ご 質 問　～</h2>
            <div class="line w-100"></div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="qa-image position-relative">
                        <span>?</span>
                        <img src="<?php asset('images/qa.png'); ?>" class="" alt="">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel-group" id="accordion">
                        <h4 class="faqHeader mt-0">■ 採用までの期間について </h4>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            求人をお願いしてから、採用まで期間はどのくらいかかりますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        通常2～3週間かかります。
                                        <br>
                                        お急ぎの場合でもお気軽にご相談下さい。
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h4 class="faqHeader">■ 求職者の能力について </h4>

                        <div class="accordion" id="">
                            <div class="card">
                                <div class="card-header" id="">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            求職者の日本語能力はどのくらいですか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseTwo" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        原則として日常会話可能レベルであるN2以上（N1相当）
                                        <br>
                                        の能力を有するものとしています。
                                        <br>
                                        これらは弊社にて事前に面談し、能力把握をしております
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                            特定技能者を紹介してくれますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse3" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        経験豊かな特定技能資格を有するものを紹介できます。
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-group" id="accordion">
                        <h4 class="faqHeader">■ 面接について </h4>
                        <div class="accordion" id="">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                            採用は一人ですが、面接は複数人可能ですか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse4" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        ご採用まで、何人でもご紹介させて頂きます。
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            紹介された候補者には、必ず面接しなければなりませんか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse5" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        いいえ、面接をキャンセルされても問題ありません。
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h4 class="faqHeader">■ 費用について </h4>
                        <div class="accordion" id="">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                            求人をお願いしてから、採用までにお金はかかりますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse6" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        ご採用に至るまでには費用は一切かかりません。
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                            紹介手数料の内訳を教えてください？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse7" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        ご採用者年収（月収+諸手当+賞与）に対して　× 規定率（％）となります。
                                        <br>
                                        求人企業様よりご提示頂きます雇用通知書（労働条件通知書）により決定させて頂きます。
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                            紹介料の支払い時期・タイミングは、いつですか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse8" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        就業に入った時点（入社日）より10日以内にてお願いしております。
                                        <br>
                                        詳しくは契約書に基づき、説明させて頂きます。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel-group" id="accordion">
                        <h4 class="faqHeader">■ 返金制度について </h4>
                        <div class="accordion" id="">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                            本人の都合により、退職した場合 紹介料を返してくれますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse9" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        就業した期間により変動しますが、理由を問わず返金致します。
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                            会社の都合で、退職させた場合 紹介料を返してくれますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse10" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        申し訳ございません。 その場合は返金に応じられません。
                                        <br>
                                        （ 状況に応じてご相談して頂きたく存じます ）
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h4 class="faqHeader">■ ビザについて </h4>
                        <div class="accordion" id="">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                            ビザ申請中は就業はできますか？
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse11" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        はい、問題なく働くことができます。
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <p class="font-bold text-center mt-5" style="font-size: 22px">
                ここまでお読みいただき、また、関心を寄せて頂きありがとうございます。
                <br>
                その他、気になる点がございましたら、下記までお気軽にお問い合わせください
            </p>
            <div class="group-block-content">
                <div class="block-content mt-4 cursor-pointer">
                    <a href="">相談・お問い合わせ・資料請求はこちら →</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-7">
                    <table class="table-info bg-white m-auto">
                        <tr>
                            <td class="pr-3">電話番号</td>
                            <td>: 049-256-7139</td>
                        </tr>
                        <tr>
                            <td class="pr-3">URL</td>
                            <td>: <a href="http://mngjapan.com/">http://mngjapan.com/</a></td>
                        </tr>
                        <tr>
                            <td class="pr-3">代表メールアドレス・問い合わせ先</td>
                            <td>: admin@mng.jp</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 text-center">
                    <img style="height: 140px; width: auto" src="<?php asset('images/qrcode_mngjapan.com.png'); ?>" alt="">
                </div>
            </div>
        </div>
        
    </section>

</main>
<?php get_footer(); ?>

