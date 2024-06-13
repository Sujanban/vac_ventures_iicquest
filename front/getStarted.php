<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .card {
        background-color: #fff;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 40px;
        /* padding: 40px; */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 500px;
        width: 100%;
      }

      h2 {
        color: #333;
      }

      form {
        margin: 20px 0;
      }

      .form-step {
        display: none;
      }

      .form-step.active {
        display: block;
      }

      .form-step p {
        margin-bottom: 20px;
      }

      .answers {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-left: 20px;
      }

      .answers label {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
      }

      .answers input[type="radio"] {
        margin-right: 10px;
        transform: scale(1.2);
      }

      .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
      }

      .buttons button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }

      .buttons button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
      }

      .analysis-section {
        margin-top: 20px;
      }

      canvas {
        margin-top: 20px;
      }

      .final-results {
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: bold;
        color: #007bff;
      }

      .score-message {
        margin-top: 20px;
        font-size: 16px;
        color: #333;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    <div class="body">
      <div class="card relative">
        <img class="w-32 mx-auto" src="./assets/quiz_logo.png" alt="" />
        <h2 class="pt- font-bold text-xl">MHS Quiz</h2>
        <form id="form">
          <div class="form-step active">
            <p>Gender?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q1" value="1" />
                Male
              </label>
              <label>
                <input type="radio" name="q1" value="1" />
                Female
              </label>
              <label>
                <input type="radio" name="q1" value="2" />
                Others
              </label>
            </div>
          </div>
          <div class="form-step">
            <p>Are you feeling down?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q2" value="2" />
                Yes
              </label>
              <label>
                <input type="radio" name="q2" value="0" />
                No
              </label>
              <label>
                <input type="radio" name="q2" value="1" />
                Maybe
              </label>
            </div>
          </div>
          <div class="form-step"> 
            <p>
              Have you experianced any weight loss and weight gain recently?
            </p>
            <div class="answers">
              <label>
                <input type="radio" name="q3" value="2" />
                Yes
              </label>
              <label>
                <input type="radio" name="q3" value="0" />
                No
              </label>
              <label>
                <input type="radio" name="q3" value="1" />
                Maybe
              </label>
            </div>
          </div>
          <div class="form-step">
            <p>
              Are you loosing interest in anythings that you normally enjoy?
            </p>
            <div class="answers">
              <label>
                <input type="radio" name="q4" value="2" />
                Yes
              </label>
              <label>
                <input type="radio" name="q4" value="0" />
                No
              </label>
              <label>
                <input type="radio" name="q4" value="1" />
                Maybe
              </label>
            </div>
          </div>
          <div class="form-step">
            <p>Are you feeling fine at night?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q5" value="0">
                Yes
            </label>
            <label>
                <input type="radio" name="q5" value="2">
                No
            </label>
            <label>
                <input type="radio" name="q5" value="1">
                Maybe
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>Do you feel fatigue or loss of energy?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q6" value="2">
                Yes
            </label>
            <label>
                <input type="radio" name="q6" value="0">
                No
            </label>
            <label>
                <input type="radio" name="q6" value="1">
                Maybe
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>Are you finding difficulties in concentration?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q7" value="2">
                Yes
            </label>
            <label>
                <input type="radio" name="q7" value="0">
                No
            </label>
            <label>
                <input type="radio" name="q7" value="1">
                Maybe
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>Have you ever been to therapy?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q8" value="2">
                Yes
            </label>
            <label>
                <input type="radio" name="q8" value="0">
                No
            </label>
            <label>
                <input type="radio" name="q8" value="1">
                Maybe
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>When was the last time you thought about suicide?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q9" value="3">
                Last Month
            </label>
            <label>
                <input type="radio" name="q9" value="1">
                Last Year
            </label>
            <label>
                <input type="radio" name="q9" value="1">
                Year ago
            </label>
            <label>
                <input type="radio" name="q9" value="0">
                Never
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>Are you currently experiancing mental health issues?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q10" value="3">
                Yes
            </label>
            <label>
                <input type="radio" name="q10" value="0">
                No
            </label>
            <label>
                <input type="radio" name="q10" value="1">
                Maybe
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>How will you explain your financial suitation?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q11" value="0">
                Excellent
            </label>
            <label>
                <input type="radio" name="q11" value="0.5">
                Good
            </label>
            <label>
                <input type="radio" name="q11" value="1">
                Fair
            </label>
            <label>
                <input type="radio" name="q11" value="2">
                Poor
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>How is your relationship with your parents?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q12" value="3">
                Very Bad
            </label>
            <label>
                <input type="radio" name="q12" value="0">
                Good
            </label>
            <label>
                <input type="radio" name="q12" value="0">
                Normal
            </label>
            </div>
          </div>
          <div class="form-step">
            <p>How will your rate your current sleeping habit?</p>
            <div class="answers">
              <label>
                <input type="radio" name="q13" value="0">
                Good
            </label>
            <label>
                <input type="radio" name="q13" value="1">
                Fair
            </label>
            <label>
                <input type="radio" name="q13" value="2">
                Poor
            </label>
            </div>
          </div>

          <div class="form-step">
            <div>
              <div class="final-results">Final Results</div>
              <p id="resultMessage" class="score-message"></p>
            </div>
            <div class="analysis-section">
              <canvas class="" id="myChart" width="300" height="300"></canvas>
            </div>
            <div class="p-4">
              <?php $data = '<script> document.write(score); </script>'; ?>
              <?= $score ?>
              <a class="px-3 py-2 rounded bg-green-600 text-white" href=""
                >View Report</a
              >
            </div>
          </div>
          <div></div>
        </form>
        <div class="buttons">
          <button id="prevBtn" onclick="changeStep(-1)" disabled>
            Previous
          </button>
          <button id="nextBtn" onclick="changeStep(1)">Next</button>
        </div>
      </div>
    </div>

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
      let currentStep = 0;
      const formSteps = document.querySelectorAll(".form-step");

      function showStep(step) {
        formSteps.forEach((formStep, index) => {
          formStep.classList.toggle("active", index === step);
        });

        document.getElementById("prevBtn").disabled = step === 0;
        if (step === formSteps.length - 2) {
          document.getElementById("nextBtn").innerText = "Submit";
        } else if (step === formSteps.length - 1) {
          document.getElementById("prevBtn").style.display = "none";
          document.getElementById("nextBtn").style.display = "none";
        } else {
          document.getElementById("nextBtn").innerText = "Next";
          document.getElementById("prevBtn").style.display = "inline-block";
          document.getElementById("nextBtn").style.display = "inline-block";
        }
      }

      function changeStep(direction) {
        if (direction === 1 && !validateStep()) {
          alert("Please answer all mandatory questions.");
          return;
        }

        if (direction === 1 && currentStep === formSteps.length - 2) {
          calculateScore();
          return;
        }

        currentStep += direction;
        showStep(currentStep);
      }

      function validateStep() {
        const currentInputs = formSteps[currentStep].querySelectorAll(
          "input[type='radio']"
        );
        return Array.from(currentInputs).some((input) => input.checked);
      }

      function calculateScore() {
        let score = 0;
        const formData = new FormData(document.getElementById("form"));

        for (let [key, value] of formData.entries()) {
          score += parseInt(value, 10);
        }

        const url = `../register.php?scores=${score}`;
        window.location.href = url;

        displayResult(score);
        currentStep++;
        showStep(currentStep);
      }




      function displayResult(score) {
        let message = "";
        if (score < 7) {
          message = "You are perfectly fine.";
        } else if (score <= 12) {
          message = "You might be in Mild Depression.";
        } else if (score > 20) {
          message = "You might be in Moderate Depression.";
        } else {
          // message = "";
          message = "You might be in Severe Depression.";
        }
        document.getElementById(
          "resultMessage"
        ).innerText = `Your total score is: ${score}. ${message}`;
        renderChart(score);
      }

      function renderChart(score) {
        const ctx = document.getElementById("myChart").getContext("2d");
        const data = {
          labels: ["Score"],
          datasets: [
            {
              label: "Score Analysis",
              data: [score, 29 - score], // Assuming the maximum possible score is 18
              backgroundColor: ["#007BFF", "#FF5733"], // Blue for score, Red for remaining
            },
          ],
        };
        new Chart(ctx, {
          type: "pie",
          data: data,
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: "top",
              },
            },
          },
        });
      }

      showStep(currentStep);

      function datas() {
        return score;
      }
    </script>



  </body>
</html>
