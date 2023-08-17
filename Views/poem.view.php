<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>

<main class="h-fit bg-japonica-50">
       <section class="pt-8 md:mt-20 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
              <div class="mt-4 md:m-8 w-full p-2 md:flex">
                     <div class="p-8 md:w-3/4 bg-white">
                            <h1 class="mb-2 text-3xl font-extrabold leading-tight text-japonica-900 lg:mb-6 lg:text-4xl ">
                                   <?= ucwords($poem->title) ?></h1>
                            <div class="prose md:mt-4 mt-2 lead text-japonica-950">
                                   <?= htmlspecialchars_decode($poem->body) ?>
                            </div>

                     </div>
                     <div class="px-8 md:w-1/4">
                            <div class="w-40 overflow-hidden">
                                   <img class="md:h-48 h-32 w-full object-cover object-center" src="https://design4users.com/wp-content/uploads/2020/02/love-illustrations.png" />
                                   <div class="mt-2">
                                          <a href="#" rel="author" class="mb-2 text-xl font-bold text-gray-900">Hate</a>
                                          <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400 italic">12 items
                                          </p>
                                   </div>
                            </div>
                            <p class="text-sm font-bold text-japonica-900 uppercase">Share this poem</p>

                            <p>Lorem ipsum dolor sit amet consectetu</p>
                             
                     </div>
              </div>
       </section>
</main>
<?php include_once 'sections/footer.view.php'; ?>