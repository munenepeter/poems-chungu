<?php include_once 'base.view.php';?>

<div class="grid place-items-center h-screen md:p-0 p-2">

       <div
              class="w-full max-w-sm p-4 bg-asparagus-50 border border-asparagus-400 rounded-lg shadow sm:p-6 md:p-8 dark:bg-amber-800 dark:border-amber-700">
              <form class="space-y-6" action="/auth/login" method="post">
                     <h5 class="text-xl font-semibold text-asparagus-800 text-center">Welcome back to Chungu Poems</h5>
                     <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-asparagus-800 ">Your
                                   email</label>
                            <input type="email" name="email" id="email"
                                   class="bg-amber-50 border border-amber-300 text-asparagus-800 text-sm rounded-lg
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-amber-600
                                   dark:border-amber-500 dark:placeholder-amber-400 "
                                   placeholder="name@company.com" required>
                     </div>
                     <div>
                            <label for="password"
                                   class="block mb-2 text-sm font-medium text-asparagus-800 ">Your
                                   password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-amber-50 border border-amber-300 text-asparagus-800 text-sm rounded-lg
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-amber-600
                                   dark:border-amber-500 dark:placeholder-amber-400 "
                                   required>
                     </div>
                   
                     <button type="submit"
                            class="w-full text-white bg-asparagus-500 hover:bg-asparagus-400 focus:ring-4 focus:outline-none
                     focus:ring-asparagus-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                     dark:hover:bg-asparagus-800 dark:focus:ring-blue-800">Login
                            to your account</button>
                     <div class="text-sm font-medium text-amber-500 dark:text-amber-300">
                            Not registered? <a href="#" class="text-asparagus-800 hover:underline dark:text-blue-500">Create
                                   account</a>
                     </div>
              </form>
       </div>


</div>