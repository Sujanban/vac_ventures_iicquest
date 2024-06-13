<?php session_start(); ?>
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
    <?php include 'nav.php'; ?>

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

    <div id="home" class="banner-image relative">
      <div class="h-[60vh] py-40 max-w-7xl mx-auto">
        <div class="flex items-center jsustify-center h-full">
          <div class="p-4 md:px-20 text-left">
            <h1 class="text-4xl py-2 text-white">You deserve to be happy.</h1>
            <p class="py-2 text-xl text-white">
              What type of therapy are you looking for?
            </p>

            <div class="py-4">
              <a
                href="./getStarted.php"
                class="px-6 py-3 rounded-full bg-green-600 text-white"
                >How is my mental health?</a
              >
            </div>
          </div>
        </div>
      </div>
      <div
        class="hidden md:absolute md:block -bottom-10 right-[50%] translate-x-[50%]"
      >
        <div class="grid grid-cols-3 gap-4 w-[1024px] text-white">
          <div
            class="stats1 bg-white rounded shadow shadow-xl p-4 flex items-center justify-center"
          >
            <div>
              <h1 class="font-medium text-xl">Doctor</h1>
              <p class="text-3xl">12+</p>
            </div>
          </div>
          <div
            class="stats2 bg-white rounded shadow shadow-xl p-4 flex items-center justify-center"
          >
            <div>
              <h1 class="font-medium text-xl">Impact</h1>
              <p class="text-3xl">1200+</p>
            </div>
          </div>
          <div
            class="stats3 bg-white rounded shadow shadow-xl p-4 flex items-center justify-center"
          >
            <div>
              <h1 class="font-medium text-xl">User</h1>
              <p class="text-3xl">102+</p>
            </div>
          </div>
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

    <!-- {/* advertisement */} -->
    <div class="banner-ads">
      <div class="h-[90vhk] md:py-32 max-w-7xl mx-auto">
        <div class="h-full">
          <div class="flex items-center justify-between">
            <div class="text-white">
              <!-- <h1 class="text-3xl py-2">You deserve to be happy.</h1>
              <p class="py-2">What type of therapy are you looking for?</p> -->
            </div>
            <div class="py-4">
              <a
                href=""
                class="text-xs px-2 py-1 mr-1 md:mr-0 md:px-10 md:py-3 rounded-2xl bg-white text-green-600"
                >Visit</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="about" class="bg-white py-24 sm:py-32">
      <div
        class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3"
      >
        <div class="max-w-2xl">
          <h2
            class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
          >
            Quick Actions
          </h2>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            Find out the quick actions that you can do to control your stress,
            anxiety and depression level.
          </p>
        </div>
        <ul
          role="list"
          class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2"
        >
          <li>
            <div class="flex items-center gap-x-6">
              <img
                width="100"
                height="100"
                src="https://img.icons8.com/clouds/100/lungs.png"
                alt="lungs"
              />
              <div>
                <h3
                  class="text-base font-semibold leading-7 tracking-tight text-gray-900"
                >
                  Quick Inhale Challenge
                </h3>
                <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                  <a
                    href="./inhale.php"
                    class="px-3 py-2 bg-blue-600 rounded text-white"
                    >Play now</a
                  >
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img width="64" height="64" src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/external-yoga-morning-flaticons-flat-flat-icons.png" alt="external-yoga-morning-flaticons-flat-flat-icons"/>
              <div>
                <h3
                  class="text-base font-semibold leading-7 tracking-tight text-gray-900"
                >
                  Quick Yoga challange
                </h3>
                <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                  <a
                    href="./yoga.php"
                    class="px-3 py-2 bg-blue-600 rounded text-white"
                    >Play now</a
                  >
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img
                width="100"
                height="100"
                src="https://img.icons8.com/clouds/100/exercise.png"
                alt="exercise"
              />
              <div>
                <h3
                  class="text-base font-semibold leading-7 tracking-tight text-gray-900"
                >
                  Quick Excerise Challange
                </h3>
                <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                  <a
                    href="./exercise.php"
                    class="px-3 py-2 bg-blue-600 rounded text-white"
                    >Play now</a
                  >
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img
                width="100"
                height="100"
                src="https://img.icons8.com/clouds/100/apple-music.png"
                alt="apple-music"
              />
              <div>
                <h3
                  class="text-base font-semibold leading-7 tracking-tight text-gray-900"
                >
                  Relaxing Music
                </h3>
                <p class="py-4 text-sm font-semibold leading-6 text-indigo-600">
                  <a
                    href="./music.php"
                    class="px-3 py-2 bg-blue-600 rounded text-white"
                    >Play now</a
                  >
                </p>
              </div>
            </div>
          </li>

          <!-- More people... -->
        </ul>
      </div>
    </div>

    <!-- {/* doctors */} -->
    <div id="doctor" class="max-w-7xl mx-auto py-20 px-2">
      <h1 class="pb-10 text-3xl font-semibold text-center">
        Our featured Therapist
      </h1>
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 m-auto">
        <div class="relative h-[400px] w-[300px] m-auto rounded-md">
          <img
            src="./assets/1.png"
            alt="AirMax Pro"
            class="z-0 h-full w-full rounded-md object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"
          ></div>
          <div class="absolute bottom-4 left-4 text-left">
            <h1 class="text-lg font-semibold text-white">Dr. Mohan Adhikari</h1>
            <p class="mt-2 text-sm text-gray-300">
              I will support you to manage your stress level in efficient and
              effective manner.
            </p>
            <button
              class="mt-2 inline-flex cursor-pointer items-center text-sm font-semibold text-white"
            >
              View Profile →
            </button>
          </div>
        </div>
        <div class="relative h-[400px] w-[300px] m-auto rounded-md">
          <img
            src="./assets/2.png"
            alt="AirMax Pro"
            class="z-0 h-full w-full rounded-md object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"
          ></div>
          <div class="absolute bottom-4 left-4 text-left">
            <h1 class="text-lg font-semibold text-white">Dr. Diya Khadka</h1>
            <p class="mt-2 text-sm text-gray-300">
              I will support you to manage your anxiety level in efficient and
              effective manner.
            </p>
            <button
              class="mt-2 inline-flex cursor-pointer items-center text-sm font-semibold text-white"
            >
              View Profile →
            </button>
          </div>
        </div>

        <div class="relative h-[400px] w-[300px] m-auto rounded-md">
          <img
            src="./assets/3.png"
            alt="AirMax Pro"
            class="z-0 h-full w-full rounded-md object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"
          ></div>
          <div class="absolute bottom-4 left-4 text-left">
            <h1 class="text-lg font-semibold text-white">Dr. Raj Shah</h1>
            <p class="mt-2 text-sm text-gray-300">
              I will support you to manage your Depression level in efficient
              and effective manner.
            </p>
            <button
              class="mt-2 inline-flex cursor-pointer items-center text-sm font-semibold text-white"
            >
              View Profile →
            </button>
          </div>
        </div>

        <div class="relative h-[400px] w-[300px] m-auto rounded-md">
          <img
            src="./assets/4.png"
            alt="AirMax Pro"
            class="z-0 h-full w-full rounded-md object-cover"
          />
          <div
            class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"
          ></div>
          <div class="absolute bottom-4 left-4 text-left">
            <h1 class="text-lg font-semibold text-white">Dr. Riya Poudel</h1>
            <p class="mt-2 text-sm text-gray-300">
              I am the one who can manage your stress and anxiety level in
              efficient and effective manner.
            </p>
            <button
              class="mt-2 inline-flex cursor-pointer items-center text-sm font-semibold text-white"
            >
              View Profile →
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- {/* FAQ */} -->
    <section id="contact" class="py-20 bg-slate-100">
      <div class="mx-auto max-w-7xl px-2 py-10 md:px-0">
        <div class="mx-auto max-w-23xl lg:text-center">
          <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">
            Frequently Asked Questions
          </h2>
          <p
            class="mt-4 max-w-xl text-base leading-relaxed text-gray-600 lg:mx-auto"
          >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere,
            assumenda
          </p>
        </div>
        <div
          class="mx-auto mt-8 grid max-w-333xl grid-cols-1 gap-6 md:mt-16 md:grid-cols-2"
        >
          <div>
            <h2 class="text-xl font-semibold text-black">
              What should I expect during my first counseling session?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              During your first counseling session, you will discuss your
              concerns and goals with your counselor, who will then outline a
              personalized plan for your therapy.
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              How can I join a support group for depression and anxiety?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              You can join a support group for depression and anxiety by signing
              up through our platform; we’ll provide you with the schedule and
              access details after registration.
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              Are the stress management games suitable for all age groups?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Yes, our stress management games are designed to be engaging and
              effective for a wide range of age groups, promoting relaxation and
              resilience.
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              Is the mental health assessment confidential and how are my
              results used?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Yes, your mental health assessment is completely confidential;
              your results are used solely to provide you with personalized
              feedback and recommendations for improving your well-being.
            </p>
          </div>
        </div>
        <p class="mt-10 text-center text-gray-600">
          Can&#x27;t find what you&#x27;re looking for?{" "}
          <a
            href="mailto:help@mhs.com"
            title=""
            class="black font-semibold hover:underline  px-4 py-2 rounded bg-blue-600 text-white"
          >
            Contact us
          </a>
        </p>
      </div>
    </section>

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
              <a href="../regtwo.php" class="px-3 py-2 bg-blue-600 text-white w-2/4"><i class="fa-solid fa-user-lock mr-2"></i>Register doctor</a>
            </ul>
          </div>

          <div class="mb-8 lg:mb-0">
            <p class="mb-6 text-lg font-semibold text-gray-700">
              Useful Links
            </p>
            <ul
              class="flex flex-col space-y-4 text-[14px] font-medium text-gray-500"
            >
              <li><a href="./index.php">Home</a></li>
              <li><a href="./about.php">About us</a></li>
              <li><a href="./index.php#service">Services</a></li>
              <li><a href="./index.php#doctor">Doctors</a></li>
              <li><a href="./index.php#contact">Contracts</a></li>
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
