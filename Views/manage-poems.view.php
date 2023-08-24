<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>

<!-- Latest poems -->
<section class="pt-8 md:mt-20 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
       <div class="flex flex-col">
              <div class="my-2 overflow-x-auto sm:-max-6 lg:-mx-8">
                     <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden border border-asparagus-400 m-2 sm:rounded-lg">
                                   <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                                          <div>
                                                 <h5 class="mr-3 font-semibold text-asparagus-800 dark:text-asparagus-900">Chungu
                                                        Poems</h5>
                                                 <p class="text-asparagus-500 dark:text-asparagus-400">Manage all
                                                        your existing poems or
                                                        add a
                                                        new one</p>
                                          </div>

                                          <section>
                                                 <!-- Modal toggle -->
                                                 <button id="createNewPoemBtn" data-modal-toggle="createNewPoemModal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-asparagus-500 hover:text-asparagus-100 rounded-lg border border-asparagus-700 hover:bg-asparagus-400 focus:ring-4 focus:ring-asparagus-300 dark:bg-asparagus-600 dark:hover:bg-asparagus-700 focus:outline-none dark:focus:ring-asparagus-800">
                                                        <svg class="h-3.5 w-3.5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                               <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                        </svg>
                                                        Add new poem
                                                 </button>



                                                 <!-- Main modal -->
                                                 <div id="createNewPoemModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                               <!-- Modal content -->
                                                               <div class="relative p-4 bg-white rounded-lg shadow dark:bg-asparagus-800 sm:p-5">
                                                                      <!-- Modal header -->
                                                                      <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-asparagus-600">
                                                                             <h3 class="text-lg font-semibold text-asparagus-900 dark:text-white">
                                                                                    Add a poem
                                                                             </h3>
                                                                             <button type="button" class="text-asparagus-400 bg-transparent hover:bg-asparagus-200 hover:text-asparagus-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-asparagus-600 dark:hover:text-white" data-modal-toggle="createNewPoemModal">
                                                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                           <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                                                                                           </path>
                                                                                    </svg>
                                                                                    <span class="sr-only">Close
                                                                                           modal</span>
                                                                             </button>
                                                                      </div>
                                                                      <!-- Modal body -->
                                                                      <form action="/admin/poems/create" method="post">
                                                                             <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                                    <div class="sm:col-span-2">
                                                                                           <label for="title" class="block mb-2 text-sm font-medium text-asparagus-900 dark:text-white">Title</label>
                                                                                           <input type="text" name="title" id="title" class="bg-asparagus-50 border border-asparagus-300 text-asparagus-900 text-sm rounded-lg focus:ring-asparagus-600 focus:border-asparagus-600 block w-full p-2.5 dark:bg-asparagus-700 dark:border-asparagus-600 dark:placeholder-asparagus-400 dark:text-white dark:focus:ring-asparagus-500 dark:focus:border-asparagus-500" placeholder="Type poem title" required="">
                                                                                    </div>
                                                                                    <div>
                                                                                           <label for="author" class="block mb-2 text-sm font-medium text-asparagus-900 dark:text-white">Author</label>
                                                                                           <select id="author" name="author" class="bg-asparagus-50 border border-asparagus-300 text-asparagus-900 text-sm rounded-lg focus:ring-asparagus-500 focus:border-asparagus-500 block w-full p-2.5 dark:bg-asparagus-700 dark:border-asparagus-600 dark:placeholder-asparagus-400 dark:text-white dark:focus:ring-asparagus-500 dark:focus:border-asparagus-500">
                                                                                                  <option selected="">
                                                                                                         Select
                                                                                                         Author
                                                                                                  </option>
                                                                                                  <?php foreach ($authors as $author) : ?>
                                                                                                         <option value="<?= $author->id ?>">
                                                                                                                <?= ucfirst($author->name) ?>
                                                                                                         </option>
                                                                                                  <?php endforeach; ?>
                                                                                           </select>
                                                                                    </div>

                                                                                    <div>
                                                                                           <label for="category" class="block mb-2 text-sm font-medium text-asparagus-900 dark:text-white">category</label>
                                                                                           <select id="category" name="category" class="bg-asparagus-50 border border-asparagus-300 text-asparagus-900 text-sm rounded-lg focus:ring-asparagus-500 focus:border-asparagus-500 block w-full p-2.5 dark:bg-asparagus-700 dark:border-asparagus-600 dark:placeholder-asparagus-400 dark:text-white dark:focus:ring-asparagus-500 dark:focus:border-asparagus-500">
                                                                                                  <option selected="">
                                                                                                         Select
                                                                                                         Category
                                                                                                  </option>
                                                                                                  <?php foreach ($categories as $category) : ?>
                                                                                                         <option value="<?= $category->id ?>">
                                                                                                                <?= ucfirst($category->name) ?>
                                                                                                         </option>
                                                                                                  <?php endforeach; ?>
                                                                                           </select>
                                                                                    </div>
                                                                                    <div class="sm:col-span-2">

                                                                                           <label for="poem" class="block mb-2 text-sm font-medium text-asparagus-900 dark:text-white">Poem</label>

                                                                                           <textarea name="body" id="editor" class="overflow-hidden block w-full px-0 text-sm text-asparagus-800 bg-white border-0 dark:bg-asparagus-800 focus:ring-0 dark:text-white dark:placeholder-asparagus-400" placeholder="Write a poem..."></textarea>

                                                                                    </div>
                                                                             </div>
                                                                             <button type="submit" class="text-white inline-flex items-center bg-asparagus-500 hover:bg-asparagus-800 focus:ring-4 focus:outline-none focus:ring-asparagus-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-asparagus-600 dark:hover:bg-asparagus-700 dark:focus:ring-asparagus-800">
                                                                                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                           <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
                                                                                           </path>
                                                                                    </svg>
                                                                                    Add new poem
                                                                             </button>
                                                                      </form>
                                                               </div>
                                                        </div>
                                                 </div>
                                          </section>
                                   </div>

                                   <table class="min-w-full divide-y divide-asparagus-400">
                                          <thead class="bg-asparagus-100">
                                                 <tr>
                                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-asparagus-500 uppercase tracking-wider">
                                                               Title
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-asparagus-500 uppercase tracking-wider">
                                                               Author
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-asparagus-500 uppercase tracking-wider">
                                                               body
                                                        </th>

                                                        <th scope="col" class="relative px-6 py-3">
                                                               <span class="sr-only">Edit</span>
                                                        </th>
                                                 </tr>
                                          </thead>

                                          <tbody class="bg-white divide-y divide-asparagus-400">

                                                 <?php if (!empty($poems)) : ?>
                                                        <?php foreach ($poems as $poem) : ?>
                                                               <tr>
                                                                      <td class="px-4 py-4 whitespace-nowrap">
                                                                             <p> <?= $poem->title ?></p>
                                                                      </td>
                                                                      <td class="px-6 py-4 whitespace-nowrap">
                                                                             <p><?= $poem->author ?></p>

                                                                      </td>
                                                                      <td class="px-6 py-4 ">
                                                                             <p class="text-sm text-asparagus-900">
                                                                                    <?= wp_strip_all_tags(str_replace("</p>", " ", htmlspecialchars_decode($poem->body))) ?>
                                                                             </p>
                                                                      </td>

                                                                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                             <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                                      </td>
                                                               </tr>
                                                        <?php endforeach; ?>
                                                 <?php endif; ?>

                                          </tbody>
                                   </table>
                            </div>
                     </div>
                     </di>
              </div>

       </div>
</section>


<script src="<?= asset('js/custom-ckeditor.js') ?>"></script>
<script>
       ClassicEditor
              .create(document.querySelector('#editor'), {
                     // Editor configuration.
              })
              .then(editor => {
                     window.editor = editor;
              })
              .catch(handleSampleError);

       function handleSampleError(error) {
              const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

              const message = [
                     'Oops, something went wrong!',
                     `Please, report the following error on ${ issueUrl } with the build id "n9f4z769im97-i57gmdhh3z7" and the error stack trace:`
              ].join('\n');

              console.error(message);
              console.error(error);
       }
</script>