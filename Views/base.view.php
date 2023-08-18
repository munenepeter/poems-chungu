<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Chungu Poems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#799649" />
    <meta name="description" content="Discover the soulful world of poetry at Chungu Poems. Immerse yourself in heartfelt verses that touch upon love, life, and everything in between. Explore and let our words resonate with your heart's emotions." />

    <link rel="icon" href="<?php asset("imgs/favicon/norm-favicon.svg") ?>" type="image/svg">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <?php if (!str_contains($_SERVER['REQUEST_URI'], ':system') || str_contains($_SERVER['REQUEST_URI'], 'admin')) : ?>
        <script defer src="<?= asset('js/index.js') ?>"></script>
    <?php endif; ?>
    <link rel="stylesheet" href="<?= asset('css/output.css') ?>">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
    <style>
        body {
            font-family: 'EB Garamond', serif;
        }

        .bg-asparagus-500 {
            background-color: #799649 !important;
        }

        .bg-japonica-400 {
            background-color: #e89481 !important;
        }

        /*
        .text-asparagus-500 {
            color: #799649;
        } */

        [x-cloak] {
            display: none;
        }
    </style>



</head>

<body class="bg-white">