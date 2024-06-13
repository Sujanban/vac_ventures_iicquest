<!-- header component -->
<div class="bg-blue-500 max-w-7xl mx-auto">
      <nav
        class="relative px-4 py-4 flex justify-between items-center bg-white"
      >
        <a class="text-3xl font-bold leading-none" href="index.php">
          <img class="h-8" src="./assets/logo.JPG" alt="" />
        </a>
        <div class="lg:hidden">
          <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg
              class="block h-4 w-4 fill-current"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Mobile menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </button>
        </div>
        <ul
          class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6"
        >
          <li>
            <a class="text-sm text-gray-400 hover:text-gray-500" href="./index.php"
              >Home</a
            >
          </li>

          <li>
            <a class="text-sm text-gray-400 hover:text-gray-500" href="./about.php"
              >About Us</a
            >
          </li>

          <li>
            <a class="text-sm text-gray-400 hover:text-gray-500" href="#service"
              >Services</a
            >
          </li>

          <li>
            <a class="text-sm text-gray-400 hover:text-gray-500" href="#doctor"
              >Doctors</a
            >
          </li>

          <li>
            <a class="text-sm text-gray-400 hover:text-gray-500" href="#contact"
              >Contact</a
            >
          </li>
        </ul>
<?php

if ($_SESSION["sessionuser"] != "") {
  ?> <a
  class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200"
  href="../back/dashboard/dashboard.php"
  >Account</a
> <?php
}else{
  ?>
  <a
          class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200"
          href="../login.php"
          >Sign In</a
        >
        <a
          class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
          href="../register.php?scores=0"
          >Sign up</a
        >
  <?php
}

?>

      </nav>
      <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
          class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto"
        >
          <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="./index.php">
              <img class="h-8" src="./assets/logo.jpg" alt="" />
            </a>
            <button class="navbar-close">
              <svg
                class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>
          <div>
            <ul>
              <li class="mb-1">
                <a
                  class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                  href="./index.php"
                  ><i class="fa fa-home" aria-hidden="true"></i> Home</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                  href="./about.php"
                  ><i class="fa fa-diamond" aria-hidden="true"></i> About Us</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                  href="#service"
                  ><i class="fa fa-stethoscope" aria-hidden="true"></i>
                  Services</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                  href="#doctor"
                >
                  <i class="fa fa-user-md" aria-hidden="true"></i>

                  Doctors</a
                >
              </li>
              <li class="mb-1">
                <a
                  class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                  href="#contact"
                >
                  <i class="fa fa-phone" aria-hidden="true"></i>

                  Contact</a
                >
              </li>
            </ul>
          </div>

<?php

if ($_SESSION["sessionuser"] != "") {
    ?>

<div class="mt-auto">
            <div class="pt-6">
              <a
                class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                href="../login.php"
                >Account</a
              >
            </div>
          </div>

    <?php
}else{
    ?>
    <div class="mt-auto">
            <div class="pt-6">
              <a
                class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                href="../login.php"
                >Sign in</a
              >
              <a
                class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
                href="../register.php?scrores=0"
                >Sign Up</a
              >
            </div>
          </div>
     <?php
}

?>

          
        </nav>
      </div>
    </div>