<?php
/* Template Name: Apply for Financing */
get_header(); ?>

<style type="text/css">
    .page-id-5273 section.apply_form_new {
        margin-top: -90px;
        padding-bottom: 40px;
        z-index: 99;
        position: relative;
    }

    .page-id-5273 .main_apply_new_form_new {
        background: #1d428a;
        padding: 40px 40px 40px;
        width: 66%;
        text-align: center;
        border-radius: 30px;
        margin: 0 auto;
    }

    .page-id-5273 button {
        padding: 12px;
        font-size: 22px;
    }

    .page-id-5273 .loan-main-head h1 {
        color: #fff;
        font-size: 40px;
        padding: 0px 0px;
        font-family: var(--font-secondary);
        font-weight: 600;
        margin-bottom: 40px;
        line-height: 1.4;
        text-transform: uppercase;
    }

    .page-id-5273 .input-feilds {
        text-align: justify;
    }


    .page-id-5273 .main_apply_new_form_new p input {
        border-color: #fff;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 10px 14px 8px 14px;
        margin-bottom: 20px;
        outline: 0;
    }

    .page-id-5273 .main_apply_new_form_new p label {
        color: #fff;
        font-size: 24px;
        padding: 0px 0px;
        font-family: "Avenir";
        font-weight: 500;
        margin-bottom: 20px;
        text-transform: capitalize;

    }

    .page-id-5273 .invalid .wpcf7-response-output {
        color: #f00;
        /*border-color: #fff !important;*/
    }

    .page-id-5273 .sent .wpcf7-response-output {
        /*border-color: #fff !important;*/
        color: #28a745;
    }

    .page-id-5273 .error {
        color: #fff;
    }

    .page-id-5273 .wpcf7-not-valid-tip {
        color: #f90920;
        font-size: 1em;
        font-weight: normal;
        display: block;
    }

    @media(min-width:1200px) {
        .page-id-5273 section.apply_form_new {
            margin-top: -9%;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            margin-bottom: 10px;
            outline: 0;
        }

        .page-id-5273 button {
            font-size: 20px;
            padding: 10px 0px 10px 0px
        }


    }

    @media(min-width:1400px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 42px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 10px 30px 10px 30px;
            font-size: 23px;
        }

        .page-id-5273 button {
            font-size: 24px;
            padding: 10px 0px 10px 0px
        }
    }

    @media(min-width:1600px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 48px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 10px 30px 9px 30px;
            font-size: 24px;
        }

        .page-id-5273 button {
            font-size: 28px;
            padding: 10px 0px 9px 0px
        }
    }

    @media(min-width:1920px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 46px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 14px 24px 8px 24px;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .page-id-5273 button {
            font-size: 30px;
            padding: 14px 0px 14px 0px
        }

    }



    @media(min-width:2200px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 48px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 22px 30px 22px 30px;
            font-size: 36px;
        }

        .page-id-5273 button {
            font-size: 38px;
            padding: 22px 0px 22px 0px
        }

    }

    @media(min-width:2500px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 50px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 26px 30px 26px 30px;
            font-size: 46px;
        }

        .page-id-5273 button {
            font-size: 48px;
            padding: 32px 0px 32px 0px
        }


    }

    @media(min-width:2700px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 60px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 30px 30px 30px 30px;
            font-size: 48px;
        }

        .page-id-5273 button {
            font-size: 52px;
            padding: 30px 0px 30px 0px
        }

    }

    @media(min-width:3200px) {
        .page-id-5273 .loan-main-head h1 {
            font-size: 72px;
        }

        .page-id-5273 .main_apply_new_form_new p input {
            padding: 30px 30px 30px 30px;
            font-size: 48px;
        }

        .page-id-5273 button {
            font-size: 52px;
            padding: 30px 0px 30px 0px
        }


        .page-id-5273 p {
            padding-right: 0px;
        }

    }

    @media(max-width: 1199px) {

        .page-id-5273 .main_apply_new_form_new p input {
            margin-bottom: 10px;
        }

    }

    @media(max-width: 1024px) {

        .page-id-5273 .main_apply_new_form_new {
            padding: 40px 40px 40px;
            width: 66%;
            margin: 0 auto;
        }

        .page-id-5273 .loan-main-head h1 {
            font-size: 36px;
            padding: 0px 0px;
            font-family: var(--font-secondary);
            margin-bottom: 30px;
        }


        .page-id-5273 .main_apply_new_form_new p {
            line-height: 16px !important;
            margin-bottom: 6px;
        }

        .page-id-5273 section.apply_form_new {
            margin-top: -150px;
            padding-bottom: 40px;
            z-index: 99;
            position: relative;
        }
    }

    @media(max-width: 992px) {
        .page-id-5273 section.apply_form_new {
            padding-top: 6%;
            padding-bottom: 0px;
        }

        .page-id-5273 .loan-main-head h1 {
            font-size: 30px;
        }

        .page-id-5273 .main_apply_new_form_new p {
            line-height: 16px !important;
            margin-bottom: 10px;
        }

        .page-id-5273 section.apply_form_new {
            margin-top: -130px;
            padding-bottom: 40px;
            z-index: 99;
            position: relative;
        }

        .page-id-5273 button {
            padding: 14px;
            font-size: 22px;
        }

    }

    @media(max-width: 767px) {
        .page-id-5273 .main_apply_new_form_new {
            padding: 40px 40px 40px;
            width: 100%;
            margin: 0 auto;
        }

        .container {
            padding: 0 15px;
        }


        .page-id-5273 section.apply_form_new {
            margin-top: -80px;
            padding-bottom: 40px;
            z-index: 99;
            position: relative;
        }

    }

    @media(max-width: 576px) {
        .container {
            padding: 0 15px;
        }

        .page-id-5273 .main_apply_new_form_new {
            padding: 30px 20px 30px;
            width: 100%;
            margin: 0 auto;
        }

        .page-id-5273 .loan-main-head h1 {
            font-size: 26px;
        }

        .page-id-5273 section.apply_form_new {
            margin-top: -50px;
            padding-bottom: 40px;
            z-index: 99;
            position: relative;
        }

    }
</style>

<section class="hero_section">
    <img src="https://nvsailing.com/wp-content/uploads/2023/02/hero-bg.jpg" alt="" class="hero_bg-image">
</section>

<section class="apply_form_new">
    <div class="container">
        <div class="main_apply_new_form_new">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-main-head">
                        <h1>Apply for Financing</h1>
                    </div>
                </div>
            </div>
            <?= do_shortcode('[contact-form-7 id="5305" title="Financing Form Calculator"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script>
    $(".stock_number").val("Sailboat");
    let boat_price = "<?= $_GET['boat_price']; ?>";
    let down_payment = "<?= $_GET['down_payment']; ?>";
    let interest = "<?= $_GET['interest']; ?>";
    let term_years = "<?= $_GET['term_years']; ?>";
    let monthly_budget = "<?= $_GET['monthly_budget']; ?>";
    let manufacturer = "<?= $_GET['manufacturer']; ?>";
    let model = "<?= $_GET['model']; ?>";
    $("[name='boat_price']").val(boat_price);
    $("[name='down_payment']").val(down_payment);
    $("[name='interest']").val(interest);
    $("[name='term_years']").val(term_years);
    $("[name='monthly_budget']").val(monthly_budget);
    $("[name='manufacturer']").val(manufacturer);
    $("[name='model']").val(model);
</script>