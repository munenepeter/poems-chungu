<?php include_once 'base.view.php'; ?>
<?php include_once 'sections/nav.view.php'; ?>

<section class="bg-green-550 md:h-64 lg:72 pt-8  md:mt-16 mt-8 ">
    <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-2">
        <div class="flex flex-col justify-between lg:flex-row px-5">
            <div class="mb-8 lg:max-w-lg lg:pr-5 lg:mb-0">
                <h1 class="text-white font-extrabold md:text-6xl text-4xl">New poetry, every week</h1>
            </div>
            <div class="pb-5 lg:w-2/5">
                <p class='pb-8 text-gray-100'>Sign up to get new poetry playlist in your inbox every week.You'll receive
                    set
                    of poems around a different theme, with a focus on contemporary poets. It's free, and you can
                    unsubsribe anytime. Read more about us</p>

                <div class='flex sm:flex-row md:p-0'>
                    <input
                        class='px-4 md:px-8 py-2 md:py-3 md:text-lg transition-all duration-300 focus:outline-none focus:right-1 '
                        placeholder='Enter your email' type="text" />
                    <button class='ml-1 px-4 md:px-6 py-2 md:py-3 font-semibold bg-amber-500'>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
    <div class="grid grid-cols-6 gap-4 mx-auto">
        <h1>Latest</h1>
        <div class="-ml-32 font-medium col-span-3 p-2">

            <article
                class="w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <h1
                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Love is hate and death</h1>

                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">By munenepeter</a>


                <p class="mt-4 lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo odio et assumenda sunt perspiciatis corrupti voluptas cum, quisquam quos explicabo.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus aliquid consequuntur et enim corrupti totam?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem non dolor, repellat optio, omnis qui corrupti voluptas aliquid natus dolorem ipsa quis veniam in cumque facilis animi. Et minus consequatur quisquam dolorem qui, incidunt nostrum accusantium totam non. Voluptates corrupti magnam aut esse accusamus?/p>
            </article>
        </div>

        <div class="ml-10">
            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                <li class="mb-8 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">01</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Love
                    </h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">by Peter Munene
                    </p>

                </li>
                <li class="mb-8 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">02</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Hate
                    </h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">by Peter Munene
                    </p>

                </li>

            </ol>
        </div>

    </div>

</div>


<?php include_once 'sections/footer.view.php'; ?>