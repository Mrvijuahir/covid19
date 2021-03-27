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
        <h3 class="text-uppercase text-center">covid-19 live updates of the india</h3>
        <hr class="mx-auto w-50 mb-5">

    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th class="text-capitalize">lastupdatedtime</th>
                <th class="text-capitalize">state</th>
                <th class="text-capitalize">confirmed</th>
                <th class="text-capitalize">active</th>
                <th class="text-capitalize">recovered</th>
                <th class="text-capitalize">deaths</th>
                
            </tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);

// echo "<pre>";
// print_r($coronalive);
// echo "</pre>";
$statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount) {
    ?>

    <tr>
    <td>
    <?php echo $coronalive['statewise'][$i]['lastupdatedtime'];  ?>
    </td>
    <td>
    <?php echo $coronalive['statewise'][$i]['state'];  ?>
    </td>
    <td>
    <?php echo $coronalive['statewise'][$i]['confirmed'];  ?>
    </td>
    <td>
    <?php echo $coronalive['statewise'][$i]['active'];  ?>
    </td>
    <td>
    <?php echo $coronalive['statewise'][$i]['recovered'];  ?>
    </td>
    <td>
    <?php echo $coronalive['statewise'][$i]['deaths'];  ?>
    </td>
    </tr>
    <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
    echo $coronalive['statewise'][$i]['state']."<br>";
    echo $coronalive['statewise'][$i]['confirmed']."<br>";
    echo $coronalive['statewise'][$i]['active']."<br>";
    echo $coronalive['statewise'][$i]['recovered']."<br>";
    echo $coronalive['statewise'][$i]['deaths']."<br>"; -->
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