<nav class="bg-asparagus-500 fixed w-full top-0 -mb-2"
  style=" background-image: linear-gradient(135deg, rgb(152, 179, 104) 0%, rgb(74, 93, 46) 100%);">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center text-japonica-400">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-8 h-8 mr-3 hidden md:block">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
      </svg>
      <span class="self-center md:text-2xl text-lg font-semibold whitespace-nowrap ">Chungu Poems</span>
    </a>

    <div class="">
      <?php if(auth()):?>
      <ul class="flex md:space-x-8 space-x-2 bg-transparent md:font-medium uppercase">
        <li>
          <a href="/admin/poems"
            class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-white md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Poems</a>
        </li>
        <li>
          <a href="/admin/qoutes"
            class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-white md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Qoutes</a>
        </li>
        <li>
          <a type="button"
            class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-white md:hover:bg-transparent
            md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500 cursor-pointer"
            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
            Admin
          </a>
          <!-- Dropdown menu -->
          <div
            class="hidden z-50 my-4 w-56 text-base list-none bg-japonica-50 divide-y divide-gray-100 shadow rounded-xl
            border"
            id="dropdown"

            style="background-color: rgb(253, 245, 243); border-color: rgb(232, 148,
            129);">
            <div class="py-3 px-4">

              <span class="block text-xs font-semibold text-japonica-700 normal-case ">
                <?= ucfirst(strstr(session_get('email'), '@', true)) ?>
              </span>
              <span class="block text-xs text-gray-700 truncate normal-case">
                <?= session_get('email') ?>
              </span>
            </div>
            <ul class="py-1 text-japonica-700 normal-case" aria-labelledby="dropdown">
              <li>
                <a href="/dashboard"
                  class="block py-2 px-4 text-sm hover:bg-gray-100">
                  Dashboard</a>
              </li>
              <li>
                <a href="/:system:/logs"
                  class="block py-2 px-4 text-sm hover:bg-gray-100">View
                  Logs</a>
              </li>
              <li>
                <form action="/auth/logout" method="post">
                  <input type="hidden" name="_logout" value="<?= md5(session_get('email')) ?>">
                  <button role="button" type="submit"
                    class="block py-2 px-4 text-sm hover:bg-gray-100">Sign
                    out</button>
                </form>
              </li>
            </ul>
          </div>
        </li>

        <?php else: ?>
        <ul class="flex md:space-x-8 space-x-2 bg-transparent md:font-medium uppercase">
          <li>
            <a href="#"
              class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50 md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">About</a>
          </li>
          <li>
            <a href="#"
              class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50 md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Poems</a>
          </li>
          <li>
            <a href="#"
              class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50  md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Reviews</a>
          </li>
          <?php endif; ?>
        </ul>
    </div>
  </div>
</nav>