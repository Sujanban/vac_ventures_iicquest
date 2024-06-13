<?php
session_start();
include '../functions.php';
if (!isset($_SESSION["sessionuser"])) {
	?> <script> location.replace("../login.php"); </script> <?php
}

$uid = $_GET['id'];

$userdataqry = " SELECT * FROM data WHERE UID='$uid' ";
    $userdataqry_ex = mysqli_query($con, $userdataqry);
    $userdataqry_fetch = mysqli_fetch_array($userdataqry_ex);

    $usercode = $userdataqry_fetch['Code'];

    $userdataqry1 = " SELECT * FROM users WHERE Code='$usercode' ";
    $userdataqry1_ex = mysqli_query($con, $userdataqry1);
    $userdataqry1_fetch = mysqli_fetch_array($userdataqry1_ex);


    if ($userdataqry_fetch['Data'] <= 13) {
      $status = "You are fine.";
      $stages = "---";
    }elseif ($userdataqry_fetch['Data'] >= 14 AND $userdataqry_fetch['Data'] <= 19) {
      $status = "You are in mild depression stages.";
      $stages = "Mild depression";
    }elseif ($userdataqry_fetch['Data'] >= 20 AND $userdataqry_fetch['Data'] <= 23) {
      $status = "You are in moderate depression stages.";
      $stages = "Moderarte depression";
    }elseif ($userdataqry_fetch['Data'] >= 24) {
      $status = "You are in severe depression stages.";
      $stages = "Severe depression";
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Medical Report</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      .report-container {
        background: url(./assets/logo.jpg) no-repeat;
        background-position: center;
        background-size: 200px;
        
        width: 80%;
        margin: 20px auto;
        /* background: white; */
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      header {
        text-align: center;
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
      }

      header h1 {
        margin: 0;
      }

      section {
        margin-bottom: 20px;
      }

      section h2 {
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
        margin-bottom: 10px;
      }

      .buttons {
        text-align: center;
        margin-top: 20px;
      }

      button {
        padding: 10px 20px;
        margin: 5px;
        border: none;
        background-color: #007bff;
        color: white;
        cursor: pointer;
      }

      button:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="report-container">
      <header>
        <h1 style="font-size: 18px; font-weight: 700;">MHS Report</h1>
        <p>Patient Name: <?php echo $userdataqry1_fetch['Name']; ?></p>
        <p>Date: <?php echo $userdataqry_fetch['Date']; ?></p>
      </header>
      <section class="patient-info">
        <h2>Results</h2>
        <p><strong>Score:</strong> <?php echo $userdataqry_fetch['Data']; ?> </p>
        <p><strong>Status:</strong> <?php echo $status; ?>  </p>
        <p><strong>Stage:</strong> <?php echo $stages; ?> </p>
      </section>
      <section class="medical-details">
        <h2>Suggestions</h2>
        <p>

<?php

if ($stages == "---") {
  ?>
  <div style="padding: 10px 0px;">
            <strong style="padding: 10px 2px;">Check out our Resources:</strong>
            <div>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/inhel.php">Inhale and Exhale Games</a></li>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/meditation.php">Attend Meditation session</a></li>
            </div>
          </div>
  <?php
}elseif ($stages == "Mild depression") {

  ?>

<strong>Do:</strong>
          <div>
            <li style="padding: 2px;">Engaging in activities like walking, yoga and Dancing</li>
            <li style="padding: 2px;">Practice deep breathing</li>
            <li style="padding: 2px;">Staying hydrated</li>
            <li style="padding: 2px;">Listen positive music.</li>
          </div>

          <div style="padding: 10px 0px;">
            <strong style="padding: 10px 2px;">Check out our Resources:</strong>
            <div>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/inhel.php">Inhale and Exhale Games</a></li>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/meditation.php">Attend Meditation session</a></li>
            </div>
          </div>

  <?php

}else{

?>

<strong>Do:</strong>
          <div>
            <li style="padding: 2px;">Engaging in activities like walking, yoga and Dancing</li>
            <li style="padding: 2px;">Practice deep breathing</li>
            <li style="padding: 2px;">Staying hydrated</li>
            <li style="padding: 2px;">Listen positive music.</li>
          </div>

          <div style="padding: 10px 0px;">
            <strong style="padding: 10px 2px;">Check out our Resources:</strong>
            <div>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/inhel.php">Inhale and Exhale Games</a></li>
                <li style="padding: 2px;"><a class="text-blue-500" href="../back/games/meditation.php">Attend Meditation session</a></li>
            </div>
          </div>

          <div style="padding: 10px 0px;">
            <strong style="padding: 10px 2px;">Most do:</strong>
            <div>
                <li style="padding: 2px;">Consult to any doctor without hegitation</li>
                <li style="padding: 2px;">Do the following tasks that are mentioned below</li>
            </div>
          </div>

<?php
  
}

?>

        </p>
        <p class="text-orange-400">
          <strong>*Notes:</strong> This report is automatically generated by system.*
        </p>
      </section>
      <!-- <section class="doctor-info">
        <h2>Doctor Information</h2>
        <p><strong>Name:</strong> Dr. Jane Smith</p>
        <p><strong>Specialty:</strong> Cardiologist</p>
        <p><strong>Contact:</strong> (987) 654-3210</p>
      </section> -->
      <div class="buttons text-sm">
        <button class="px-3 py-2 rounded bg-blue-600 text-white" onclick="window.print()">Print Report</button>
        <button class="px-3 py-2 rounded bg-blue-600 text-white"  onclick="downloadPDF()">Download PDF</button>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
      function downloadPDF() {
        const element = document.querySelector(".report-container");
        html2pdf().from(element).save("medical_report.pdf");
      }
    </script>
  </body>
</html>
