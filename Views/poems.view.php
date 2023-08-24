<?php include_once 'base.view.php';
include_once 'sections/nav.view.php'; ?>
<div class="w-full lg:max-w-full pt-8 md:mt-32 mt-8 px-4 py-4 lg:py-8">


       <article class="grid md:grid-cols-4 w-full mt-8 gap-2">

              <?php foreach ($poems as $poem) : ?>
                     <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-4">
                                   <p class="text-sm text-gray-600 flex items-center">
                                          <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                 <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                          </svg>
                                          <?= ($poem->status) ? "Published" : "Unpublished"; ?>
                                   </p>
                                   <div class="text-gray-900 font-bold text-xl mb-2"><?= $poem->title; ?></div>
                                   <p class="text-gray-700 text-base"><?= truncate(wp_strip_all_tags(str_replace("</p>", " ", htmlspecialchars_decode($poem->body))), 150) ?></p>
                            </div>

                            <div class="text-sm">
                                   <p class="text-gray-900 leading-none"><?= $poem->author()->name; ?></p>
                                   <p class="text-gray-600"><?= $poem->updated_at; ?></p>
                            </div>

                     </div>
              <?php endforeach; ?>
       </article>

</div>