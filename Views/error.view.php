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



<div class='flex items-center justify-center min-h-screen from-japonica-500 via-greeen-300 to-asparagus-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">500</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold text-black md:text-4xl">Internal Server Error.</p>
                    <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">We are already working to solve the problem. </p>
                </div>
            </div>

        </div>
    </div>
</div>

<body>
    <div class="grid place-items-center h-screen">

        <div class="space-y-4 text-center">
            <?php if (ENV === 'development') : ?>
                <h2 class="text-4xl text-purple-700"><?= $code; ?></h2>
                <p class="mb-4"><?= ucwords($message); ?></p>
            <?php endif; ?>
            <?php if (ENV === 'production') : ?>
                <?php
                $errors = App::get('config')['codes'][$code];
                ?>
                <h2 class="text-4xl"><?= $errors[0]; ?></h2>
                <p><?= $errors[1]; ?></p>
            <?php endif; ?>

            <a onclick="history.back()" class="text-blue-500 m-4 hover:underline cursor-pointer">Go Back</a>

        </div>
    </div>

</body>

</html>