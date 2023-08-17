<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>

<!-- Latest poems -->
<section class="pt-8 md:mt-20 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
       <div class="font-medium col-span-2 p-2 mb-2">
              <article class="w-full max-w-2xl">
                     <h1 class="mb-2 text-3xl font-extrabold leading-tight text-japonica-900 lg:mb-6 lg:text-4xl ">
                            <?= ucwords($poem->title) ?></h1>

                     <a href="#" rel="author" class="text-sm font-bold text-japonica-900 uppercase">by
                            <?= $poem->author ?></a>
                     <div class="prose md:mt-4 mt-2 lead text-japonica-950">
                            <?= htmlspecialchars_decode($poem->body) ?>
                     </div>

              </article>
       </div>
</section>

<?php include_once 'sections/footer.view.php'; ?>