<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Toko batik</title>
  </head>
  <body>
                <header>
                <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand">Shooping</a>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                </nav>

               <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#arrival">Arrival</a>
                        </li>
                       
                        <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    <li class="nav-item">
                        <a class="nav-link" href="login1.php">Login</a>
                        </li>
                    </span>
                    </div>
                </div>
                </nav>

                <section class="home" id="home">

             <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Toko batik</h1>
                <p class="lead">selamat datang</p>
            </div>
            </div>
</section>
<section class="arrival" id="arrival">

            <div class="w3-container ">
            <h2>New arrival</h2>
            </div>
            <br>

            <div class="w3-row-padding">
            <div class="w3-third">
                <img src="img/img2.jpg" alt="">
                <h2>Batik Jawa</h2>
                <h4>Rp.25.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>


               
            </div>

            <div class="w3-third">
                <img src="img/img3.jpg" alt="">
                <h2>Batik Bali</h2>
                <h4>Rp.56.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>

               
            </div>
            <div class="w3-third">
                <img src="img/img6.jpg" alt="">
                <h2>Batik Jogja</h2>
                <h4>Rp.60.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>

            </div>
            <div class="w3-third">
                <img src="img/img7.jpg" alt="">
                <h2>Batik lasem</h2>
                <h4>Rp.30.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>

               
            </div>
            <div class="w3-third">
                <img src="img/img7.jpg" alt="">
                <h2>Batik Kawung</h2>
                <h4>Rp.70.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>

            </div>
            <div class="w3-third">
                <img src="img/img8.jpg" alt="">
                <h2>Batik Bali</h2>
                <h4>Rp.80.00</h4>
                <button type="button" class="btn btn-success" ><a href="login1.php"></a> Beli</button>

            </div>
            </div>
 </section>
 <section class="gallery" id="gallery">
           
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>


<!-- MAIN (Center website) -->
<div class="main">

<h2>Product galery</h2>

<div id="myBtnContainer">
  <button class="btn active" style="background-color:blue;" onclick="filterSelection('all')"> Show all</button>
  <button class="btn"  style="background-color:blue;" onclick="filterSelection('nature')"> batik jawa</button>
  <button class="btn"  style="background-color:blue;" onclick="filterSelection('cars')"> batik bali</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
    <img src="img/img1.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/img2.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/img3.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
    <img src="img/img3.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/img7.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/img8.jpg" alt="Car" style="width:100%">
      <h4>batik</h4>
      <p>Rp.12.000</p>
    </div>
  </div>

 
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>

</section>
<br>
<section class="about" id="about">

<div class="container1">
    <h3>About</h3>
    <br>

  <div class="row">
    <div class="col">
    <img src="img/img1.jpg" alt="">

    <h5>Batik adalah kerajinan yang memiliki nilai seni tinggi dan telah menjadi bagian dari budaya Indonesia (khususnya Jawa) sejak lama. </h5>

    </div>
    <div class="col">
    <img src="img/img2.jpg" alt="">
    <h5>Ragam corak dan warna Batik dipengaruhi oleh berbagai pengaruh asing. Awalnya, batik memiliki ragam corak dan warna yang terbatas, dan beberapa corak hanya boleh dipakai oleh kalangan tertentu</h5>

     
    </div>
    <div class="col">
    <img src="img/img3.jpg" alt="">
    <h5>Batik merupakan warisan nenek moyang Indonesia ( Jawa ) yang sampai saat ini masih ada..</h5>

     
    </div>
  </div>
</div>

</section >



   <div class="footer">
       <h5>copyright@dyan12021</h5>
   </div>



   </header>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>