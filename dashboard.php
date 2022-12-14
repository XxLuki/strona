<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: index.php");	exit();
}

if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    header("location: index.php");	exit();
}

//$files = glob("./pytania/*.json");
//$kurs = $_GET['file'];
//var_dump($_GET);
//if ($kurs) {
//   error_reporting(E_ALL);
//    display_errors(1);
//   $questions = json_decode(file_get_contents("./pytania/$kurs"), true);
//    var_dump(json_last_error_msg(),$questions);
//    var_dump($questions["Program, który umożliwia komunikację między kartą sieciową a systemem operacyjnym, to"]);
//}
//var_dump($files); exit();
//foreach ($files as $file) {
//    printf("<a href='?file=".basename($file)."'>".basename($file)."</a>");
//basename($file);
//}
//var_dump($_SESSION);
//$answers = json_decode(file_get_contents("./answ/$"), true);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akap.it</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="/style.css" rel="stylesheet">
  <style>
    body {
    background-color: rgb(24, 24, 24);
    height: 100vh;
}

.pytanie,
.odpowiedz,
.przyciski,
.ustawienia,
.navbar,
.row {
    background-color: rgb(64, 64, 64);
    color: #fff;
}

.pytanie,
.navbar-brand,
.nav-link {
    color: white;
}

.bi {
    color: white;
}

.row {
    margin-left: -12px;
}

.przycisk,
.progress {
    padding: 0px;
}

.pytanie {
    padding-top: 0.5rem;
}

.przycisk_tak:hover {
    background-color: greenyellow;
}

.przycisk_nie:hover {
    background-color: red;
}
.text-center{
    font-size: 1.5rem;
}
@media screen and (max-width: 993px) {
    .text-center{
        font-size: 1.3rem;
    }
    .container-lg{
      border-radius: 0;
    }
    
}
  </style>
</head>

<body class="bg-dark d-md-flex align-items-center">
  </div>
  <div style="height:100vh;" class="container-lg block rounded-4 border overflow-hidden  mx-auto">
    <div class="row border-bottom ">
      <div style="height: 10%;" class="col--12">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Akap.it</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;"
          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div>
    </div>
    <div style="height: 35%" class="pytanie row justify-content-center">
      <div id="pytanie" class="col-sm-7 col-sm-12 text-center ">
      </div>

    </div>
    <div style="height: 40%;" class="odpowiedz row justify-content-center border-bottom border-white">
      <div class="col-10 text-center">
        HTTP, ICMP, IP
      </div>
    </div>
    <div style="height: 20%;" class="przyciski row justify-content-center allign-middle ">
      <div class="przycisk_tak przycisk col-6 text-center align-middle">
        <button class="btn h-100 w-100" type="button"><i class="bi bi-check-lg"></i></button>
      </div>
      <div class="przycisk_nie przycisk col-6 text-center align-text-middle">
        <button class="btn h-100 w-100" type="button"><i class="bi bi-x-lg"></i></button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

<script>
//    let pytanie = []
//    let odp = []
//    fetch("./pytania/inf02.json")
//    .then(function (pytanie)) {
//        for(let i = 0; i  < pytanie.lenght; i++) {
//            document.getElementByID(pytanie).innerText +=
//            pytanie[i].x
//        }
//    }
//    document.body.innerText=odpowiedz;
    
fetch("./pytania/inf02.json")
.then(response => {
   return response.json();
})
.then(jsondata => console.log(jsondata));



document.getElementById(pytanie).innerText


<script>
<script>

<script>
</html>