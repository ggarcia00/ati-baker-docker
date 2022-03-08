<?php

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap -->
        <link href="view/resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="view/resources/css/datepicker.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="view/resources/css/jquery.bxslider.min.css" rel="stylesheet" type="text/css" media="all">
        <!--<link href="view/resources/css/estilo.css" rel="stylesheet" type="text/css" media="all">
        <link href="view/resources/css/navbar.css" rel="stylesheet" type="text/css" media="all">-->


        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Tienne' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.pt-BR.min.js"></script>-->
        <script src="view/resources/js/datepicker.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="view/resources/js/jquery.bxslider.min.js"></script>
        <script src="view/resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/resources/js/script-portal.js"></script>
        <title>UEL - Universidade Estadual de Londrina</title>

        <style>

            /* CSS que não funciona por link (tirar daqui)*/
            .logo-uel{
                
                background: url("http://localhost/websitebaker/templates/verklap/img/logo-uel-maior.jpg") no-repeat;
                background-size: 250px;
                width:250px;
                height:60px;
                margin: auto;
            }
            .icone-transparencia {
                width: 20px;
                padding-left: 5px;
                vertical-align: middle;
            }

            nav-transparencia > a {
                display: table-cell;
            }

            .navbar {
                box-shadow: 1px 0 2px 0 rgba(0,0,0,0.75);
                min-height: 37px;    
            }

            .form-control {
                height: 30px;
                width: 200px;
            }

            .navbar-toggle {
                vertical-align: middle;
                margin: 0;
            }

            .navbar-brand {
                float:left;
                padding:0;
                font-size:18px;
                line-height:20px
            }
            .navbar-default .container-fluid {
                padding: 0px;
            }

            .navbar-right {
                margin-right: 0px;
            }

            .nav .navbar-nav{

                padding: 0px 0px 0px 0px;

            }

            #nav-idiomas {

            }
            /*#nav-idiomas a {
                float:left;
            }*/

            #nav-idiomas a > img {
                height: 15px;
            }

            .navbar-default .navbar-header,
            .navbar-default .navbar-brand
            {
                background-color: #ffffff;
            }



            .navbar-default {
                background-color: #008649;
                border-color: #008649;
            }

            .navbar-default .navbar-brand {
                color: #535353;
            }

            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
                color: #535353;
            }

            .navbar-default .navbar-text {
                color: #535353;
            }

            .navbar-default .navbar-nav > li > a {
                color: #fff;
                padding: 5px 0px 5px 0px;
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color: #fff;
                padding: 5px 0px 3px 0px;
                /*border-bottom: #67B21F 2px solid;*/
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > li > ul > li > a {
                color: #535353;
                padding: 5px 0px 5px 0px;
                font-size: 14px;
                background-color: #EEECEE;
            } 

            .navbar-nav>li>a {
                padding-top: 9px;
                padding-bottom: 9px;
            }



            .navbar-default .navbar-nav > li > ul > li > a:hover,
            .navbar-default .navbar-nav > li > ul > li > a:focus {
                color: #ffffff;
                padding: 5px 0px 5px 0px;
                font-size: 14px;
                background-color: #2E7D32;
            }

            .navbar-default .navbar-nav > li > a:hover,
            .navbar-default .navbar-nav > li > a:focus {
                color: #535353;
                padding: 5px 0px 3px 0px;
                /*border-bottom: #67B21F 2px solid;*/
                margin: 5px 0px 0px 15px;
            }

            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color: #535353;
                background-color: #ffffff;
            }

            .navbar-default .navbar-nav > .open > a,
            .navbar-default .navbar-nav > .open > a:hover,
            .navbar-default .navbar-nav > .open > a:focus {
                color: #535353;
                background-color: #ffffff;
            }

            .navbar-default .navbar-toggle {
                border-color: #008649;
            }

            .navbar-default .navbar-toggle:hover,
            .navbar-default .navbar-toggle:focus {
                background-color: #008649;
            }

            .navbar-default .navbar-toggle .icon-bar {
                background-color: #fff;
            }

            .navbar-default .navbar-collapse,
            .navbar-default .navbar-form {
                background-color: #008649;
            }

            .navbar-default .navbar-link {
                color: #535353;
            }

            .navbar-default .navbar-link:hover {
                color: #535353;
            }

            .navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
                max-height: 420px;
            }

            .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                border-color: #008649;
            }

            .dropdown-menu>li>a {
                font-family: 'Lato';
                font-size: 16px;
                display: block;
                padding: 3px 20px;
                clear: both;
                font-weight: normal;
                line-height: 1.428571429;
                color: #333;
                white-space: nowrap;
            }


            input.gsc-input,
            .gsc-input-box,
            .gsc-input-box-hover,
            .gsc-input-box-focus,
            .gsc-search-button {
                box-sizing: content-box; 
                line-height: normal;
            }


            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin:  1% 0 1% 0;
            }
            ._12 {
                font-size: 1.2em;
            }
            ._14 {
                font-size: 1.4em;
            }
            ul {
                padding:0;
                list-style: none;
            }
            .header-social-icons {
                /*width: 191px;*/
                display:block;
                margin: 0 auto;
                height: 0px;
            }
            .social-icon {
                color: #fff;
            }
            ul.social-icons {
                margin-top: 2px;
                position: relative;
                left: 200px;

            }
            .social-icons li {
                vertical-align: middle;
                display: inline;
                height: 100px;
            }
            .social-icons a {
                color: #fff;
                text-decoration: none;
            }

            .fa {
                display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: 17px;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .fa-facebook {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-facebook:hover {
                background-color: transparent;
            }
            .fa-twitter {
                padding:10px 12px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-twitter:hover {
                background-color: transparent;
            }
            .fa-rss {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-rss:hover {
                background-color: transparent;
            }
            .fa-youtube {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-youtube:hover {
                background-color: transparent;
            }
            .fa-linkedin {
                padding:10px 14px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-linkedin:hover {
                background-color: transparent;
            }
            .fa-google-plus {
                padding:10px 9px;
                -o-transition:.5s;
                -ms-transition:.5s;
                -moz-transition:.5s;
                -webkit-transition:.5s;
                transition: .5s;
                background-color: transparent;
            }
            .fa-google-plus:hover {
                background-color: transparent;
            } 

            @media (max-width: 990px) {

                .navbar-brand-outer {
                    display:flex;
                    align-items:center;
                    height:70px;
                    width:260px;

                    margin-bottom: 17px;

                    padding: 0;
                }


                .navbar-search {
                    padding-left: 0;
                }
                .navbar-header {
                    float: none;
                    width: 260px;
                    height: 70px;
                }
                .navbar-left,.navbar-right {
                    float: none !important;
                }
                .navbar-toggle {
                    display: block;
                }
                .navbar-collapse {
                    border-top: 1px solid transparent;
                    box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
                }
                .navbar-fixed-top {
                    top: 0;
                    //border-width: 0 0 1px;
                }

                .navbar-form {
                    border-top: 0px;
                }

                .navbar-collapse.collapse {
                    display: none!important;
                }

                .navbar-nav {
                    float: none!important;
                    margin-top: 0px;
                    text-align: center;
                }
                .navbar-nav>li {
                    float: none; 
                }
                .navbar-nav>li>a {
                    padding-top: 5px;
                    padding-bottom: 5px;
                }
                .collapse.in{
                    display:block !important;
                }

                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #008649;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .navbar-default .navbar-nav > li > a:hover,
                .navbar-default .navbar-nav > li > a:focus {
                    color: #ffffff;
                    background-color: #2E7D32;
                    padding: 10px 0px 10px 0px;
                    border: 0;
                    margin: 0px;
                }

                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #008649;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }



                .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
                .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                    color: #fff;

                }
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
                .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
                    color: #fff;
                    background-color: #ccc; 
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    position: relative;
                    right: -230px;
                }

                .navbar-nav {
                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;

                }

                .navbar-collapse .navbar-nav.navbar-right:last-child {
                    margin-right: 0px;
                }

                /*Cor caret*/
                .nav .caret {
                    border-top-color: #fff;
                    border-bottom-color: #fff;
                }
                .nav a:hover .caret {
                    border-top-color: #fff;
                    border-bottom-color: #fff;
                }
            }

            .nav .open > a,
            .nav .open > a:hover,
            .nav .open > a:focus {
                background-color:#c0d1c5;
                border-color: #337ab7;
            }


            @media (max-width: 480px) {
                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #008649;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .nav .navbar-nav{
                    font-weight: bold;
                    padding: 0px 0px 0px 14px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }

                .navbar-nav {

                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;
                }


            }

            @media (max-width: 979px) {
                .navbar-default .navbar-nav > li > a{
                    color: #fff;
                    background-color: #008649;
                    margin: 0;
                    padding: 10px 0px 10px 0px;
                    line-height: 10px;
                }

                .nav .navbar-nav{
                    font-weight: bold;
                    padding: 0px 0px 0px 14px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }
            }
            
            
            
            * {margin: 0; padding:0;}

            body {
                background-color: #F7F7F7;
                font-family: 'Lato';
            }

            .container {
                background-color: #008649;
                padding: 0;
            }

            .col-centered {
                float: none;
                margin: 0 auto;
            }
            .card {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                background: #fff;
                padding: 16px;
                margin-bottom: 16px;
                box-sizing: border-box;
                padding-top: 30px;
            }

            .card-header {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                background: #fff;
                padding: 16px;
                box-sizing: border-box;
                margin-top: 39px;
            }

            #header-portal {
                height: 36px;
            }

            .menu {
                margin: 5px 0px 10px 0px;
            }

            .menu > li > a{
                color: #333;
                border-bottom: #fff 1px solid;
                padding: 5px 5px 5px 5px;
                font-size: 12px;
            }

            .menu-icone {
                width: 10px;
                background-color: #00933B;
                display: table-cell;
                padding: 6px;
                border-radius: 2px;
                border-right: #fff 2px solid;
                font-weight: bold;
                color: #fff;
                margin-bottom: 15px;
            }

            .menu-titulo {
                width: 100%;
                background-color: #00933B;
                color: #ffffff;
                font-weight: bold;
                display: table-cell;
                padding: 5px 10px 5px 10px;
                border-radius: 2px;
                margin-bottom: 15px;
            }

            .menu-portais {
                margin-bottom: 5px;
            }

            .secao-titulo {
                margin: 15px 0px 15px 0px;
            }
            .secao-icone {
                width: 20px;
                background-color: #cde1e1;
                display: table-cell;
                /*padding: 5px 10px 5px 10px;*/
                border-right: #fff 2px solid;
                margin-bottom: 15px;
            }

            .secao-titulo-nome {
                font-family: 'Lato';
                width: 100%;
                background-color: #d1decf;
                color: #000;
                padding: 10px 5px 10px 5px;
                display: table-cell;
                font-weight: normal ;
                font-size: 15px;
                margin-bottom: 15px;
                border-left: 9px solid #008649;
            }

            .secao-titulo-nome a {
                color: #000;
            }

            #botoes-menu-direito {
                font-weight: bold;  
            }

            #botoes-menu-direito > li > a {
                font-size: 12px;
                margin-bottom: 5px;
                /*    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.2),0 1px 1px 0 rgba(0,0,0,0.14),0 2px 1px -1px rgba(0,0,0,0.12);
                    -moz-border-radius: 2px;
                    -webkit-border-radius: 2px;*/
            }

            #botoes-menu-esquerdo > li > a {
                padding: 5px 10px 5px 10px;
                font-size: 12px;
                border-radius: 2px;
                margin-bottom: 5px;
            }

            #ul-agencia {
                margin: 10px 0px 10px 0px;
            }

            .nav-menu > ul > li > a {
                color: #444;
                font-size: 17px;
            }

            .nav-pills > li > a {
                color: #444;
                font-size: 12px;
                border-radius: 4px;
                border: #ccc 1px solid;
                padding: 5px 10px;
            }

            .submenu > li > a {
                color: #222;
                font-size: 12px;
            }


            /*
            #com-slider {
                margin: 10 auto;
            }*/


            .carousel-inner > .item > a > img {
                width: 100%;
                height: 300px;
            }

            .carousel-caption {
                padding: 6px 0px 0px 10px;
                background: #008649;
                width: 238px;
                height: 34px;
                position: relative;
                bottom: 70px;
                left: 5px;
                text-align: left;
            }

            .tarja-home {
                background-color: #008649;
                color: #FFF;
                font-size: 100%;
                /* text-transform: uppercase; */
                padding-top: 2px;
                padding-bottom: 1px;
                padding-left: 10px;
                width: 240px;
                display: block;
                margin-top: -50px;
                margin-bottom: 15px;
                position: relative;
                z-index: 2;
                border-bottom: 1px solid #57ab70;
                border-right: 1px solid #57ab70;
                bottom: 35px;
                left: 29px;
            }

            .tarja-home-servicos {
                background-color: #57ab70;
                color: #FFF;
                font-size: 100%;
                /* text-transform: uppercase; */
                padding-top: 2px;
                padding-bottom: 1px;
                padding-left: 10px;
                width: 240px;
                display: block;
                margin-top: -50px;
                margin-bottom: 15px;
                position: relative;
                z-index: 2;
                border-bottom: 1px solid #57ab70;
                border-right: 1px solid #57ab70;
                bottom: 35px;
                left: 19px;
            }

            .titulo-home {
                font-family: 'Lato';
                font-weight: bold;
            }

            .titulo-home > a {
                color: #57ab70;
            }

            .resumo-home{
                font-size: 90%;
                font-family: 'Lato';
                color: #575756;
            }

            .carousel-indicators {
                bottom: 10px;
            }
            .carousel-control {
                opacity: 0;
                width: 20%;
            }

            .carousel-control .glyphicon-chevron-right {
                margin-right: -40px;
            }

            .carousel-control .glyphicon-chevron-left {
                margin-left: -40px;
            }

            .slider li input:checked ~ a h3 {
                color: #fff;
                font-size: 28px;
                font-weight: 300;
                line-height: 60px;
                padding: 0 0 0 10px;
                text-shadow: 1px 1px 1px rgba(20, 20, 20, 0.72);
            }

            .carousel-indicators {
                margin-bottom: -10px;
            }

            /* Estilo para Agência de Notícias */
            #agencia-noticias ul {
                list-style-type: none;
                text-align: left;
            }

            #agencia-noticias li {
                margin: 5px 5px 10px 5px;
            }

            #agencia-noticias li a {
                color: #575756;
            }

            #row-2-portal {
                margin-top: 15px;
            }


            /*Estilo para Vídeos*/
            #videos {
                margin-bottom: 0px;
            }
            #videos ul {
                list-style-type: none;
                text-align: left;
            }

            #videos li {
                margin: 5px 5px 10px 5px;
            }

            #videos li a {
                color: #575756;
            }

            /*Estilo para área do Jornal Notícia*/
            .imagem-capa {
                border: #ccc 1px solid;
                border-radius: 4px;
                padding: 2px;
            }
            .imagem-capa > a > img {
                width: 100%;
                height: 200px;
            }

            /*Estilo para Atividades Acadêmicas*/
            #atividades-academicas li a {
                color: #575756;
            }

            /*Estilo para Rádio Uel*/
            #radio-uel .thumbnail > img {
                height: 85px;
            }
            .thumbnail {
                padding:0px;
                border: none;
            }
            .thumbnail .caption{
                padding: 0px 0px 0px 0px;
                text-align: left;
                color: #575756;
            }
            .thumbnail > img {

                display: block;
                height: auto;
                max-width: 100%;
                border: none;

            }

            /*Estilo para Destaques

            #destaques .thumbnail img {
                height: auto;
                width: 220px;
            }

            #destaques .thumbnail {
                
                padding-bottom: 10px;
                margin-bottom: 0px;
            }*/


            /*Estilo para Canais*/
            .ul_canal_links > li {
                list-style: none;
                padding: 0px 0px 2px 5px;
            }

            .ul_canal_links > li > a {
                color: #333;
                font-size: 12px;
            }

            .div_canal_titulo {
                margin-bottom: 5px;
                font-weight: bold;
                font-size: 12px;
            }

            .canais-imagem {
                width: 32px;
                height: 100%;
                display: table-cell;
                margin-bottom: 10px;
                vertical-align: middle;
            }

            .canais-titulo {
                width: 100%;
                padding: 5px 5px 5px 5px;
                display: table-cell;
                margin-bottom: 10px;
                font-size: 12px;
                color: #333;
                font-weight: bold;
            }

            .canais-titulo:hover{
                color: #333;
            }

            #links-com-imagem {
                margin-bottom: 20px;
            }

            #links .thumbnail {
                text-align: center;
                padding: 0px;
                border: 0px;
            }

            #links .thumbnail img {
                height: 38px;
            }

            #footer {
                text-align: center;
                font-size: 12px;
                color: #333;
                margin-bottom: 0px;
            }

            #footer a {
                text-decoration: none;
                color: #333;
            }

            #footer a:hover{
                text-decoration: underline;
            }

            .panel {
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
                box-shadow: 0 0px 0px rgba(0,0,0,0.05);
            }

            .panel-group {
                margin-bottom: 0px;
            }

            .panel-heading {
                padding: 0px;
                margin-top: 15px;
                margin-bottom: 10px;
            }

            #heading-atividades {
                margin-top: 0px;
            }
            .more-less {
                float: right;
                color: #333;
                /*text-shadow: 1px 1px 1px rgba(40, 40, 40, 0.60);*/
            }

            #collapse-canais {
                margin-right: 0px;
                margin-left: 0px;
            }

            .nav .open > a {
                border: 0px;
            }

            .panel {
                border: 0px;
            }

            /*Estilo para as p?ginas*/
            .paginas {
                margin-bottom: 15px;
            }
            .pagina-icone {
                width: 20px;
                background-color: #EEECEE;
                display: table-cell;
                padding: 5px 10px 5px 10px;
                border-right: #fff 2px solid;
                margin-bottom: 15px;
            }

            .pagina-titulo-nome {
                width: 100%;
                background-color: #EEECEE;
                color: #2E7D32;
                padding: 5px 5px 5px 5px;
                display: table-cell;
                /*display: block;*/
                font-weight: bold;
                margin-bottom: 15px;
                font-size: 18px;
            }

            .paginas blockquote {
                border: 0px;
                padding-left: 20px;
                margin: 0px;
                font-size: 12px;
            }

            .paginas-lista-nome {
                padding-top: 10px;
                font-size: 14px;
                font-weight: bold;
            }

            .paginas-lista-nome > a {
                color: #333;
            }


            .paginas-lista-conteudo {
                padding-left: 20px;
                font-size: 12px;
            }

            .paginas-lista-conteudo li a {
                color: #333;
                line-height: 2;
            }

            /*#informes li {
                list-style-type: none;
            }*/

            /*#informes .paginas-lista-conteudo {
                padding: 0px;
                line-height: 2;
            }*/

            .portal-links .paginas-lista-conteudo {
                margin-top: 15px;
            }

            #form-filtro {
                margin-top: 20px;
            }

            #form-filtro > .well {
                background-color: #F6F6F6;
                margin: 0;
                padding: 10px;
            }

            #form-filtro .form-group {
                width: 100%;
                margin-top: 10px;
            }

            .pagination > li > a {
                color: #333;
                width: 42px;
                text-align: center;
                font-weight: bold;
            }

            .pagination > li > a:hover{
                color: #333;
            }

            .pagination > li > a.pagina-selecionada {
                background-color: #00933B;
                color: #fff;
                border: 1px solid #ddd;
            }

            .pagination > li > a.desativado {
                color: #ccc;
                pointer-events: none;
            }

            .pagination > li > a.desativado:hover {
                color: #ccc;
                background-color: #fff;
            }

            .bx-wrapper {
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                box-shadow: 0;
                border: 0;
                margin-bottom: 0;
                background: #fff;
            }

            .bx-wrapper .bx-prev {
                left: 0px;
                background: url("/view/resources/images/controls.png") 0 -32px no-repeat;
            }

            .bx-wrapper .bx-next {
                right: 0px;
                background: url("/view/resources/image/controls.png") -43px -32px no-repeat;
            }

            .bx-wrapper .bx-controls-direction a {
                margin-top: -45px;
            }



            .row-striped:nth-of-type(odd){
                background-color: #efefef;
                border-left: 4px #000000 solid;
            }

            .row-striped:nth-of-type(even){
                background-color: #ffffff;
                border-left: 4px #efefef solid;
            }

            .row-striped {
                padding: 15px 0;
            }

            .dropdown-menu-left {
                right: auto;
                left: -5px;
            }


            /*Seta do menu dropdown*/
            .caret {
                display: inline-block;
                width: 0px;
                height: 0px;
                margin-left: 2px;
                vertical-align: middle;
                border-top: 4px dashed;
                border-top: 4px solid\9;
                border-right: 4px solid transparent;
                border-left: 4px solid transparent;
                /* background-color: #397e72; */
            }

            .nav>li>a:focus, .nav>li>a:hover {
                text-decoration: none;
                background-color: #c0d1c5;
            }

            .navbar-nav > li > .dropdown-menu {

                margin-top: 0;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                /*border-left: 5px solid #259642;*/

            }

            .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {

                color: #fff;
                /*padding: 5px 0px 3px 0px;
                margin: 5px 0px 0px 15px;*/
            }

            .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {

                color: #262626;
                text-decoration: none;
                background-color: #d1decf;
            }



            /*Tabela Radio UEL*/
            #table-wrapper {
                position:relative;
            }
            #table-scroll {
                height:68px;
                overflow:auto;  
                margin-top: 10px;
            }
            #table-wrapper table {
                width:100%;

            }
            #table-wrapper table * {
                background:#f2f2f2;

            }
            #table-wrapper table thead th .text {
                position:absolute;   
                top:-20px;
                z-index:2;
                height:20px;
                width:35%;
                border:1px solid red;
            }

            #menu-header-superior {
                position: relative;
            }


            /*Estilo para Eventos e Cursos*/
            .w3-container, .w3-panel {
                padding: 0.01em 5px;
            }

            .w3-xlarge {
                font-size: 20px!important;
            }
            .w3-badge, .w3-tag {
                background-color: #EEECEE;
                color: #535353;
                display: inline-block;
                padding-left: 8px;
                padding-right: 8px;
                text-align: center;
                box-shadow: 1px 2px 7px 0px rgba(0,0,0,0.75);
            }

            .eventos-mes {
                width: 357px;
                margin-left: 2px;
                margin-top: 18px;
                padding: 0px 5px 0px 8px;
                font-size: 25px;
                border-left: 9px solid #008649;
            }
            .eventos-mes > a {
                color: #008649;
                text-decoration: none;
            }

            .eventos-dia {
                font-size: 30px;
                color: #575756;
            }

            .eventos-dia > a {
                color: #575756;
                text-decoration: none;
            }

            .eventos-do-dia {
                display: inline;
                font-size: 19px;
            }

            .eventos-do-dia > a {
                color: #444;
                text-decoration: none;
            }

            /*Tabela Radio UEL*/
            #table-wrapper {
                position:relative;
            }
            #table-scroll {
                height:75px;
                overflow:auto;  

            }
            #table-wrapper table {
                width:100%;

            }
            #table-wrapper table * {
                background:#f2f2f2;

            }
            #table-wrapper table thead th .text {
                position:absolute;   
                top:-20px;
                z-index:2;
                height:20px;
                width:35%;
                border:1px solid red;
            }

            #menu-header-superior {
                position: relative;
            }



            /*Definições de tamanho de conteiners e elementos */
            @media (max-width: 480px),
            (max-width: 680px) and (max-height: 480px) {
                #agencia-noticias {
                    margin-bottom: 15px;
                } 
            }

            @media (max-width: 480px) {
                .carousel-inner > .item > a > img {
                    height: 150px;
                }

                .carousel-caption {
                    padding: 0px 0px 0px 10px;
                    background: rgba(0,0,0,0.7);
                    width: 300px;
                    height: 50px;
                    position: absolute;
                    bottom: 30px;
                    left:0px;
                    text-align: left;
                    display: table;
                }

                .carousel-caption > h3 {
                    vertical-align: middle;
                    display: table-cell;
                    margin: 0px;
                    font-size: 18px;
                    line-height: normal;
                } 

                .carousel-control .glyphicon-chevron-right {
                    margin-right: 0px;
                }

                .carousel-control .glyphicon-chevron-left {
                    margin-left: 0px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }
            }

            @media (max-width: 767px) {
                #row-2-portal {
                    margin-top: 0px;
                }

                #conteudo-portal {
                    margin: 0;
                    margin-bottom: 10px;
                }

                #header-portal {
                    /*padding: 0px 15px 0px 15px;*/

                }
                #agencia-noticias {
                    margin-top: 15px;
                }

                .panel {
                    margin-bottom: 15px;
                }

                .panel-group .panel {
                    margin-bottom: 15px;
                }

                .panel-heading {
                    padding: 0px;
                    margin-top: 0px;
                    margin-bottom: 0px;
                }

                .panel-heading > div > a {
                    color: #2E7D32;
                }

                #panel-canais .panel-heading > div > a {
                    color: #333;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    position: relative;
                    right: -20px;
                }

                .navbar-nav {

                    margin: 7.5px 0px;
                    margin-top: 7.5px;
                    margin-right: 0px;

                }

                .navbar-collapse {
                    padding-right: 0px;
                    padding-left: 0px;
                    overflow-x: visible;
                    -webkit-overflow-scrolling: touch;
                    border-top: 1px solid transparent;
                    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
                    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);

                }
            }

            @media (min-width: 992px) {
                .row.text-center > div {
                    display: inline-block;
                    float: none;
                }


            } 

            @media (max-width: 1199px) {
                .menu-titulo {
                    font-size: 12px;
                    padding: 2px 5px 2px 5px;
                }
                .menu-icone {
                    padding: 2px 5px 2px 5px;
                }

                .tam-ul-dropdown {
                    width: 937px;
                    position: relative;
                    right: 15px;
                }

                .estilo-navbar-drop-li {
                    margin-left: 15px;
                }

                .estilo-navbar-drop-ul {
                    margin-left: 4px;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 270px;
                    /*position: relative;
                    right: 365px;*/
                }

                .nav>li>a {
                    position: relative;
                    display: block;
                    padding: 16px 35px;
                }

                ul.social-icons {
                    /*margin-top: 5px;*/
                    position: relative;
                    left: 132px;
                }
            }

            @media (min-width: 1200px) {
                .container {
                    max-width: 1200px;
                }

                .navbar-brand-outer {
                    display:flex;
                    align-items:center;
                    height:70px;
                    width:260px;
                    position: relative;
                    margin-bottom: 17px;
                    left: 420px;
                    padding: 0;
                }

                .navbar-form {
                    margin-top:5px;
                    margin-bottom: 0px;
                    padding-right: 0px;
                    padding-left: 30px;
                    width: 300px;
                    /*position: relative;
                    right: 365px;*/
                }

                .nav>li>a {
                    position: relative;
                    display: block;
                    padding: 16px 59px;
                }

                #menu-header-left {
                    position: relative;
                    left: 365px;
                }

                .estilo-navbar-drop-div {
                    top: 10px;
                }

                /*.estilo-navbar-drop-li {
                    margin-left: 30px;
                }*/

                .estilo-navbar-drop-ul {
                    margin-left: 5px;
                }

                .tam-ul-dropdown {
                    width: 1137px;
                    position: relative;
                    right: 15px;
                }

            }

            @media (min-width: 991) and (max-width: 1199) {



                .estilo-navbar-drop-div {
                    position: relative;
                    left: 69px; 
                    top: 30px;
                }

                .estilo-navbar-drop-li {
                    margin-left: 15px;
                }

                .estilo-navbar-drop-ul {
                    margin-left: 4px;
                }


            }

            @media (min-width: 991px) {
                /*Cor caret*/
                .nav .caret {
                    border-top-color: #008649;
                    border-bottom-color: #008649;
                }
                .nav a:hover .caret {
                    border-top-color: #008649;
                    border-bottom-color: #008649;
                }



            }

            /*Dropdowns*/
            .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }

            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }


        </style>
    </head>
    <body>
        <?php include_once('view/html/navbar.html'); ?>
        
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-733333-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
