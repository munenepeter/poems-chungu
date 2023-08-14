<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>

<!-- Latest poems -->
<section class="pt-8  md:mt-16 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
       <div class=" overflow-x-auto shadow-md sm:rounded-lg">
              <div class="w-full">
                     <!-- Start coding here -->
                     <div class="  overflow-hidden bg-white   dark:bg-gray-800 sm:rounded-lg">
                            <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                                   <div>
                                          <h5 class="mr-3 font-semibold dark:text-white">Chungu Poems</h5>
                                          <p class="text-gray-500 dark:text-gray-400">Manage all your existing poems or
                                                 add a
                                                 new one</p>
                                   </div>




                                   <section>
                                          <!-- Modal toggle -->
                                          <button id="createNewPoemBtn" data-modal-toggle="createNewPoemModal" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                                 </svg>
                                                 Add new poem
                                          </button>



                                          <!-- Main modal -->
                                          <div id="createNewPoemModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                 <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                               <!-- Modal header -->
                                                               <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                                      <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                             Add a poem
                                                                      </h3>
                                                                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createNewPoemModal">
                                                                             <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                             </svg>
                                                                             <span class="sr-only">Close modal</span>
                                                                      </button>
                                                               </div>
                                                               <!-- Modal body -->
                                                               <form action="/dashboard/poems/create" method="post">
                                                                      <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                             <div>
                                                                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                                                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type poem title" required="">
                                                                             </div>
                                                                             <div>
                                                                                    <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                                                                                    <select id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                           <option selected="">Select
                                                                                                  author</option>
                                                                                           <option value="munenepeter">
                                                                                                  munenepeter</option>
                                                                                    </select>
                                                                             </div>
                                                                             <div class="sm:col-span-2">

                                                                                    <label for="poem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poem</label>

                                                                                    <textarea name="poem" id="editor" class="overflow-hidden block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a poem..." ></textarea>

                                                                             </div>
                                                                      </div>
                                                                      <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                             <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                                             </svg>
                                                                             Add new poem
                                                                      </button>
                                                               </form>
                                                        </div>
                                                 </div>
                                          </div>
                                   </section>
                            </div>
                     </div>
              </div>
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                     <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                   <th scope="col" class="px-3 py-3">
                                          Title
                                   </th>
                                   <th scope="col" class="px-3 py-3">
                                          author
                                   </th>
                                   <th scope="col" class="px-6 py-3">
                                          body
                                   </th>

                                   <th scope="col" class="px-6 py-3">
                                          Action
                                   </th>
                            </tr>
                     </thead>
                     <tbody>
                            <?php foreach ($poems as $poem) : ?>
                                   <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                          <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                 <?= $poem->title?>
                                          </th>
                                          <td class="px-3 py-3">
                                                 munenepeter
                                          </td>
                                          <td class="px-6 py-4">
                                              <?= $poem->body?>
                                          </td>

                                          <td class="px-6 py-4">
                                                 <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                          </td>
                                   </tr>
                            <?php endforeach; ?>


                     </tbody>
              </table>
       </div>
</section>



<script>
       ClassicEditor
              .create(document.querySelector('#editor'))
              .catch(error => {
                     console.error(error);
              });
</script>