<?php include_once 'base.view.php'; ?>
<?php include_once 'sections/nav.view.php'; ?>

<div class="bg-slate-500 h-64 pt-8  mt-16 ">

    <div class="flex items-start justify-center container px-4 mx-auto">
        <div class="px-2 sm:w-1/2 md:w-1/4">
            <h1 class="text-white font-extrabold text-5xl">New Poems every week</h1>
        </div>

        <div class="px-2 sm:w-1/2 md:w-3/4">

            <p class='text-gray-400'>SUBSCRIBE TO OUR NEWSLETTER The latest news, article, resources, sent to your inbox
                weekly</p>

            <div class='flex xsm:flex-row md:p-0'>
                <input
                    class='px-4 py-3 text-lg transition-all duration-300 rounded-l-lg focus:outline-none focus:right-1 '
                    placeholder='Enter your email' type="text" />
                <button class='-ml-1 px-4 py-3 font-semibold bg-amber-500 rounded-r-lg'>Subscribe</button>
            </div>
        </div>

    </div>
</div>



<?php include_once 'sections/footer.view.php'; ?>