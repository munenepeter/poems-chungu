<?php include_once 'base.view.php';?>

<div class="grid place-items-center h-screen md:p-0 p-2 bg-white">

       <div class="w-full max-w-sm p-4 bg-asparagus-50 border rounded-lg sm:p-6 md:p-8 "
              style="background-color: rgb(244, 247, 238); border-color: rgb(152, 179, 104);">

              <form class="space-y-6" action="/auth/login" method="post">
                     <h5 class="text-xl font-bold text-asparagus-900 text-center">Welcome back to Chungu Poems</h5>
                     <div>
                            <label for="email" class="block mb-2 font-medium text-asparagus-800 ">Your
                                   email</label>
                            <input type="email" name="email" id="email" class="bg-asparagus-50 border border-asparagus-300 text-asparagus-800 rounded-lg
                                   focus:ring-asparagus-500 focus:border-asparagus-500 block w-full p-2.5 "
                                   placeholder="name@chungu.co.ke" required>
                     </div>
                     <div>
                            <label for="password" class="block mb-2 font-medium text-asparagus-800 ">Your
                                   password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-asparagus-50 border border-asparagus-300 text-asparagus-800 rounded-lg
                                   focus:ring-asparagus-500 focus:border-asparagus-500 block w-full p-2.5 " required>
                     </div>

                     <button type="submit" class="w-full text-white bg-asparagus-500 hover:bg-asparagus-400 focus:ring-4 focus:outline-none
                     focus:ring-asparagus-300 font-medium rounded-lg  px-5 py-2.5 text-center
                     dark:hover:bg-asparagus-800 dark:focus:ring-asparagus-800">Login
                            to your account</button>
                     <div class=" font-medium text-japonica-500 dark:text-japonica-300">
                            Not registered? <a href="#"
                                   class="text-asparagus-800 hover:underline dark:text-asparagus-500">Create
                                   account</a>
                     </div>
              </form>
       </div>


</div>