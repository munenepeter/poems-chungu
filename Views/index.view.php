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
                        class='px-2 md:px-8 py-2 md:py-3 md:text-lg transition-all duration-300 focus:outline-none focus:right-1 '
                        placeholder='Enter your email' type="text" />
                    <button class='ml-1 px-2 md:px-6 py-2 md:py-3 font-semibold bg-amber-500'>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
    <div class="md:grid md:grid-cols-6 md:gap-4 gap-2 mx-auto">
        <h1 class="mb-2 uppercase text-orange-550">Latest</h1>
        <div class="md:-ml-32 font-medium md:col-span-3 p-2 mb-2">

            <article class="w-full max-w-2xl">
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">L.O.V.E</h1>

                <a href="#" rel="author" class="text-xl font-bold text-gray-900 italic">By munenepeter</a>
                <p class="md:mt-4 mt-2 lead"> It is like a magical river</p>
                <p>Like a mystery rhyme</p>
                <p>That can last forever</p>
                <p>And can never race with time</p>
                <p>Like an imaginary song</p>
                <p>That repeats itself all over again</p>
                <p>So very very long</p>
                <p>That it will forever remain</p>
                <p>It can also heal the hearts cry </p>
                <p>With a demystifying tone</p>
                <p>So as to try and multiply</p>
                <p>The lost love of the lone heart</p>
            </article>
        </div>

        <div class="md:ml-10 col-span-2 md:border-none border-t md:py-0 py-4">

            <?php for ($i=1; $i < 6; $i++):?>

            <div class="md:my-2 inline-flex items-center">
                <div class="mr-3 grid grid-cols-1 justify-items-center bg-slate-100 w-12 rounded-md">
                    <div class='md:text-3xl text-2xl text-amber-700'>0<?=$i?></div>
                </div>
                <div>
                    <a href="#" rel="author" class="text-xl font-bold text-gray-900">Hate is
                        nature</a>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 italic">By Peter Munene
                    </p>

                </div>
            </div>

            <?php endfor?>
            </ol>
        </div>

    </div>

</section>


<section class="bg-amber-100 px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
    <h1 class="mb-2 uppercase text-orange-550">Most viewed categories</h1>

    <div class="grid md:grid-cols-5 grid-cols-2 gap-2">
        <?php for ($i=0; $i < 4 ; $i++) :?>
        <div class="mx-auto mt-6 w-40  overflow-hidden">
            <img class="md:h-56 h-48 w-full object-cover object-center"
                src="https://design4users.com/wp-content/uploads/2020/02/love-illustrations.png"/>
            <div class="mt-2">
                <a href="#" rel="author" class="mb-2 text-xl font-bold text-gray-900">Hate is
                    nature</a>
                <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400 italic">By Peter Munene
                </p>


            </div>
        </div>
        <?php endfor; ?>
    </div>

</section>


<?php include_once 'sections/footer.view.php'; ?>