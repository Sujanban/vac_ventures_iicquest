<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      * {
        scroll-behavior: smooth;
      }
      .banner-image {
        background: url(./assets//hero_banner.png);
        background-position: center;
        background-size: cover;
        object-fit: cover;
      }
      .banner-ads {
        background: url(./assets//ads.png);
        background-position: center;
        background-size: cover;
        object-fit: cover;
      }
      .stats1 {
        background: url(./assets/stats1.png);
        background-position: center;
        background-size: cover;
        object-fit: cover;
      }
      .stats2 {
        background: url(./assets/stats_2.png);
        background-position: center;
        background-size: cover;
        object-fit: cover;
      }
      .stats3 {
        background: url(./assets/stats_3.png);
        background-position: center;
        background-size: cover;
        object-fit: cover;
      }
    </style>
  </head>
  <body class="">
    <!-- header component -->
    <div class="bg-blue-500 max-w-7xl mx-auto">
      <nav
        class="relative px-4 py-4 flex justify-between items-center bg-white"
      >
        <a class="text-3xl font-bold leading-none" href="index.php">
          <img class="h-8" src="./assets/logo.jpg" alt="" />
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
        <a
          class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200"
          href="../login.php"
          >Sign In</a
        >
        <a
          class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
          href="../register.php"
          >Sign up</a
        >
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
          <div class="mt-auto">
            <div class="pt-6">
              <a
                class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                href="../login.php"
                >Sign in</a
              >
              <a
                class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
                href="../register.php"
                >Sign Up</a
              >
            </div>
          </div>
        </nav>
      </div>
    </div>

    <script>
      // Burger menus
      document.addEventListener("DOMContentLoaded", function () {
        // open
        const burger = document.querySelectorAll(".navbar-burger");
        const menu = document.querySelectorAll(".navbar-menu");

        if (burger.length && menu.length) {
          for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }

        // close
        const close = document.querySelectorAll(".navbar-close");
        const backdrop = document.querySelectorAll(".navbar-backdrop");

        if (close.length) {
          for (var i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }

        if (backdrop.length) {
          for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }
      });
    </script>

    <!-- about us section -->
    <div class="max-w-7xl mx-auto px-4 py-20">
      <h1 class="text-3xl text-center py-4 font-bold">About Us</h1>
      <div class="md:flex items-center justify-center grid-cols-1 md:grid-cols-2 gap-10">
        <div>
          <h1 class="py-4 text-xl font-medium">Who are we?</h1>
          <p class="max-w-xl">
            We are mental health supporting website dedicated to providing
            comprehensive support and resources for individuals seeking to
            improve their emotional well-being. Through the different approaches
            MHs offers a range of services, psychiatric consultants, stress
            management programs.
          </p>
        </div>
        <div>
          <img class="w-96" src="https://cdn.pixabay.com/photo/2021/11/20/03/17/doctor-6810751_1280.png" alt="">
        </div>
      </div>
    </div>


    <!-- {/* services */} -->
    <div id="service" class="px-2 py-20 max-w-7xl mx-auto md:px-6 md:py-10">
      <h1
        class="pb-4 pt-20 text-center text-2xl font-bold capitalize text-black lg:text-3xl"
      >
        What services do we offer?
      </h1>

      <hr />
      <div
        class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-12 xl:grid-cols-3 xl:gap-16"
      >
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/bubbles/100/stethoscope.png"
              alt="stethoscope"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Counselling
          </h1>
          <p class="text-sm text-gray-500">
            Explore personal challenges and achieve emotional growth with our
            one-on-one therapy sessions.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/bubbles/100/medical-doctor.png"
              alt="medical-doctor"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Talk to Doctor
          </h1>
          <p class="text-sm text-gray-500">
            Get expert medical advice and support for your health concerns with
            a convenient consultation with a doctor.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/clouds/100/brain.png"
              alt="brain"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Mental Health Advice
          </h1>
          <p class="text-sm text-gray-500">
            Receive personalized guidance and strategies to enhance your mental
            well-being and cope with life's challenges.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/bubbles/100/user-group-woman-woman.png"
              alt="user-group-woman-woman"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Depression and anxiety support groups
          </h1>
          <p class="text-sm text-gray-500">
            Connect with others in a safe space to share experiences, gain
            support, and develop coping strategies for managing depression and
            anxiety.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/bubbles/100/controller.png"
              alt="controller"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Stress management program
          </h1>
          <p class="text-sm text-gray-500">
            Learn effective stress reduction techniques and enhance your
            resilience through interactive games on our platform.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
        <div class="space-y-3 text-center sm:text-left">
          <span class="inline-block rounded-full bg-gray-100 p-3 text-black">
            <img
              width="100"
              height="100"
              src="https://img.icons8.com/bubbles/100/literature.png"
              alt="literature"
            />
          </span>
          <h1 class="text-xl font-semibold capitalize text-black">
            Mental health assesment
          </h1>
          <p class="text-sm text-gray-500">
            Gain insights into your mental well-being with our comprehensive
            assessment and personalized feedback.
          </p>
          <a
            href="#"
            class="-mx-1 inline-flex transform items-center text-sm font-semibold capitalize text-black transition-colors duration-300 hover:underline"
          >
            <span class="mx-1">read more</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-arrow-right"
            >
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </div>


    <!-- */} {/* footer */} -->
    <footer class="pt-20 w-full">
      <div
        class="mx-auto flex max-w-6xl flex-col items-start space-x-8 md:flex-row"
      >
        <div class="w-full px-4 md:w-1/2 lg:px-0">
          <h1 class="max-w-sm text-3xl font-bold">
            Subscribe to our Newsletter
          </h1>
          <form action="" class="mt-4 inline-flex w-full items-center md:w-3/4">
            <input
              class="flex h-10 w-full rounded-md border border-black/20 bg-transparent px-3 py-2 text-sm placeholder:text-gray-600 focus:outline-none focus:ring-1 focus:ring-black/30 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
              type="email"
              placeholder="Email"
            />
            <button
              type="button"
              class="ml-4 rounded-full bg-black px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="h-4 w-4"
              >
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </form>
        </div>
        <div
          class="mt-8 grid grid-cols-2 gap-6 md:mt-0 lg:w-3/4 lg:grid-cols-2"
        >
          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">
              About Company
            </p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <p class="font-normal">
                Mental Health Support is a mental health supporting website
                dedicated to providing comprehensive support and resources for
                individuals with mental health challenges.
              </p>
            </ul>
          </div>

          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">
              Usefull Links
            </p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <li>Home</li>
              <li>About us</li>
              <li>Services</li>
              <li>Doctors</li>
              <li>Contacts</li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-4" />
      <div
        class="mx-auto max-w-6xl items-center justify-between px-4 md:flex lg:px-0"
      >
        <div class="inline-flex items-center">
          <img class="h-8" src="./assets/logo.jpg" alt="" />
        </div>
        <div class="mt-4 md:mt-0">
          <p class="text-sm font-medium text-gray-500">
            © 2024 MHS. All rights reserved.
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
