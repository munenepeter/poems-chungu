<?php 
include_once 'base.view.php';
include_once 'sections/nav.view.php'; 
?>

<!-- Latest poems -->
<section
       class="pt-8  md:mt-16 mt-8 px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
       <div class=" overflow-x-auto shadow-md sm:rounded-lg">
              <div class="w-full">
                     <!-- Start coding here -->
                     <div class="  overflow-hidden bg-white   dark:bg-gray-800 sm:rounded-lg">
                            <div
                                   class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                                   <div>
                                          <h5 class="mr-3 font-semibold dark:text-white">Chungu Poems</h5>
                                          <p class="text-gray-500 dark:text-gray-400">Manage all your existing poems or
                                                 add a
                                                 new one</p>
                                   </div>
                                   <button type="button"
                                          class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1"
                                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                 <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                          </svg>
                                          Add new poem
                                   </button>
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
                            <?php for ($i=0; $i < 4; $i++) :?>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                   <th scope="row"
                                          class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                          Lorem ipsum dolor sit
                                   </th>
                                   <td class="px-3 py-3">
                                          munenepeter
                                   </td>
                                   <td class="px-6 py-4">
                                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis repellat
                                          culpa, minima labore obcaecati
                                          tempore impedit! Blanditiis dolorem earum ullam temporibus magnam! Corporis
                                          repudiandae ea autem
                                          voluptatum eligendi ut sunt pariatur? Beatae veniam explicabo voluptate
                                          officia fugiat, culpa adipisci
                                          libero!
                                   </td>

                                   <td class="px-6 py-4">
                                          <a href="#"
                                                 class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                   </td>
                            </tr>
                            <?php endfor; ?>


                     </tbody>
              </table>
       </div>

</section>