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
            <img  src="<?php asset('images/bussiness1.png'); ?>" class="mb-4" alt="">
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
                            30%
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>


</main>
<?php get_footer(); ?>

