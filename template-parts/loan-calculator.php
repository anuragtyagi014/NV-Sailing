<?php
/* Template Name: loan calculator */
get_header();
?>
<style>
    .page-template-loan-calculator .loan-calculator-mainsec {
        padding-top: 12%;
        padding-bottom: 0px;
        width: 70%;
        margin: 0 auto;
        margin-top: -22%;
        position: relative;
    }
    .page-template-loan-calculator .error {
        color: #f90920;
        padding-bottom: 10px;
    }

    .page-template-loan-calculator .loan-cl-main {
        background: #1d428a;
        padding: 60px 60px 60px;
        width: 100%;
        text-align: center;
        border-radius: 30px;
    }

    .page-template-loan-calculator .loan-main-head h1 {
        color: #fff;
        font-size: 42px;
        padding: 0px 0px;
        font-family: "Avenir";
        font-weight: 600;
        margin-bottom: 40px;
        line-height: 1.4;
        text-transform: uppercase;
    }

    .page-template-loan-calculator .loan-foem-in input {
        border-color: #fff;
        border-width: 3px;
        border-style: solid;
        border-radius: 52px;
        width: 100%;
        padding: 12px 14px 8px 14px;
        margin-bottom: 20px;
        outline: 0;
    }

    .page-template-loan-calculator .loan-col-butt {
        width: 100%;
        text-align: center;
        padding-top: 0px;
    }

    .page-template-loan-calculator .loan-col-butt input {
        border-radius: 52px;
        background: #f26715;
        color: white;
        font-size: 20px;
        font-weight: 700;
        cursor: pointer;
        border: none;
        font-family: 'Avenir';
        padding: 13px 0px 10px 0px;
        width: 98%;
        text-align: center;
        text-transform: uppercase;
    }

    .page-template-loan-calculator .loan-foem-in {
        position: relative;
        text-align: left;
    }

    .page-template-loan-calculator .month_first {
        position: absolute;
        top: 15px;
        width: 100%;
        left: 17px;
        color: #000000ad;
    }

    .page-template-loan-calculator .second {
        position: absolute;
        right: 35px;
        top: 15px;
        font-weight: 900;
        font-family: 'Avenir';
        font-size: 24px;
    }

    @media (max-width: 3200px) {
        .page-template-loan-calculator .error {
            padding-bottom: 30px;
            font-size: 36px;
        }
        .page-template-loan-calculator .loan-calculator-mainsec {
            padding-top: 14%;
            padding-bottom: 0px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 30px 30px 30px 30px;
            font-size: 48px;
            margin-bottom: 40px;
        }

        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 72px;
            margin-bottom: 80px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 52px;
            padding: 36px 0px 36px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 40px;
        }

        .page-template-loan-calculator .month_first {
            top: 27%;
            left: 3%;
            font-size: 48px;
        }

        .page-template-loan-calculator .second {
            right: 4%;
            top: 28%;
            font-size: 52px;
        }
    }

    @media (max-width: 2700px) {
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 66px;
            margin-bottom: 74px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 26px 26px 26px 26px;
            font-size: 42px;
            margin-bottom: 36px;
        }

        .page-template-loan-calculator .month_first {
            top: 25%;
            left: 3%;
            font-size: 42px;
        }

        .page-template-loan-calculator .second {
            right: 4%;
            top: 26%;
            font-size: 48px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 46px;
            padding: 32px 0px 32px 0px;
        }

    }

    @media (max-width: 2200px) {
        .page-template-loan-calculator .error {
            padding-bottom: 30px;
            font-size: 32px;
        }
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 56px;
            margin-bottom: 56px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 20px 24px 19px 24px;
            font-size: 32px;
            margin-bottom: 32px;
        }

        .page-template-loan-calculator .month_first {
            top: 21%;
            left: 3%;
            font-size: 32px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 21%;
            font-size: 42px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 34px;
            padding: 20px 0px 19px 0px;
        }

    }

    @media (max-width: 1920px) {
        .page-template-loan-calculator .error {
            padding-bottom: 20px;
            font-size: 28px;
        }
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 52px;
            margin-bottom: 52px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 14px 24px 8px 24px;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .page-template-loan-calculator .month_first {
            top: 18%;
            left: 3%;
            font-size: 30px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 20%;
            font-size: 34px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 27px;
            padding: 14px 0px 14px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 30px;
        }
    }

    @media (max-width: 1699px) {
        .page-template-loan-calculator .error {
            padding-bottom: 15px;
            font-size: 24px;
        }
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 48px;
            margin-bottom: 40px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 8px 24px 8px 24px;
            font-size: 24px;
            margin-bottom: 26px;
        }

        .page-template-loan-calculator .month_first {
            top: 15%;
            left: 3%;
            font-size: 24px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 15%;
            font-size: 30px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 24px;
            padding: 10px 0px 10px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 26px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-loan-calculator .error {
            padding-bottom: 10px;
            font-size: 20px;
        }
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 36px;
            margin-bottom: 36px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 8px 18px 8px 18px;
            font-size: 20px;
            margin-bottom: 24px;
        }

        .page-template-loan-calculator .month_first {
            top: 20%;
            left: 3%;
            font-size: 20px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 20%;
            font-size: 24px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 20px;
            padding: 10px 0px 10px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 20px;
        }
    }

    @media (max-width: 1200px) {
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 6px 18px 6px 18px;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .page-template-loan-calculator .month_first {
            top: 15%;
            left: 3%;
            font-size: 18px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 15%;
            font-size: 22px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 20px;
            padding: 8px 0px 8px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 20px;
        }

        .page-template-loan-calculator .loan-cl-main {
            padding: 60px 60px 40px;
        }
    }

    @media (max-width: 768px) {
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .page-template-loan-calculator .loan-foem-in input {
            padding: 6px 16px 6px 16px;
            font-size: 18px;
            margin-bottom: 16px;
        }

        .page-template-loan-calculator .month_first {
            top: 16%;
            left: 7%;
            font-size: 18px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 16%;
            font-size: 20px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 18px;
            padding: 10px 0px 10px 0px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 20px;
        }
    }

    @media (max-width: 767px) {
        .page-template-loan-calculator .error {
            padding-bottom: 10px;
            font-size: 18px;
        }
        .page-template-loan-calculator .loan-calculator-mainsec {
            width: 100%;
        }
        .page-template-loan-calculator .loan-cl-main {
            padding: 40px 40px 40px;
        }

        .page-template-loan-calculator .loan-col-butt input {
            font-size: 18px;
            padding: 10px 0px 10px 0px;
            width: 90%;
        }
    }

    @media (max-width: 375px) {
        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 27px;
            margin-bottom: 20px;
        }

        .page-template-loan-calculator .loan-cl-main {
            padding: 30px 20px 30px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 15px;
        }
    }

    @media (max-width: 320px) {
        .page-template-loan-calculator .error {
            padding-bottom: 10px;
            font-size: 16px;
        }
        .page-template-loan-calculator .loan-foem-in input {
            padding: 6px 12px 6px 12px;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .page-template-loan-calculator .month_first {
            top: 19%;
            left: 8%;
            font-size: 14px;
        }

        .page-template-loan-calculator .second {
            right: 5%;
            top: 19%;
            font-size: 16px;
        }

        .page-template-loan-calculator .loan-main-head h1 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        .page-template-loan-calculator .loan-col-butt {
            padding-top: 15px;
        }
    }
</style>
<section class="hero_section">
    <img src="https://nvsailing.com/wp-content/uploads/2023/02/hero-bg.jpg" alt="" class="hero_bg-image">
</section>

<section class="loan-calculator-mainsec">
    <div class="container">
        <div class="loan-cl-main">
            <div class="row">
                <div class="col-md-12">
                    <div class="loan-main-head">
                        <h1>Loan Calculator</h1>
                    </div>
                </div>
            </div>
            <form action="" id="loan_calc">
                <div class="row">
                    <div class="col-md-12">
                        <div class="loan-foem-in">
                            <input type="hidden" name="manufacturer" class="manufacturer" value="<?= $_GET['manufacturer']; ?>" required>
                            <input type="hidden" name="model" class="model" value="<?= $_GET['model']; ?>" required>
                            <input type="text" class="boat_price" name="boat_price" placeholder="Boat Price*" required autocomplete="off" onkeyup="calculate_loan();" />
                        </div>
                        <div class=" loan-foem-in">
                            <input type="text" class="down_payment" name="down_payment" placeholder="Down Payment*" required autocomplete="off" onkeyup="calculate_loan();" />
                        </div>
                        <div class=" loan-foem-in">
                            <input type="text" class="term_years" name="term_years" placeholder="Term Years*" required autocomplete="off" onkeyup="calculate_loan();" />
                        </div>
                    </div>
                    <div class=" col-md-12">
                        <div class="loan-foem-in">
                            <input type="text" class="monthly_budget" name="monthly_budget" placeholder="Monthly Budget*" required autocomplete="off" />
                        </div>
                        <div class="loan-foem-in">
                            <input type="text" class="interest" name="interest" placeholder="Interest*" required autocomplete="off" onkeyup="calculate_loan();" />
                        </div>
                        <div class=" loan-foem-in">
                            <div class="main_input_data">
                                <label class="month_first"><span class="month" style="font-weight: 300;">Monthly Payment:</span></label>
                                <label class="second"><span class="monthly_emi">$0.00</span></label>
                            </div>
                            <input class="contact_form monthly_payment" type="text" name="monthly_payment" readonly="" />
                        </div>
                    </div>
                    <div class="loan-col-butt">
                        <input class="btn_contact apply-for-financing" type="submit" name="submit" value="Apply for Financing" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
get_footer();
?>

<script>
    function calculate_loan() {
        let boat_price = $(".boat_price").val();
        let down_payment = $(".down_payment").val();
        let interest = $(".interest").val();
        let term_years = $(".term_years").val();
        let rate = ((boat_price - down_payment) * (interest / 100)) / 12;
        let months = term_years * 12;
        let monthly_emi = (((boat_price - down_payment) / months) + rate).toFixed(2);
        $(".monthly_emi").text("$" + monthly_emi);
        $(".monthly_payment").attr("data-val", monthly_emi);
        if (boat_price == 0) {
            $(".monthly_emi").text("$0.00");
        }
    }

    // $("#loan_calc").validate({
    //     rules: {
    //         boat_price: "required",
    //         down_payment: "required",
    //         interest: "required",
    //         term_years: "required",
    //         monthly_budget: "required",
    //     }
    // });

    $(".apply-for-financing").click(function(e) {
        // e.preventDefault();
        if ($("form#loan_calc").valid()) {
            let manufacturer = $(".manufacturer").val();
            let model = $(".model").val();
            let boat_price = $(".boat_price").val();
            let down_payment = $(".down_payment").val();
            let term_years = $(".term_years").val();
            let monthly_budget = $(".monthly_budget").val();
            let interest = $(".interest").val();
            $.ajax({
                type: "post",
                url: "<?= admin_url('admin-ajax.php'); ?>",
                data: {
                    action: "redirect_to_financing",
                    manufacturer,
                    model,
                    boat_price,
                    down_payment,
                    term_years,
                    monthly_budget,
                    interest
                },
                success: function(data) {
                    console.log(data);
                    let obj = JSON.parse(data);
                    let redirect_url = "<?= site_url() . '/apply-for-financing/' ?>" + "?manufacturer=" + obj.manufacturer + "&model=" + obj.model + "&boat_price=" + obj.boat_price + "&down_payment=" + obj.down_payment + "&interest=" + obj.interest + '&term_years=' + obj.term_years + "&monthly_budget=" + obj.monthly_budget;
                    //alert(redirect_url);
                    window.location.replace(redirect_url);
                }
            })
        }
    })
</script>