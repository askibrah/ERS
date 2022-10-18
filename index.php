<?php include('db.php');?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="tailwindcss/bootstrap.css">
  <link rel="stylesheet" href="tailwindcss/main.css">
  <!-- <link href="/dist/output.css" rel="stylesheet"> -->

  <title>KAAF ERS</title>
</head>

<body class="bg-gray-100">
  <!-- Image and text -->
  <nav class="navbar navbar-dark   sticky-top shadow-sm" style="background-color:#FF6D28">
    <div class="container" style="background-color:#FF6D28">
      <a class="navbar-brand" href="#">
        <div class="flex">
          <img src="./img/logo.png" width="55" height="55" class="d-inline-block align-top" alt="">
          <h1 class="text-md" style="color:#fff">KAAF UNIVERSITY COLLEGE<br>
            <span class="text-sm justify-center">
              <p>EXAMINATION RESHUFFLING SYSTEM (ERS)</p>
            </span>
          </h1>
        </div>
      </a>
      <div class="flex space-x-5 mr-10">
        <button class="btn bg- -500 text-white text-xs py-2 px-4  hover:bg-yellow-400 uppercase" type="submit">Reshuffle</button>
        <button class="btn bg- -500 text-white text-xs  py-2 px-4 hover:bg-yellow-400 uppercase" type="submit">Print</button>
      </div>
    </div>
  </nav>


  <!-- main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-3"> <!--Left Side div-->
        <div class="mt-3 border rounded bg-white p-4">
          <!-- Selecting Faculty Dropdown -->
          <select class="text-sm form-select appearance-none
            block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example">
            <option selected>Select Faculty</option>
            <option value="1">Engineering</option>
            <option value="2">Business Administration</option>
            <option value="3">Nursing and Midwifery</option>
            <option value="3">Allied Sciences</option>
            <option value="3">Law</option>
          </select><br>
          <!-- Selecting Department Dropdown -->
          <select class="form-select appearance-none
            block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example">
            <option >Select Programme</option>
            <option value="1">Bsc. Civil Engineering</option>
            <option value="2">Bsc. Geometic Engineering</option>
            <option value="3">Bsc. Construction Technology</option>
            <option value="3">Bsc. Electrical / Electronic Engineering</option>
            <option value="3">Bsc. Mechnical Engineering</option>
            <option value="3">Bsc. Computer Science</option>
            <option value="3">Bsc. Marketing</option>
            <option value="3">Bsc. Accounting</option>
            <option value="3">Bsc. Banking and Finance</option>
            <option value="3">Bsc. Human Resource Mgt</option>
            <option value="3">Bsc. Medical Laborartory</option>
            <option value="3">Bsc. Nursing</option>
            <option value="3">Bsc. Midwifery</option>
            <option value="3">Bsc. Community Health Nursing</option>
            <option value="3">Physician Assistantship</option>
            <option value="3">Public Health Nursing</option>
            <option value="3">4 Years LL.B</option>
            <option value="3">3 Years LL.B</option>
          </select><br>
          <!-- Selecting Level Dropdown -->
          <select class="form-select appearance-none
            block w-full px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example">
            <option selected>Select Level</option>
            <option value="1">100</option>
            <option value="2">200</option>
            <option value="3">300</option>
            <option value="3">400</option>
          </select><br>
          <!-- Next Button -->
          <button type="button"
            class="btn px-6 py-2.5 bg-gray-900 text-white 
          font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-700 
          hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out btn-sm btn-block w-full">next</button>
        </div>
        <!-- Contact Section -->
        <div class="mt-8 border rounded bg-white p-4 hidden text-sm">
          <div>
            <p class="text-red-600 font-semibold">Technical Support (24/7)</p>
            <p>(+233) 10 248 2354</p>
          </div>
          <div class="mt-4">
            <p class="text-red-600 font-semibold">All Other Questions(24/7)</p>
            <p>Send Email: </p>
            <p>info@..............edu.gh</p>
          </div>
        </div>
        <div class="mt-8 border rounded bg-white p-4 hidden md:block text-sm">
          <div>
            <p class="text-red-600 font-semibold">Technical Support (24/7)</p>
            <p>(+233) 10 248 2354</p>
          </div>
          <div class="mt-4">
            <p class="text-red-600 font-semibold">All Other Questions(24/7)</p>
            <p>Send Email: </p>
            <p>info@..............edu.gh</p>
          </div>
        </div>
      </div><!-- End of left side col -->

      <!-- Main Seating Section -->
      <div class="col-md-9 mt-3 mb-3 border rounded bg-white md:block grid grid-cols-3 responsive">
        <div class="row">
  
        <?PHP 
  $sql = "SELECT * FROM students ORDER BY rand()";

 
  $result =mysqli_query($con,$sql);
$i=0;
  $dyt ='<table border="0">';
  while ($row=mysqli_fetch_array($result)) {
      $id= $row['id'];

      
      $level= $row['level'];
      $index= $row['indexNo'];
      $dept= $row['dept'];



      //$index=shuffle($index);
      
      if($i % 6 == 0){
 
     /* $dyt .='<tr><td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" style="color:red" src="./img/seat.png" width="50" height="50"></BR><b>'  .$index. '</b></td>';
      }else{
      $dyt .='<td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50"><b></BR>' .$index. '</b></td>';
      }*/


      $dyt .='<tr><td style="color:#FF6D28;padding-right:15px"><img class="h-8 mt-2 mx-4" style="color:red" src="./img/seat.png" width="50" height="50"></BR><b>'  .$index. '</b></td>';
      }else{
      $dyt .='<td style="color:#FF6D28;padding-right:15px"><img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50"><b></BR>' .$index. '</b></td>';
      }

      $i++;
  } 
    $dyt .='</tr></table>';

    echo $dyt;
    
  //print_r($index);
   /*  $my_array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");

shuffle($my_array);
print_r($my_array); */
   ?>
 <!-- 
          <div class="col-md">
            <img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50">
            <p class="mx-2 text-gray-400 text-sm"><?php //echo $index?></p>
          </div>
 -->
  <?php //} ?>

        </div>
        <!-- Next Row -->
   
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="text-center p-3 bg-gray-900">
      <p class="text-white text-sm">Made with   &#10084; by: © 2022</p>
      <!-- <a class="text-blue-500 text-xs" href="https://www.kaafuni.edu.gh/" target="_blank">KAAF University College</a> -->
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
</body>

</html>