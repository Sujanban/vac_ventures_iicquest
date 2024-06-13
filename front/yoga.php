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

    <!-- card -->
    <div class="card">
      <div class="cart-box" id="cartBox">
        <img src="./assets/yoga.gif" alt="">
        <div class="timer" id="timer">Time remaining: 01:00</div>
      </div>
      <div class="message" id="message">
        <img class="w-20 mx-auto " src="./assets/tick.gif" alt="">
        <p>Thank you for doing exercise with us!</p>
        <div class="flex items-center space-x-2 justify-center">
            <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                <a href="/index.html" class="px-3 py-2 bg-blue-600 rounded text-white">Home</a>
              </p>
            <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                <a href="/yoga.html" class="px-3 py-2 bg-blue-600 rounded text-white">Play agian</a>
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
          <svg
            width="40"
            height="46"
            viewBox="0 0 50 56"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M23.2732 0.2528C20.8078 1.18964 2.12023 12.2346 1.08477 13.3686C0 14.552 0 14.7493 0 27.7665C0 39.6496 0.0986153 41.1289 0.83823 42.0164C2.12023 43.5449 23.2239 55.4774 24.6538 55.5267C25.9358 55.576 46.1027 44.3832 48.2229 42.4602C49.3077 41.474 49.3077 41.3261 49.3077 27.8158C49.3077 14.3055 49.3077 14.1576 48.2229 13.1714C46.6451 11.7415 27.1192 0.450027 25.64 0.104874C24.9497 -0.0923538 23.9142 0.00625992 23.2732 0.2528ZM20.2161 21.8989C20.2161 22.4906 18.9835 23.8219 17.0111 25.3997C15.2361 26.7803 13.8061 27.9637 13.8061 28.0623C13.8061 28.1116 15.2361 29.0978 16.9618 30.2319C18.6876 31.3659 20.2655 32.6479 20.4134 33.0917C20.8078 34.0286 19.871 35.2119 18.8355 35.2119C17.8001 35.2119 9.0233 29.3936 8.67815 28.5061C8.333 27.6186 9.36846 26.5338 14.3485 22.885C17.6521 20.4196 18.4904 20.0252 19.2793 20.4196C19.7724 20.7155 20.2161 21.3565 20.2161 21.8989ZM25.6893 27.6679C23.4211 34.9161 23.0267 35.7543 22.1391 34.8668C21.7447 34.4723 22.1391 32.6479 23.6677 27.9637C26.2317 20.321 26.5275 19.6307 27.2671 20.3703C27.6123 20.7155 27.1685 22.7864 25.6893 27.6679ZM36.0932 23.2302C40.6788 26.2379 41.3198 27.0269 40.3337 28.1609C39.1503 29.5909 31.6555 35.2119 30.9159 35.2119C29.9298 35.2119 28.9436 33.8806 29.2394 33.0424C29.3874 32.6479 30.9652 31.218 32.7403 29.8867L35.9946 27.4706L32.5431 25.1532C30.6201 23.9205 29.0915 22.7371 29.0915 22.5892C29.0915 21.7509 30.2256 20.4196 30.9159 20.4196C31.3597 20.4196 33.6771 21.7016 36.0932 23.2302Z"
              fill="black"
            ></path>
          </svg>
          <span class="ml-4 text-lg font-bold">DevUI</span>
        </div>
        <div class="mt-4 md:mt-0">
          <p class="text-sm font-medium text-gray-500">
            © 2023 DevUI. All rights reserved.
          </p>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const cartBox = document.getElementById("cartBox");
        const message = document.getElementById("message");
        const timerElement = document.getElementById("timer");
        let timeLeft = 600; // 60 seconds for the countdown

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
