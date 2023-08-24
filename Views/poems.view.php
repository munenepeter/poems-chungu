<?php include_once 'base.view.php';
include_once 'sections/nav.view.php'; ?>
<div class="w-full lg:max-w-full pt-8 md:mt-32 mt-8 px-4 py-4 lg:py-8">


       <article class="grid md:grid-cols-4 w-full mt-8 gap-2 bg-asparagus-50 ">
              <?php if (!empty($poems)) : ?>
                     <?php foreach ($poems as $poem) : ?>
                            <div class="bg-clip-border border-4 border-white border-l-asparagus-500 bg-white p-4 flex flex-col justify-between leading-normal">
                                   <div class="mb-4">
                                          <p class="text-sm text-gray-600 flex items-center">
                                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current text-gray-500 w-3 h-3 mr-2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                                 </svg>
                                                 <?= ($poem->status) ? "Published" : "Unpublished"; ?>
                                          </p>
                                          <div class="text-gray-900 font-bold text-xl mb-2"><?= $poem->title; ?></div>
                                          <p class="text-gray-700 text-base"><?= truncate(format_poem($poem->body), 155) ?></p>
                                   </div>

                                   <div class="text-sm">
                                          <p class="text-gray-900 leading-none"><?= $poem->author()->name; ?></p>
                                          <p class="text-gray-600"><?= $poem->updated_at; ?></p>
                                   </div>

                            </div>
                     <?php endforeach; ?>
              <?php endif; ?>
       </article>

</div>
<?php include_once 'sections/footer.view.php'; ?>