<?php

/*

type: layout
content_type: static
name: Features
position: 6
description: Features

*/


?>

<?php include template_dir() . "header.php"; ?>

<style>
    @media (max-width: 992px) {
        .mw-features-page-nav-left-side-wrapper {
            position: sticky !important;
            top: 0;
            z-index: 2;
            background-color: #fff;

            .navbar-collapse {
                border: 1px solid #ececec;
            }
        }
    }

    @media (min-width: 992px) {
        .mw-features-page-nav-left-side-wrapper {
            margin-top: 34px;
        }
    }

    .mw-features-page-nav-wrapper {
        position: sticky;
        top: 25px;
        z-index: 1;
        max-height: calc(100vh - 100px);
        overflow: auto;
    }

    .mw-features-page-nav ul{
        list-style: none;
    }

    .mw-features-page-nav ul.first-child{
        padding-left: 5px;
    }


    .mw-features-page-nav .nav_link:not(ul.first-child li a), .mw-features-page-nav .nav-link:not(ul.first-child li a)  {
        margin: 20px 0;
        display: block;
        font-weight: bold;
        padding-left: 0;
    }

    .mw-features-page-nav .nav-link:focus {
        font-weight: bold;
        color: #000;
    }

    .mw-features-page-nav li a {
        font-style: normal;
        line-height: 1.2em;
        letter-spacing: 0;
        text-rendering: geometricPrecision;
        text-transform: none;
        text-decoration: none;
        font-size: 18px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400;
        opacity: .7;
        -webkit-transition: opacity 500ms cubic-bezier(.215, .61, .355, 1);
        transition: opacity 500ms cubic-bezier(.215, .61, .355, 1);
        color: #000;

    }

    .mw-features-page-nav li ul li a {
        font-size: 16px;
    }

    .mw-features-page-nav li a:hover, .mw-features-page li a.active, .mw-features-page li a:active {
        opacity: 1;
        color: #000;
    }

    .mw-features-page-nav-right-side-wrapper .btn-link {

        position: relative;
        font-size: 16px;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: bold;
        transition: .5s;
        padding-inline: 0;
    }

    .mw-features-page-nav-right-side-wrapper .btn-link:after {
        position: absolute;
        content: '';
        bottom: 0;
        right: 0;
        height: 2px;
        width: 100%;
        transition: .5s;
        opacity: 1;
        background-color: #000;
    }

    .mw-features-page-nav-right-side-wrapper .btn-link:hover {
        opacity: .8;
    }

    .mw-features-page-nav-right-side-wrapper .btn-link:hover:after {
        width: 0;
        opacity: 0;
    }


    .mw-features-page-nav-right-side-wrapper .btn-link::before {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg>');
        position: absolute;
        right: -25px;
        content: '';
        z-index: 1;
        width: 20px;
        height: 20px;
        top: 5px;
    }

    .mw-features-page-nav-right-side-wrapper .btn-link:hover {
        transition: .5s;

        padding-right: 10px;
    }

    .mw-features-page-nav-right-side-wrapper {

        .row {
            padding: 15px;
        }
        .row.text-center:hover {
            background-color: #f0f0f0;
        }


    }

    #mw-module-1708074119379 {
        .row.text-center:hover {
            background-color: unset;
        }
    }
</style>



<module type="layouts" template="titles/skin-1"/>


<div class="row px-3">
    <div class="col-lg-3 position-relative mw-features-page-nav-left-side-wrapper">
        <div class="edit mw-features-page-nav-wrapper" rel="inherit" field="sidebar">
            <nav class="navbar navbar-expand-lg navbar-light mw-features-page-nav">
                <button class="navbar-toggler w-100 collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="flex-shrink-0 p-lg-0 pt-5 px-1 w-100">
                        <module type="menu" template="skin-1"/>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="col-lg-9 mw-features-page-nav-right-side-wrapper">
        <div class="edit" rel="content" field="content">
            <div class="content">
                <module type="layouts" template="titles/skin-4"/>
            </div>
            <module type="layouts" template="features/skin-1"/>
        </div>
    </div>

</div>

<?php include template_dir() . "footer.php"; ?>
