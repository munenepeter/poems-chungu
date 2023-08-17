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
