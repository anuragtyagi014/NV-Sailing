<?php
error_reporting(E_ERROR | E_PARSE);
?>
<?php
/* Template Name: inventory */
get_header();
?>
<style>
    a.filter-link.clear_data {
        border: 1px solid #ef95364d !important;
        box-shadow: none;
    }

    .mediagallery-active-filters {
        display: none;
    }

    #filter-spinner {
        display: none;
    }

    .page-template-inventory .search-from-inventory form input[type="search"] {
        border-radius: 50px 0px 0px 50px;
    }

    .page-template-inventory .search-from-inventory form button {
        border-radius: 0px 50px 50px 0px;
    }

    .page-template-inventory .search-from-inventory form input[type="search"] {
        padding: 6px 20px;
    }



    .inventory-form.top_form label {
        position: relative;
        top: 5px;
        left: 3px;
        padding: 0px 15px 0px 8px;
    }



    section.inventory-sec .inventory-form h2 {
        padding-right: 30px;
    }







    .inventory-form.top_form h2 {
        margin-bottom: 0px !important;
    }

    .form-group {
        display: block;
        margin-bottom: 0px;
        /*    padding-top: 5px;*/
    }

    .form-group input {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .form-group label {
        position: relative;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .form-group label:before {
        content: '';
        -webkit-appearance: none;
        background-color: transparent;
        border: 1px solid #f26715;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 5px;
        height: 10px;
    }

    .form-group input:checked+label:after {
        content: '';
        display: block;
        position: absolute;
        top: 4px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #f26715;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .mobile_check {
        display: flex;
    }





    @media (min-width:629px) {
        .inventory-form.top_form {
            display: flex;
            align-items: center;
        }
    }

    @media (max-width:1440px) {

        .form-group input:checked+label:after {
            top: 7px;
            left: 16px;
            width: 6px;
            height: 11px;
        }

    }



    @media (max-width: 3200px) {
        .page-template-inventory section.inventory-sec {
            padding: 400px 170px 0 170px;
        }

        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 20px 20px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 25px 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 350px;
            font-size: 34px;
            height: 70px;
        }

        .form-group label {
            font-size: 34px;
        }
    }

    @media (max-width: 3000px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 340px;
        }

    }

    @media (max-width: 2900px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 320px;
            font-size: 34px;
            height: 70px;
        }
    }

    @media (max-width: 2800px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 310px;
            font-size: 34px;
            height: 70px;
        }

        .form-group label {
            font-size: 34px;
        }
    }

    @media (max-width: 2700px) {
        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 20px 20px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 25px 20px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 350px 170px 0 170px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 290px;
            font-size: 34px;
            height: 70px;
        }

        .form-group label {
            font-size: 34px;
        }
    }

    @media (max-width: 2500px) {
        .page-template-inventory section.inventory-sec {
            padding: 300px 170px 0 170px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 25px 20px;
        }

        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 20px 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 260px;
            font-size: 28px;
            height: 70px;
        }

        .form-group label {
            font-size: 28px;
        }
    }

    @media (max-width: 2200px) {
        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 18px 20px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 300px 90px 0 90px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 23px 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 240px;
            font-size: 26px;
            height: 62px;
        }

        .form-group label {
            font-size: 26px;
        }
    }

    @media (max-width: 2000px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 220px;
            font-size: 24px;
            height: 62px;
        }

        .form-group label {
            font-size: 24px;
        }
    }

    @media (max-width: 1920px) {
        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 14px 20px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 19px 30px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 300px 170px 0 170px;
        }



        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 160px;
            font-size: 22px;
            height: 54px;
        }

        .form-group label {
            font-size: 22px;
        }
    }

    @media (max-width: 1699px) {
        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 5px 20px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 10px 25px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 250px 150px 0 150px;
        }



        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 154px;
            font-size: 22px;
            height: 48px;
        }

        .form-group label {
            font-size: 22px;
        }
    }

    @media (max-width: 1599px) {
        .page-template-inventory section.inventory-sec {
            padding: 230px 140px 0 140px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 150px;
            font-size: 20px;
            height: 44px;
        }

        .form-group label {
            font-size: 20px;
        }
    }

    @media (max-width: 1560px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 142px;
            font-size: 20px;
            height: 40px;
        }

        .form-group label {
            font-size: 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 142px;
            font-size: 20px;
            height: 40px;
        }

        .page-template-inventory .filter-link {
            font-size: 20px;
        }
    }

    @media (max-width: 1499px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 18px;

            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 18px;
            height: 18px;

        }

        /*-------*/

        .page-template-inventory section.inventory-sec {
            padding: 230px 120px 0 120px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 140px;
            font-size: 18px;
            height: 40px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-inventory .search-from-inventory form input[type="search"] {
            padding: 5px 20px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 200px 150px 0 150px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 4px 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 132px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 132px;
        }
    }

    @media (max-width: 1400px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 120px;
            font-size: 18px;
            height: 40px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 120px;
            font-size: 18px;
            height: 40px;
        }

        .form-group label {
            font-size: 18px;
        }

    }

    @media (max-width: 1360px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 18px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 18px;
            height: 18px;
        }

        /*----------*/


        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 110px;
            font-size: 18px;
            height: 38px;
        }


        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 110px;
            font-size: 18px;
            height: 38px;
        }

        .form-group label {
            font-size: 18px;
        }

    }

    @media (max-width: 1299px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 16px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 16px;
            height: 16px;
        }

        /*--------------*/

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 100px;
            font-size: 16px;
            height: 36px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 100px;
            font-size: 16px;
            height: 36px;
        }

        .form-group label {
            font-size: 16px;
        }

        .page-template-inventory .inventory-box .inventory-box-each {
            width: 48%;
        }

    }

    @media (max-width: 1200px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 12px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 12px;
            height: 12px;
        }

        .page-template-inventory span.invent-drop:after {
            top: 10px !important;
            height: 12px !important;
            width: 13px !important;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 10px !important;
            height: 12px !important;
            width: 13px !important;
        }

        /*-------*/



        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 100px;
            font-size: 12px;
            height: 32px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 100px;
            font-size: 12px;
            height: 32px;
        }

        .form-group label {
            font-size: 12px;
        }

        .page-template-inventory .search-from-inventory form button {
            padding: 2px 20px;
        }

        .page-template-inventory section.inventory-sec {
            padding: 180px 150px 0 150px;
        }
    }

    @media (max-width: 1160px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 14px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 14px;
            height: 14px;
        }

        /*-------*/




        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 100px;
            font-size: 14px;
            height: 30px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 100px;
            font-size: 14px;
            height: 30px;
        }

        .form-group label {
            font-size: 14px;
        }
    }

    @media (max-width: 1024px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 12px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 12px;
            height: 12px;
        }

        /*-------*/



        .page-template-inventory section.inventory-sec {
            padding: 160px 130px 0 130px;
        }

        .page-template-inventory .inventory-box .inventory-box-each {
            width: 100%;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 90px;
            font-size: 12px;
        }

        .form-group label {
            font-size: 12px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 90px;
            font-size: 12px;
        }
    }

    @media (max-width: 992px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 13px;
            min-height: 30px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 13px;
            height: 13px;
        }

        .page-template-inventory span.invent-drop:after {
            top: 8px !important;
            height: 12px !important;
            width: 12px !important;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 8px !important;
            height: 12px !important;
            width: 12px !important;
        }

        /*-------*/


        .page-template-inventory section.inventory-sec {
            padding: 140px 50px 0 50px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 80px;
            font-size: 13px;
            height: 28px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 80px;
            font-size: 13px;
            height: 28px;
        }

        .form-group label {
            font-size: 13px;
        }
    }

    @media (max-width: 768px) {
        .page-template-inventory .inventory-box .inventory-box-each {
            width: 100%;
        }

        .sort-type-inventory.col-md-2 {
            padding: 0px 8px;
        }

        .search-from-inventory.new_search form .col-md-2 {
            padding: 0px 15px !important;
            padding-left: 3px !important;
        }

        .search-from-inventory.new_search form .col-md-10 {
            padding: 0px 15px !important;
            margin-bottom: 10px;
        }




        .page-template-inventory section.inventory-sec {
            padding: 70px 30px 0 30px;
        }
    }

    @media (max-width: 767px) {

        /*        dharm*/
        .page-template-inventory .filter-link {
            font-size: 16px;
            min-height: 30px;
        }


        section.inventory-sec .inventory-form h2 {
            padding-right: 0px;
            padding-left: 10px;
        }

        .page-template-inventory .filter-link svg.svg-inline--fa.fa-xmark {
            width: 16px;
            height: 16px;
        }

        /*-------*/



        .page-template-inventory section.inventory-sec {
            padding: 50px 30px 0 30px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 150px;
            font-size: 16px;
            height: 34px;
        }

        .form-group label {
            font-size: 16px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 150px;
            font-size: 16px;
            height: 34px;
        }
    }

    @media(max-width:629px) {
        .search-from-inventory:nth-child(3) {
            padding-top: 0px;
        }

        section.inventory-sec .inventory-form h2 {
            padding-bottom: 15px;
        }


    }

    @media (max-width:575px) {
        .search-from-inventory.new_search form .col-md-2 {
            padding: 0px 15px !important;
        }
    }


    @media(max-width:451px) {
        .form-group input:checked+label:after {
            top: 4px;
            left: 16px;
            width: 6px;
            height: 11px;
        }
    }


    @media (max-width: 375px) {
        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 132px;
            font-size: 14px;
            height: 32px;
        }

        .form-group label {
            font-size: 14px;
        }


        .form-group label:before {
            padding: 8px 8px;
        }

        .form-group input:checked+label:after {
            top: 4px;
            left: 14px;
            width: 6px;
            height: 11px;
        }

        .inventory-form.top_form label {
            padding: 0px 10px 0px 8px;
            font-size: 15px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 132px;
            font-size: 14px;
            height: 32px;
        }
    }

    @media (max-width: 320px) {



        .page-template-inventory section.inventory-sec {
            padding: 40px 20px 0 20px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button {
            width: 115px;
            font-size: 14px;
            height: 32px;
        }

        .form-group label {
            font-size: 14px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {
            width: 115px;
            font-size: 14px;
            height: 32px;
        }
    }
</style>
<style type="text/css">
    .page-template-inventory .search-from-inventory:nth-child(3) button {
        width: 240px;
        /*    height: 56px;*/
        border: none;
        border-radius: 100px;
        background: transparent;
        color: white;
    }


    .page-template-inventory input#search_field {
        color: #000;
        border: 1px solid #f26715;
        width: 100% !important;
        border-radius: 3px 3px 3px 3px !important;
        box-shadow: inset 0px 0px 1px 0px #f26715;
    }

    .page-template-inventory div#get_fetched_data {
        position: absolute;
        max-width: calc(100% - 60px);
        display: none;
        width: 100%;
        background: #f7f7f7 !important;
        border-radius: 0px;
        padding: 15px 0 12px 15px;
        z-index: 999;
        max-height: 250px;
        height: auto;
        overflow: auto;
    }


    .page-template-inventory .search-from-inventory.new_search {
        padding: 0px 8px !important;
        background: transparent;
        border-radius: 0px;
        margin-top: 8px;

    }

    .page-template-inventory .search-from-inventory.new_search input {
        border-radius: 0px !important;
        background: #f7f7f7 !important;
    }

    .page-template-inventory .search-from-inventory.new_search button#search_btn {
        background: #f26715 !important;
        color: white;
        -webkit-text-stroke-color: white;
        border: 1px solid #f26715;
        width: 100% !important;
        border-radius: 3px 3px 3px 3px !important;
        box-shadow: inset 0px 0px 1px 0px #f26715;
        padding-left: 15px;
    }

    .page-template-inventory span.invent-drop:after {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        background-image: url(https://nvsailing.com/wp-content/uploads/2023/03/free-arrow-left-icon-3099-thumb.png);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 15px;
        filter: invert(48%) sepia(23%) saturate(6569%) hue-rotate(356deg) brightness(100%) contrast(91%);
        width: 15px;
    }

    .page-template-inventory span.invent-drop.inven-btn-new::after {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        background-image: url(https://nvsailing.com/wp-content/uploads/2023/03/free-arrow-left-icon-3099-thumb.png);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 15px;
        width: 15px;
        filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(288deg) brightness(102%) contrast(102%);
        transform: rotate(180deg);
    }

    .page-template-inventory .search-from-inventory:nth-child(3) button span {
        position: relative;
        color: #0c2169;
    }

    .page-template-inventory .mediagallery-active-filters {
        padding: 0px 8px;
    }

    .page-template-inventory div#get_fetched_data p {
        color: black !important;
    }

    .page-template-inventory div#get_fetched_data ul li.fetched_data {
        padding: 0px 0 0 10px !important;
        color: black !important;
    }

    .search-from-inventory:nth-child(3) {
        padding-left: 16px !important;
        padding-right: 16px !important;
    }



    @media (min-width:1300px) {
        .page-template-inventory span.invent-drop:after {
            top: 13px;
            height: 15px;
            width: 15px;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 13px;
            height: 15px;
            width: 15px;
        }
    }





    @media (min-width:1440px) {

        .form-group input:checked+label:after {
            top: 10px;
            left: 18px;
            width: 8px;
            height: 16px;
        }

        .form-group label:before {
            padding: 13px 13px;
        }
    }


    @media (min-width:1919px) {

        .form-group label:before {
            padding: 15px 15px;
        }





        .form-group label {
            position: relative;
            cursor: pointer;
            display: flex;
            /*    font-size: 30px;*/
            align-items: center;
        }

        .page-template-inventory span.invent-drop:after {
            top: 17px;
            height: 40px;
            width: 22px;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 17px;
            height: 40px;
            width: 22px;
        }
    }


    @media (min-width:2500px) {
        .page-template-inventory span.invent-drop:after {
            top: 17px;
            height: 40px;
            width: 30px;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 17px;
            height: 40px;
            width: 30px;
        }
    }


    @media (max-width:1140px) and (min-width:1025px) {

        .page-template-inventory section.inventory-sec {
            padding: 180px 100px 0 100px;
        }

    }


    @media (max-width:871px) and (min-width:768px) {

        .page-template-inventory section.inventory-sec {
            padding: 140px 35px 0 35px;
        }

        .page-template-inventory .search-from-inventory:nth-child(3) button span {

            font-size: 12px;
        }


        .page-template-inventory span.invent-drop:after {
            right: 3px !important;
        }

        .page-template-inventory span.invent-drop.inven-btn-new::after {
            top: 8px !important;
            height: 12px !important;
            width: 12px !important;
            right: 3px !important;
        }

    }



    @media (max-width:2200px) and (min-width:1919px) {

        .sort-type-inventory.col-md-2 {
            padding: 0px 8px;
            margin-top: 22px;
        }

    }
</style>
<?php
$data = isset($_SESSION['api_data']) ? $_SESSION['api_data'] : get_data_from_api();

$data1['boat_listing'] = array_filter($data, function ($item) {
    return strtolower($item['stock']) == 'sailboat';
});

foreach ($data1['boat_listing'] as $specification) :
    $make .= $specification['make'] . ",";
    $year .= $specification['year'] . ",";
    $price .= $specification['price'] . ",";
    $sailboatType .= $specification['class'] . ",";
    $descriptions_stat .= $specification['status'] . ",";
    $location .= $specification['location'] . ",";
    $model .= $specification['model'] . ",";
endforeach;

$makes = array_unique(explode(",", $make));
$years = array_unique(explode(",", $year));
$prices = array_unique(explode(",", $price));
$sailboatTypes = array_unique(explode(",", $sailboatType));
$descriptions_stats = array_unique(explode(",", $descriptions_stat));
$locations = array_unique(explode(",", $location));
$models = array_unique(explode(",", $model));
sort($makes);
sort($prices);
sort($sailboatTypes);
sort($years);
sort($descriptions_stats);
sort($locations);
sort($models);
?>
<?php
if (have_rows('top_search_area')) :
    while (have_rows('top_search_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="inventory-sec">
                <div class="inventory-form top_form">
                    <h2><?= get_sub_field('title'); ?></h2>


                    <div class="mobile_check">
                        <div class="form-group">
                            <input type="checkbox" id="new" class="checked_items" value="new" name="checked_condition[]">
                            <label for="new">New</label>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="used" class="checked_items" value="used" name="checked_condition[]">
                            <label for="used"> Used</label>
                        </div>
                    </div>
                </div>
                <div class="no-data"></div>
                <div class="search-from-inventory new_border_line row" id="filter-search" style="padding-left: 0px; padding-right: 0px;margin-block: 0px;">
                    <div class="sort-type-inventory sort-except" style="display:none;">
                        <h4>SORT BY :</h4>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Sailboat Type</span>

                            <ul class="inventory-drop-list">
                                <?php $count_sailboat_type = 0; ?>
                                <?php foreach ($sailboatTypes as $type) : ?>
                                    <?php if (empty($type)) : ?>
                                    <?php else : ?>
                                        <li class="filter-list Sailboat_Type" id="Type_<?= $count_sailboat_type; ?>"><?= $type; ?></li>
                                    <?php endif; ?>
                                <?php $count_sailboat_type++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Make</span>
                            <ul class="inventory-drop-list">
                                <?php $count_make = 0; ?>
                                <?php foreach ($makes as $making) : ?>
                                    <li class="filter-list Make" id="Make_<?= $count_make; ?>"><?= $making; ?></li>
                                <?php $count_make++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Model</span>
                            <ul class="inventory-drop-list" id="get_model_data"></ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Length</span>
                            <ul class="inventory-drop-list">
                                <li class="filter-list Length" id="length_1" data-from="0" data-to="15">0Ft - 15Ft</li>
                                <li class="filter-list Length" id="length_2" data-from="16" data-to="20">16Ft - 20Ft</li>
                                <li class="filter-list Length" id="length_3" data-from="21" data-to="25">21Ft - 25Ft</li>
                                <li class="filter-list Length" id="length_4" data-from="26" data-to="30">26Ft - 30Ft </li>
                                <li class="filter-list Length" id="length_5" data-from="31" data-to="35">31Ft - 35Ft</li>
                                <li class="filter-list Length" id="length_6" data-from="36" data-to="">36Ft+</li>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Year </span>

                            <ul class="inventory-drop-list">
                                <?php
                                $count_year = 0;
                                foreach ($years as $year1) : ?>
                                    <?php if (empty($year1) || substr($year1, 0, 1) === "0") :
                                    ?>
                                    <?php else : ?>
                                        <li class="filter-list Year" id="Year_<?= $count_year; ?>"><?= $year1; ?></li>
                                    <?php endif; ?>
                                <?php $count_year++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>

                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Price </span>

                            <ul class="inventory-drop-list">
                                <li class="filter-list Price" id="price_1" data-from="0" data-to="10000">$0 - $10,000</li>
                                <li class="filter-list Price" id="price_2" data-from="10000" data-to="25000">$10,000 - $25,000</li>
                                <li class="filter-list Price" id="price_3" data-from="25000" data-to="50000">$25,000 - $50,000</li>
                                <li class="filter-list Price" id="price_4" data-from="50000" data-to="100000">$50,000 - $100,000
                                </li>
                                <li class="filter-list Price" id="price_5" data-from="100000" data-to="">$100,000+</li>
                            </ul>
                        </button>
                    </div>

                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Location </span>

                            <ul class="inventory-drop-list">
                                <?php $count_inv5 = 0;
                                foreach ($locations as $location_data) : ?>
                                    <?php if (!empty($location_data)) : ?>
                                        <li class="filter-list Location" id="location_<?= $count_inv5; ?>"><?= $location_data; ?></li>
                                <?php endif;
                                    $count_inv5++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>

                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop">Status </span>

                            <ul class="inventory-drop-list">
                                <?php $count_inv4 = 0;
                                foreach ($descriptions_stats as $descriptions_stats_list) : ?>
                                    <?php if (empty($descriptions_stats_list)) :
                                    ?>
                                    <?php else : ?>
                                        <li class="filter-list Status" id="status_<?= $count_inv4; ?>"><?= $descriptions_stats_list; ?></li>
                                    <?php endif; ?>
                                <?php $count_inv4++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                </div>
                <div class="mediagallery-active-filters">
                    <div class="filter">
                        <a class="filter-link clear_data">
                            <span>Clear Filters</span>
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="search-from-inventory new_search">
                    <form action="" class="row">
                        <div class="col-md-10 col-sm-9 col-12 col-xs-12" style="padding-right: 13px;">
                            <input type="search" id="search_field">
                            <input type="hidden" id="hidden_field_search" value="check">
                        </div>
                        <div class="col-md-2 col-sm-3 col-12 col-xs-12" style="padding-left: 3px;">
                            <button type="search" id="search_btn">Search</button>
                        </div>
                    </form>
                    <!-- <div id="get_fetched_data"></div> -->
                </div>

                <div id="filter-spinner" style="margin:auto;width:200px;">
                    <i class="fa fa-spinner fa-spin" style="color:black;font-size:24px"></i>
                </div>
                <div class="inventory-box">
                    <?php foreach ($data1['boat_listing'] as $listing) : ?>
                        <?php
                            $row_description = '';
                            if (!empty($listing['year'])) {
                                $row_description .= $listing['year'] . ' ';
                            }
                            if (!empty($listing['saleclasscode'])) {
                                $row_description .= $listing['saleclasscode'] . ' ';
                            }
                            if (!empty($listing['model'])) {
                                $row_description .= $listing['model'] . ' ';
                            }
                            if (!empty($listing['make'])) {
                                $row_description .= $listing['make'];
                            }
                        ?>
                        <div class="inventory-box-each">
                            <div class="inven-img">
                                <?php
                                if (isset($listing['images']->ImageAttachmentExtended) && is_array($listing['images']->ImageAttachmentExtended)) { ?>
                                    <img src="<?php echo $listing['images']->ImageAttachmentExtended[0]->URI; ?>">
                                <?php } else if (isset($listing['images']->ImageAttachmentExtended)) { ?>
                                    <img src="<?php echo $listing['images']->ImageAttachmentExtended->URI; ?>">
                                <?php } else { ?>
                                    <img src="<?= site_url(); ?>/wp-content/uploads/2023/01/Mask-Group-1-1.png" alt="">
                                <?php } ?>
                                <div class="stip-inventory">
                                    <?php if (isset($listing['status'])) : ?>
                                        <p><?= $listing['status']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="inven-costal">
                                <h4><?= $row_description; ?></h4>
                                <ul>
                                    <li><?= get_sub_field('boat_description_title_1'); ?> <?php if (!empty($listing['saleclasscode'])) {
                                                                                                echo $listing['saleclasscode'];
                                                                                            } ?></li>
                                    <?php if ($listing['class'] != '') { ?>
                                        <li><?= get_sub_field('boat_description_title_2'); ?> <?php
                                                                                                echo $listing['class'];
                                                                                                ?></li>
                                    <?php } ?>
                                    <?php if ($listing['length'] != '') { ?>
                                        <li><?= get_sub_field('boat_description_title_3'); ?> <?php $bexp = explode('.', $listing['length']);
                                                                                                if (!empty($bexp)) {
                                                                                                    $ff = $bexp[0];
                                                                                                    $fin = isset($bexp[1]) ? $bexp[1] : 0;
                                                                                                    $fin = floatval('.' . $fin);
                                                                                                    $fin = floor(($fin * 12));
                                                                                                    echo $nlength = $ff . "'" . ' ' . $fin . '"';
                                                                                                } else {
                                                                                                    echo $listing['length'];
                                                                                                } ?></li>
                                    <?php } ?>
                                    <?php if ($listing['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') { ?>
                                        <li><?= get_sub_field('boat_description_title_4'); ?> <?php {
                                                                                                    echo $listing['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
                                                                                                } ?></li>
                                    <?php } ?>
                                    <?php if ($listing['beam'] != '') { ?>
                                        <li><?= get_sub_field('boat_description_title_5'); ?> <?php
                                                                                                $bmexp = explode('.', $listing['beam']);
                                                                                                if (!empty($bmexp)) {
                                                                                                    $ff = $bmexp[0];
                                                                                                    $fin = isset($bmexp[1]) ? $bmexp[1] : 0;
                                                                                                    $fin = floatval('.' . $fin);
                                                                                                    $fin = floor(($fin * 12));
                                                                                                    echo $nbeam = $ff . "'" . ' ' . $fin . '"';
                                                                                                } else {
                                                                                                    echo $listing['beam'];
                                                                                                } ?></li>
                                    <?php } ?>

                                    <li>
                                        <?= get_sub_field('boat_description_title_6'); ?>
                                        <?php if (!empty($listing['location'])) {
                                                echo $listing['location'];
                                        } ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="inven-btns">
                                <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('inventory_side_button_text_1'); ?></button>
                                <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('inventory_side_button_text_2'); ?></button>
                                <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('inventory_side_button_text_3'); ?></button>
                                <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('inventory_side_button_text_4'); ?></button>
                                <button class="inventory-view" data-boat="<?= $listing['documentid']; ?>"><a href="<?= home_url(); ?>/inventory-listing-api/?q=<?= $listing['documentid']; ?>" style="color:#fff;text-decoration:none;"><?= get_sub_field('inventory_side_button_text_5'); ?></a></button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('uncommon_discoveries_area')) :
    while (have_rows('uncommon_discoveries_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
            <section class="uncommon-d">
                <div class="uncommon-text">
                    <h3><?= get_sub_field('heading'); ?></h3>
                    <?= get_sub_field('para'); ?>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<!-- ========== GET QUOTE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
					<div class="new-scroll-custom">
						
				
                    <div class="request-head">
                        <h3>REQUEST A CALL BACK</h3>
                        <h4>(INVENTORY)</h4>
                    </div>
                    <div class="request-form get_quote_form">
                        <?= do_shortcode('[contact-form-7 id="4282" title="Get Quote Form"]');
                        ?>
                    </div>
							</div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== VALUE TRADE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_two" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>REGISTER FOR A<br class="phone-break"> NO-OBLIGATION<br class="both-break"> TRADE VALUATION
                            FOR<br class="phone-break"> YOUR VESSEL.</h3>
                    </div>
                    <div class="request-form value_trade_form">
                        <?= do_shortcode('[contact-form-7 id="4283" title="Value Trade Form"]');
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== FINANCING MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_three" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>CREDIT APPLICATION FORM</h3>
                    </div>
                    <div class="modal-cont">
                        <p>If you’ve decided you want to finance your<br class="desk-break"> new boat, you’re not alone.
                            Seventy percent<br class="desk-break"> of enthusiasts do.<br class="desk-break"> With a
                            minimum down payment and<br class="desk-break"> approved credit, you can arrange Credit<br class="desk-break"> financing with us<br class="desk-break"> and get out on the water a
                            few hours after<br class="desk-break"> picking out your boat.</p>
                        <p>We finance more outboards, boats, and<br class="desk-break"> boat trailers than anyone else,
                            we<br class="desk-break"> understand your special needs.<br class="desk-break"> Only someone
                            who knows how you feel<br class="desk-break"> when you hit the starter button<br class="desk-break"> understands that hitting the water ASAP is<br class="desk-break">
                            your biggest concern.<br class="desk-break"> That’s why we make it easy. </p>
                        <h4>APPLY NOW</h4>
                        <p>Talk to Nautical Ventures Marine about<br class="desk-break"> financing your new boat and get
                            out on the<br class="desk-break"> sea today.</p>
                    </div>
                    <div class="request-form finance_form">
                        <?= do_shortcode('[contact-form-7 id="4284" title="Finance Form"]');
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== TEST DRIVE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_four" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>TEST DRIVE</h3>
                    </div>
                    <div class="request-form test_drive_form">
                        <?= do_shortcode('[contact-form-7 id="4285" title="Test Drive Form"]');
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
        var element = document.querySelectorAll('.inventory-drop-list li');

        if (element) {

            element.forEach(function(el, key) {

                el.addEventListener('click', function() {
                    el.classList.toggle("active");
                    element.forEach(function(ell, els) {
                    });
                });
            });
        }
    });
</script>
<script>
    $(document).ready(function() {
        $(".stock_number").val("Sailboat");

        function get_all_forms() {
            $(".get_quote").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "get_quote_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".get_quote_form input[name='BoatTenderName']").val(obj.year + " " +
                            obj.saleclasscode + " " + obj.model + " " + obj.make);
                        $(".get_quote_form input[name='modelyear']").val(obj.year);
                        $(".get_quote_form input[name='model']").val(obj.model);
                        $(".get_quote_form input[name='make']").val(obj.make);
                    }
                });
            })
            $(".value_trade").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "value_trade_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".value_trade_form input[name='Manufacturer']").val(obj.make);
                        $(".value_trade_form input[name='Model']").val(obj.model);
                        $(".value_trade_form input[name='Madeyear']").val(obj.year);
                    }
                });
            });
            $(".finance").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "finance_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".finance_form input[name='manufacturer']").val(obj.make);
                        $(".finance_form input[name='model']").val(obj.model);
                    }
                });
            });
            $(".test_drive").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "test_drive_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".test_drive_form input[name='SailboatCatamaranname']").val(obj.year +
                            " " + obj.saleclasscode + " " + obj.model + " " + obj.make);
                    }
                });
            });
        }

        function setWidthHeight() {
            var cw = jQuery('.inventory-box .inventory-box-each .inven-img img').width();
            jQuery('.inventory-box .inventory-box-each .inven-img img').height(cw);
        }

        $(".get_quote").click(function() {
            let id = $(this).attr("data-boat");
            // console.log(id);
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "get_quote_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".get_quote_form input[name='BoatTenderName']").val(obj.year + " " + obj
                        .saleclasscode + " " + obj.model + " " + obj.make);
                    $(".get_quote_form input[name='modelyear']").val(obj.year);
                    $(".get_quote_form input[name='model']").val(obj.model);
                    $(".get_quote_form input[name='make']").val(obj.make);
                }
            });
        })
        $(".value_trade").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "value_trade_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".value_trade_form input[name='Manufacturer']").val(obj.make);
                    $(".value_trade_form input[name='Model']").val(obj.model);
                    $(".value_trade_form input[name='Madeyear']").val(obj.year);
                }
            });
        });
        $(".finance").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "finance_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".finance_form input[name='manufacturer']").val(obj.make);
                    $(".finance_form input[name='model']").val(obj.model);
                }
            });
        });
        $(".test_drive").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "test_drive_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".test_drive_form input[name='SailboatCatamaranname']").val(obj.year +
                        " " + obj.saleclasscode + " " + obj.model + " " + obj.make);
                }
            });
        });

        $(".reset").click(function() {
            location.reload();
        });

        let sailboat_type = [];
        let makes = [];
        let lengths_from = [];
        let lengths_to = [];
        let years = [];
        let prices_from = [];
        let prices_to = [];
        let status = [];
        let locations = [];
        let get_all_value_checked = [];
        let models = [];

        function clear_data() {
            $('.clear_data').siblings().remove();
            $(".mediagallery-active-filters").hide();
            $(".inventory-drop-list li").removeClass('active');
            $("#get_model_data").html("");
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            });
            get_all_value_checked = local_items;
            sailboat_type = [];
            models = [];
            makes = [];
            lengths_from = [];
            lengths_to = [];
            years = [];
            prices_from = [];
            prices_to = [];
            status = [];
            locations = [];
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    get_all_value_checked,
                    sailboat_type,
                    makes,
                    models,
                    lengths_from,
                    lengths_to,
                    years,
                    prices_from,
                    prices_to,
                    status,
                    locations,
                    action: "get_all_data_of_sailboat_using_filter",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    // console.log(data);
                    let obj = JSON.parse(data);
                    $("#filter-spinner").hide();
                    $(".inventory-box").html(obj.searched_data);
                    get_all_forms();
                    setWidthHeight();
                }
            });
        }
        $(".clear_data").click(function() {
            clear_data();
        });

        $("#filter-search").delegate('.filter-list,.filter-list-model', 'click', function() {
            if ($(this).hasClass('Model') && $(this).hasClass('active')) {
                $(this).removeClass("active");
            } else if ($(this).hasClass('Model') && !($(this).hasClass('active'))) {
                $(this).addClass("active");
            }
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            });
            get_all_value_checked = local_items;
            let list_val = $(this).text();
            let filter_list_id = $(this).attr('id');
            let classes = $(this).attr('class').split(' ');
            let filter_data = classes[1];
            let len = classes.length;
            if ($(this).hasClass('active')) {
                if ($(this).hasClass('Sailboat_Type')) {
                    sailboat_type.push(list_val);
                } else if ($(this).hasClass('Make')) {
                    makes.push(list_val);
                } else if ($(this).hasClass('Model')) {
                    models.push(list_val);
                } else if ($(this).hasClass('Length')) {
                    let data_from_length = $(this).attr('data-from');
                    let data_to_length = $(this).attr('data-to');
                    lengths_from.push(data_from_length);
                    lengths_to.push(data_to_length);
                } else if ($(this).hasClass('Year')) {
                    years.push(list_val);
                } else if ($(this).hasClass('Price')) {
                    let data_from_price = $(this).attr('data-from');
                    let data_to_price = $(this).attr('data-to');
                    prices_from.push(data_from_price);
                    prices_to.push(data_to_price);
                } else if ($(this).hasClass('Status')) {
                    status.push(list_val);
                } else if ($(this).hasClass('Location')) {
                    locations.push(list_val);
                }
                $(".inventory-drop-list").hide();
                $(".mediagallery-active-filters").show();
                if ($(this).hasClass('Model')) {
                        let make_class = $(this).attr('class').split(' ')[2];
                        $(".filter").prepend('<a class="filter-link remove-filter ' + filter_list_id + " " + make_class  +
                        '" data-list_val="' + list_val + '" ><span class="' + classes[1] + '">' + classes[1]
                        .replace("_", " ") + ': </span><span class="active-filter-value">' + list_val +
                        '</span><i class="fa fa-times"></i></a>');
                }else{
                    $(".filter").prepend('<a class="filter-link remove-filter ' + filter_list_id +
                    '" data-list_val="' + list_val + '" ><span class="' + classes[1] + '">' + classes[1]
                    .replace("_", " ") + ': </span><span class="active-filter-value">' + list_val +
                    '</span><i class="fa fa-times"></i></a>');  
                }
            } else {
                if ($(this).hasClass('Sailboat_Type')) {
                    sailboat_type.splice(sailboat_type.indexOf(list_val), 1);
                } else if ($(this).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                } else if ($(this).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($(this).hasClass('Length')) {
                    let data_from_length = $(this).attr('data-from');
                    let data_to_length = $(this).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($(this).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($(this).hasClass('Price')) {
                    let data_from_price = $(this).attr('data-from');
                    let data_to_price = $(this).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($(this).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($(this).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                }
                $("." + filter_list_id).remove();
            }
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    get_all_value_checked,
                    sailboat_type,
                    makes,
                    models,
                    lengths_from,
                    lengths_to,
                    years,
                    prices_from,
                    prices_to,
                    status,
                    locations,
                    action: "get_all_data_of_sailboat_using_filter",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $("#filter-spinner").hide();
                    $(".inventory-box").html(obj.searched_data);
                    if (filter_data == "Make" && filter_data != "Model") {
                        $("#get_model_data").html(obj.model_data);
                    }
                    get_all_forms();
                    setWidthHeight();
                }
            });
        });

        $(".checked_items").on("click", function() {
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            });
            get_all_value_checked = local_items;
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    get_all_value_checked,
                    sailboat_type,
                    makes,
                    models,
                    lengths_from,
                    lengths_to,
                    years,
                    prices_from,
                    prices_to,
                    status,
                    locations,
                    action: "get_all_data_of_sailboat_using_filter",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    let obj = JSON.parse(data)
                    $("#filter-spinner").hide();
                    $(".inventory-box").html(obj.searched_data);
                    get_all_forms();
                    setWidthHeight();
                }
            });
        });

        $(".filter").on("click", ".remove-filter", function() {
            let count = $(".filter").children().length;
            let remove_class = ($(this).attr("class").split(" "))[2];
            let list_val = $("#" + remove_class).text();
            let make_val = list_val.replace(" ","_");
            let class_rmf = $(this).children("span:first-child").attr("class");
            if (class_rmf == "Make") {
                $("."+make_val).remove();
            }
            if (count == 2) {
                if ($("#" + remove_class).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Length')) {
                    let data_from_length = $("#" + remove_class).attr('data-from');
                    let data_to_length = $("#" + remove_class).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($("#" + remove_class).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Price')) {
                    let data_from_price = $("#" + remove_class).attr('data-from');
                    let data_to_price = $("#" + remove_class).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($("#" + remove_class).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Sailboat_Type')) {
                    sailboat_type.splice(sailboat_type.indexOf(list_val), 1);
                }
                $('.clear_data').siblings().remove();
                $(".mediagallery-active-filters").hide();
                $(".inventory-drop-list li").removeClass('active');
                let local_items = [];
                $(".checked_items:checked").each(function(index, items) {
                    local_items.push(items.value);
                });
                get_all_value_checked = local_items;
                $.ajax({
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    type: "post",
                    data: {
                        get_all_value_checked,
                        action: "get_all_data_of_sailboat_using_filter",
                    },
                    beforeSend: function(data) {
                        $("#filter-spinner").show();
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $("#filter-spinner").hide();
                        $(".inventory-box").html(obj.searched_data);
                        if (class_rmf == "Make") {
                            $("#get_model_data").html(obj.model_data);
                        }
                        get_all_forms();
                        setWidthHeight();
                    }
                });
            } else {
                $(this).remove();
                let local_items = [];
                $(".checked_items:checked").each(function(index, items) {
                    local_items.push(items.value);
                });
                get_all_value_checked = local_items;
                $("#" + remove_class).removeClass('active');
                if ($("#" + remove_class).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Length')) {
                    let data_from_length = $("#" + remove_class).attr('data-from');
                    let data_to_length = $("#" + remove_class).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($("#" + remove_class).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Price')) {
                    let data_from_price = $("#" + remove_class).attr('data-from');
                    let data_to_price = $("#" + remove_class).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($("#" + remove_class).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Sailboat_Type')) {
                    sailboat_type.splice(sailboat_type.indexOf(list_val), 1);
                }
                $.ajax({
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    type: "post",
                    data: {
                        get_all_value_checked,
                        sailboat_type,
                        makes,
                        lengths_from,
                        lengths_to,
                        years,
                        prices_from,
                        prices_to,
                        status,
                        locations,
                        models,
                        action: "get_all_data_of_sailboat_using_filter",
                    },
                    beforeSend: function(data) {
                        $("#filter-spinner").show();
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $("#filter-spinner").hide();
                        $(".inventory-box").html(obj.searched_data);
                        if (class_rmf == "Make") {
                            $("#get_model_data").html(obj.model_data);
                        }
                        get_all_forms();
                        setWidthHeight();
                    }
                });
            }
        });

        //Search Field Also work on typing enter.
        $('#search_field').keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                $("#hidden_field_search").val(keycode);
                $("#search_btn").trigger("click");
                $("#get_fetched_data").hide();
            }

        });

        //Search Button Ajax
        $("#search_btn").click(function(e) {
            e.preventDefault();
            $("#get_fetched_data").hide();
            let search_name = $("input[type='search']").val();
            if (search_name == "") {
                alert("Please Enter Any Search Key in the searchbar");
                return;
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    data: {
                        search_name,
                        action: "search_data_by_clicking_search_btn"
                    },
                    beforeSend: function() {
                        $("#search_btn").html(
                            'Search <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>'
                        );
                        $("#get_fetched_data").hide();
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $("#get_fetched_data").hide();
                        $("#search_btn").html("Search");
                        $(".inventory-box").html(obj.data);
                        get_all_forms();
                        setWidthHeight();
                    }
                })
            }
        });

        //Enter all data to database
        
        $.ajax({
            url: "<?= admin_url('admin-ajax.php'); ?>",
            method: "POST",
            data: {
                action: 'enter_all_data_to_database_from_api',
            },
            success: function(res) {
                let obj = JSON.parse(res);
            }
        });

        $(".test_drive_form input[name='date']").attr("min", "<?php echo date('Y-m-d'); ?>");
    });
</script>