<?php include_once 'base.view.php'; ?>
<?php include_once 'sections/nav.view.php'; ?>

<section class="bg-slate-600 md:h-64 lg:72 pt-8  md:mt-16 mt-8 ">
    <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-2">
        <div class="flex flex-col justify-between lg:flex-row px-5">
            <div class="mb-8 lg:max-w-lg lg:pr-5 lg:mb-0">
                <h1 class="text-white font-extrabold md:text-6xl text-4xl">New poetry, every week</h1>
            </div>
            <div class="pb-5 lg:w-2/5">
                <p class='pb-8 text-gray-400'>Sign up tp get new poetry playlist in your inbox every week.You'll receive
                    set
                    of poems around a different theme, with a focus on contemporary poets. I'ts free, and you can
                    unsubsribe anytime. Read more about us</p>

                <div class='flex sm:flex-row md:p-0'>
                    <input class='px-8 py-3 text-lg transition-all duration-300 focus:outline-none focus:right-1 '
                        placeholder='Enter your email' type="text" />
                    <button class='ml-1 px-6 py-3 font-semibold bg-amber-500'>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-2">
    <div class="grid grid-cols-6 gap-4 mx-auto">
        <h1>Latest</h1>
        <div class="-ml-24 font-medium col-span-3">
            
            <h2>Lorem ipsum dolor sit.</h2>

            <small>Lorem, ipsum.</small>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium iusto a reprehenderit, vero quibusdam totam voluptate quod! Nisi pariatur non sed consequuntur eius cumque soluta, reiciendis quos exercitationem? Voluptatibus, debitis.</p>
        </div>

        <div class="flex flex-col col-span-2">
            1
        </div>
    </div>

</div>


<?php include_once 'sections/footer.view.php'; ?>