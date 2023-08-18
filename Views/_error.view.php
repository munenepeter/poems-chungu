<?php

use Chungu\Core\Mantle\App; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/../static/imgs/favicon/error-favicon.svg" type="image/svg">
    <link rel="stylesheet" href="<?= asset('css/output.css') ?>">
    <title>Error <?= $code; ?></title>
</head>

<body>
    <div class="grid place-items-center h-screen bg-japonica-50">
        <div class="m-2 min-w-[50%] shadow-lg rounded-md">
            <div class="p-4 bg-asparagus-50">
                <?php
                $errors = App::get('config')['codes'][$code];
                ?>

                <h2 class="text-4xl py-2 text-japonica-500"><?= $errors[0]; ?></h2>
                <p class="text-asparagus-700"><?= $errors[1]; ?></p>

                <p class="text-asparagus-400"><?= date("D, d M Y H:i:s") ?></p>
            </div>
            <div class="bg-white p-4">
                <p class="mb-2 font-semibold">What happened?</p>

                <p class="pb-4 text-sm"><?= (ENV === 'development') ? $message : $errors[1]; ?></p>


                <p>Your IP: <span class="text-xs text-blue-600"> <?= $_SERVER['REMOTE_ADDR'] ?></span></p>

                <p>Log ID: <span class="text-xs text-blue-600"><?= md5(time()) ?></span></p>
            </div>

        </div>
    </div>

</body>

</html>