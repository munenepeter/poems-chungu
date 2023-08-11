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
    <div class="md:grid md:grid-cols-6 md:gap-4 gap-2 mx-auto">
        <h1 class="mb-2">Latest</h1>
        <div class="md:-ml-32 font-medium md:col-span-3 p-2">

            <article
                class="w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <h1
                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    Love is hate and death</h1>

                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">By munenepeter</a>


                <p class="md:mt-4 mt-2 lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo odio et assumenda
                    sunt perspiciatis corrupti voluptas cum, quisquam quos explicabo.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus aliquid consequuntur et enim
                    corrupti totam?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem non dolor, repellat optio, omnis
                    qui corrupti voluptas aliquid natus dolorem ipsa quis veniam in cumque facilis animi. Et minus
                    consequatur quisquam dolorem qui, incidunt nostrum accusantium totam non. Voluptates corrupti magnam
                    aut esse accusamus?</p>
            </article>
        </div>

        <div class="md:ml-10 col-span-2 md:border-none border-t md:py-0 py-4">

            <?php for ($i=1; $i < 6; $i++):?>

            <div class="md:my-2 inline-flex items-center dark:text-white">
                <div class="mr-3 grid grid-cols-1 justify-items-center bg-slate-200 w-12 rounded-sm">
                    <div class='md:text-3xl text-2xl text-amber-500'>0<?=$i?></div>
                </div>
                <div>
                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">Hate is
                        nature</a>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">By Peter Munene
                    </p>

                </div>
            </div>

            <?php endfor?>
            </ol>
        </div>

    </div>

</div>


<?php include_once 'sections/footer.view.php'; ?>