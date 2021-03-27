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
    <a class="navbar-brand pl-5" href="#" >Coder's Hack</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto pr-5 text-capitalize">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home <span class="sr-only">(current)</span></a>
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

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/eksath.png" width="400" height="300" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" width="70" height="70" alt=""></span>na Virus</h1>
            </div>
        </div>
    </div>
</div>

<!-- ........Latest Update........ -->
<section class="corona_update container-fluid " id="worldcoronalive">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 live updates of the world</h3>
        <hr class="mx-auto w-50 mb-5">

    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>TotalConfirmed</th>
                <th>TotalRecovered</th>
                <th>TotalDeaths</th>
                <th>NewConfirmed</th>
                <th>NewRecovered</th>
                <th>NewDeaths</th>
            </tr>
        </table>
    </div>

</section>

<!-- About ... -->
<section>
    <div class="container-fluid sub_section pt-5 pb-5 mb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4 ">
            <h1> About COVID-19</h1>
            <hr class="mx-auto w-25">
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                <img src="images/about.jpg"  class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>What is COVID-19 (Corona-Virus) ?</h2> <br>
                <p>COVID-19 is the infections disease caused by the most recently descovered coronavirus.
                    This new virus and disease were unknown before the outbreak began in Wuhan, Chine, in December 2019.
                </p> <br>
                <p>Coronaviruses are a large family of viruses which may causes illness in animals or humans, In humans, sevral coronaviruses are known to cause respiratory infections ranging from the common cold to more sereve disease such as Middle East Respiratory Syndrome (MERS) and severe Acute Respiratory Syndrome (SARS). The most recently discovered coronaviruses causes coronavirus disease COVID-19.</p>
            </div>
        </div>
    </div>
</section>

<!-- Symptoms     -->

    <div class="container   pb-5 " id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Coronavirus Symptoms</h1>
            <hr class="mx-auto w-25">
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">   
            <img src="images/logo1.png" class="img-fluid" alt="">
            </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
            <img src="images/logo2.png" class="img-fluid alt="">
            </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
            <img src="images/logo3.png" class="img-fluid alt="">
            </figure>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
            <img src="images/logo4.png" class="img-fluid alt="">
            </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
            <img src="images/logo5.png" class="img-fluid alt="">
            </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
            <img src="images/logo6.png" class="img-fluid alt="">
            </figure>
            </div>
        </div>
    </div>
</div>
    <!-- Prevention    -->
   
        <div class="container-fluid sub_section pb-5 " id="preventid">
            <div class="section_header text-center pt-5 mt-4 mb-5 " >
                <h1>6 Steps Prevention Against Coronavirus</h1>
                <hr class="mx-auto w-25 mb-5">
            </div>
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev1.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev2.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev3.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev4.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev5.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay informed by watching news & follow the recommended practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                            <figure class="text-center">  
                            <img src="images/prev6.png" class="img-fluid">
                            </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
  
<!-- Contact ...... -->
<div class="container-fluid  pb-5 " id="contactid">
            <div class="section_header text-center pt-5 mt-4 mb-5 " >
                <h1>Contact Us Asap</h1>
                <hr class="mx-auto w-25 mb-5">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                    <form method="POST">
                    <div class="form-group">
                            <label >Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label >Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label >Mobile</label>
                            <input type="number" class="form-control" name="mobile" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="">Select Symptoms</label> <br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                <label class="custom-control-label" for="customcheckbox1">Cold</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                                <label class="custom-control-label" for="customcheckbox2">Fever</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                                <label class="custom-control-label" for="customcheckbox3">Breath</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                                <label class="custom-control-label" for="customcheckbox4">feeling week</label>
                            </div>
                        <div> <br>

                        
                        
                        <div class="form-group">
                            <label >Describe how you are feeling....</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
</div>
</div>
</div>

<!-- top cursor -->
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


$('.count').counterUp({
    delay:10,
    time:3000
});

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

function fetch(){
    $.get("https://api.covid19api.com/summary" ,
    function (data){
        // console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');
        for(var i=1;i<(data['Countries'].length);i++){
            var x = tbval.insertRow();
            x.insertCell(0);
            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.background = '#7a4a91';
            tbval.rows[i].cells[0].style.color = '#fff';

            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[1].style.background = '#4bb7d8';

            x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[2].style.background = '#4bb7d8';

            x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[3].style.background = '#f36e23';

            x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tbval.rows[i].cells[4].style.background = '#4bb7d8';


            x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[5].style.background = '#9cc850';

            x.insertCell(6)
            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tbval.rows[i].cells[6].style.background = '#f36e23';



        }
    }
    );
}

</script>
</body>
</html>

<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $message = $_POST['message'];
    

    $chk="";

    foreach ($symp as $chk1) {
        $chk .=$chk1.",";
    }

    $insertquery = "insert into coronacase (name,email,mobile,symp,message) values('$name','$email','$mobile','$chk','$message')";

    $query = mysqli_query($con,$insertquery);
    if($query){
        ?>
        <script>
        alert("inserted successfuly");
        </script>
        <?php
    }else
    {
        ?>
        <script>
        alert("no inserted");
        </script>
        <?php
    }

}

?>