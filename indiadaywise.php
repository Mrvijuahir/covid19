
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Live Updates</title>
    <?php
    include 'link/links.php';
    include 'css/style.php';
    ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3 ">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" href="index.php" >Coder's Hack</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto pr-5 text-capitalize">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventid">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#worldcoronalive">worldcoronalive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indiadaywise.php">indiadaywise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="corona_update container-fluid " id="worldcoronalive">
    <div class="my-5">
        <h3 class="text-uppercase text-center">covid-19 live updates of the india day wise</h3>
        <hr class="mx-auto w-50 mb-5">

    </div>
    <div class="table-responsive">
        <table class="table text-center" id="tbl">
            
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');

$coronadata = json_decode($data,true);

// echo "<pre>";
// print_r($coronadata);
// echo "</pre>";
// echo $coronadata['cases_time_series'][0]['date'];

$totalcount = count($coronadata['cases_time_series']);

$i=0;
while($i < $totalcount){
    ?>
    <tr>
    <th class="text-left">
    Date & Month
    </th>
    </tr>
    <tr>
    <td colspan="5" class="text-left">
    <?php  echo $coronadata['cases_time_series'][$i]['date']."<br>";  ?>
    </td>
    </tr>
    <tr class="text-capitalize text-white">
    <th style="color:#fff; background:#2196f3;"> Total Confirmed</th>
    <th style="color:#fff; background:#ffc107;"> Daily Confirmed</th>
    <th style="color:#fff; background:#008C76FF;"> Daily Recovered</th>
    <th style="color:#fff; background:#e91e7f;"> Daily Deceased</th>
    <th style="color:#fff; background:#4caf50;"> Total Recovered</th>
    <th style="color:#fff; background:#EE2737FF;"> Total Deceased</th>
    </tr>

    <tr class="mb-5">
    <td style="background:#bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."<br>";  ?></td>
    <td style="background:#ffe493;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."<br>";  ?></td>
    <td style="background:#9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."<br>";  ?></td>
    <td style="background:#fc95c6;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."<br>";  ?></td>
    <td style="background:#88d28b;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."<br>";  ?></td>
    <td style="background:#fb99a1;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."<br>";  ?></td>
    </tr>
    <!-- echo $daywise['cases_time_series'][$i]['date']."<br>";
    echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>";
    echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>";
    echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>"; -->
    <?php
    $i++;
}


?>
</table>
</div>
</section>
<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!-- footer -->

<footer class="mt-5 mb-0 ">
    <div class="footer_style text-white text-center container-fluid">
        <p>copyright &copy | Coder's hack</p>
    </div>

</footer>

<script type="text/javascript">


mybutton = document.getElementById("myBtn");
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        mybutton.style.display="block";
    }else{
        mybutton.style.display="none";
    }
}
function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
}



</script>
</body>
</html>