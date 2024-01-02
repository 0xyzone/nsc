<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nepal SKI Association</title>

    <!-- link -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/output.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- style -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap");

        * {
            font-family: "Inter";
            scroll-behavior: smooth;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5e6d586221.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="relative w-full h-full">
        <!-- mobile-navbar-dropdown -->
        <div class="absolute z-20 hidden text-black text-sm rounded-lg duration-500 ease-in-out bg-white right-14 top-14" id="mobile_navbar">
            <h1 class="px-8 py-3 hover:bg-gray-400 hover:text-white">
                <a href="">HOME</a>
            </h1>
            <h1 class="px-8 py-3 hover:bg-gray-400 hover:text-white">
                <a href="">ORGANIZATION</a>
            </h1>
            <h1 class="px-8 py-3 hover:bg-gray-400 hover:text-white">
                <a href="">NEWS</a>
            </h1>
            <h1 class="px-8 py-3 hover:bg-gray-400 hover:text-white">
                <a href="">GALLERY</a>
            </h1>
            <h1 class="px-8 py-3 hover:bg-gray-400 hover:text-white">
                <a href="">CONTACT US</a>
            </h1>
        </div>
        <header class="absolute top-0 w-full h-auto py-2 text-white bg-gradient-to-b from-primary to-transparent opacity-90">
            <div class="w-full container mx-auto px-5 flex items-center justify-between border border-b-white border-t-0 border-x-0 pb-2">
                <div class="flex items-center space-x-5">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="NSA_logo" class="w-24 h-16" />
                    <?php wp_nav_menu(array('theme-location'=>'primary_menu', 'menu_class'=>'nav')) ?>
                </div>
                <button id="nav-hamburger" class="block lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <input type="search" name="" placeholder="Search ..." class="hidden p-1.5 text-sm rounded-xl text-black focus:outline-none focus:border-primary lg:block" />
            </div>
        </header>