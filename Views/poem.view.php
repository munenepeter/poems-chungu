<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>

<main class="h-screen bg-japonica-50">
       <section class="pt-8 md:mt-20 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
              <div class="mt-4 md:m-8 w-full p-2 md:flex">
                     <div class="md:p-8 p-4 md:w-3/4 bg-white">
                            <h1 class="mb-2 text-3xl font-extrabold leading-tight text-japonica-900 lg:mb-6 lg:text-4xl ">
                                   <?= ucwords($poem->title) ?></h1>
                            <div class="prose md:mt-4 mt-2 lead text-japonica-950">
                                   <?= htmlspecialchars_decode($poem->body) ?>
                            </div>

                     </div>
                     <div class="md:px-8 py-1 md:w-1/4 md:mb-0 mb-20">
                            <div class="md:w-40 w-full overflow-hidden">
                                   <img class="md:h-48 h-32 w-full object-cover object-center bg-japonica-50" src="https://design4users.com/wp-content/uploads/2020/02/love-illustrations.png" />
                                   <div class="mt-2">
                                          <a href="#" rel="author" class="mb-2 text-xl font-bold text-gray-900"><?= ucwords($poem->category()->name) ?></a>
                                          <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400 italic">12 items
                                          </p>
                                   </div>
                            </div>
                            <p class="mb-4 text-sm font-bold text-japonica-900 uppercase">Share this poem</p>

                            <div class="flex  space-x-5  justify-start md:mt-0">
                                   <a href="#" class="text-asparagus-500 hover:text-asparagus-900">
                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                                 <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                          </svg>
                                          <span class="sr-only">Facebook page</span>
                                   </a>

                                   <a href="#" class="text-asparagus-500 hover:text-asparagus-900">
                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                                 <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                                          </svg>
                                          <span class="sr-only">Twitter page</span>
                                   </a>

                                   <a href="#" class="text-asparagus-500 hover:text-asparagus-900">
                                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                 <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                                          </svg>
                                          <span class="sr-only">Dribbble account</span>
                                   </a>
                            </div>

                     </div>
              </div>
       </section>
</main>
<?php include_once 'sections/footer.view.php'; ?>