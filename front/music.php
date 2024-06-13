<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .card {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
      }

      .cart-box,
      .message {
        background-color: #fff;
        padding: 20px;
        border: 2px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .hidden {
        display: none;
      }

      .message {
        border-color: #d6e9c6;
        display: none;
      }

      .timer {
        margin-top: 10px;
        font-size: 18px;
        color: #333;
      }
    </style>
  </head>
  <body>
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
          href="../register.php?scores=0"
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
                href="../register.php?scores=0"
                >Sign Up</a
              >
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- card -->
    <div class="card">
      <div class="cart-box" id="cartBox">
        <img src="./assets/music.gif" alt="" class="" />
        <audio autoplay>
          <source src="./assets/please.mp3" />
        </audio>
        <!-- <div class="timer" id="timer">Time remaining: 01:00</div> -->
      </div>
      <div class="message" id="message">
        <img class="w-20 mx-auto" src="./assets/tick.gif" alt="" />
        <p>Thank you for doing exercise with us!</p>
        <div class="flex items-center space-x-2 justify-center">
          <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
            <a
              href="/index.html"
              class="px-3 py-2 bg-blue-600 rounded text-white"
              >Home</a
            >
          </p>
          <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
            <a
              href="/yoga.html"
              class="px-3 py-2 bg-blue-600 rounded text-white"
              >Play agian</a
            >
          </p>
        </div>
      </div>
    </div>

    <!-- footer -->

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
          class="mt-8 grid grid-cols-2 gap-6 md:mt-0 lg:w-3/4 lg:grid-cols-3"
        >
          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">Company</p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <li>About us</li>
              <li>Company History</li>
              <li>Our Team</li>
              <li>Our Vision</li>
              <li>Press Release</li>
            </ul>
          </div>
          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">Company</p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <li>About us</li>
              <li>Company History</li>
              <li>Our Team</li>
              <li>Our Vision</li>
              <li>Press Release</li>
            </ul>
          </div>
          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">Company</p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <li>About us</li>
              <li>Company History</li>
              <li>Our Team</li>
              <li>Our Vision</li>
              <li>Press Release</li>
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

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const cartBox = document.getElementById("cartBox");
        const message = document.getElementById("message");
        const timerElement = document.getElementById("timer");
        let timeLeft = 175; // 60 seconds for the countdown

        const countdown = setInterval(() => {
          timeLeft--;
          // Format time as MM:SS
          const minutes = String(Math.floor(timeLeft / 60)).padStart(2, "0");
          const seconds = String(timeLeft % 60).padStart(2, "0");
          timerElement.textContent = `Time remaining: ${minutes}:${seconds}`;

          if (timeLeft <= 0) {
            clearInterval(countdown);
            cartBox.classList.add("hidden");
            message.style.display = "block";
          }
        }, 1000); // Update every second
      });
    </script>
  </body>
</html>
