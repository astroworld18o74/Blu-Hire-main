
<!DOCTYPE HTML>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale =1.0,user-scalable=no">
	  <link href="css/home.css" rel="stylesheet"/>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<title> Blu Hire </title>
	<style>
  .grid-container {
  display: grid;
  grid-template-columns: auto auto ;
  background-color: #78d5c2;
  padding: 10px;
}
.grid-item {
  background-color: rgba(26, 188, 156);
  border: 0.5px solid rgba(0, 0, 0, 0.8);
  border-radius: 15px;
  padding: 20px;
  font-size: 20px;
  text-align: center;
}
	.inp{border-radius:5px;padding:10px;border:none;margin-right:0.5px;width:20%;vertical-align:middle;}
	.button1 {border-radius:5px;padding:10px;border:none;margin-right:1px;margin-top:2px;width:15%;vertical-align:middle;background-color: #f44338;}
	</style>
	<script type="application/javascript">
		$(document).ready(function(){
			// Add smooth scrolling to all links in navbar + footer link
			$(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 900, function(){

					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
			});
			$(window).scroll(function() {
				$(".slideanim").each(function(){
					var pos = $(this).offset().top;

					var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
						$(this).addClass("slide");
					}
				});
			});
		})
	</script>
</head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Blu Hire</a>
      </div>

     <ul class="nav navbar-nav">
      
      <li><a href="#sectionthreee">Job Seeker</a></li>
      <li><a href="#a1">Employer</a></li>
      <li><a href="#contactus">Contact Us</a></li>
    </ul>

	<ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a  href="basic_reg.php">
                        <span class="glyphicon glyphicon-user"></span> Register </span></a>
                   <!-- <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>-->
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
    <a name="a1">
<div class="bmsTop">
	 <ul>
        <li style="font-size: 18px; font-weight: bold">Top Recruiters:</li>
        <li><a href="#" target="_blank">
                <img src="images/swiggy.png" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/2.gif" border="0">
            </a></li>
        <li><a href="#" target="_blank">
                <img src="images/5.gif" border="0"></a>
        </li>
        <li><a href="#" target="_blank">
                <img src="images/4.gif" border="0"></a></li>
        <li><a href="#" target="_blank">
                <img src="images/delhivery.png" border="0"></a>
        </li>
    </ul>
</div>
</a>

<div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
<h1>Find your next job here!</h1>
    <p>Search-Apply-get Hired</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="60" placeholder="Enter your keyword"  name="keyword" id="keyword">
        <!--<button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>-->
    </form>
    <br>
    <form id="form" action="javascript:void(0);">
        <select class="inp" style="color:black; width:auto;">
        <option value="" disabled selected >Job type</option>
        <option value="Full-Time">Full-Time</option>
        <option value="Internship">Part-Time</option>
        <option value="Fresher">Fresher</option>
        </select>
        <select class="inp" style="color:black; width:auto;">
        <option value="" disabled selected>City</option>
        <option value="Delhi">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Bangalore">Bangalore</option>
        </select>
        <button class="button1" onClick="search()" style="width:auto"><span class="glyphicon glyphicon-search"></span> Search</button>
</form>
</div>
</div> <!-- jumbotron -->
<br>

<!-- Categories section-->
<section class="section-three">
<div class="container">
<h2 id="sectionthreee" style="text-align:center; font-weight:bold">Search jobs by categories</h2>  
<br>


<div class="grid-container">
  <div class="grid-item"><a href="https://www.just.jobs/search/c/cook-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/cook.svg"></i>  <br>
<span style="color:#ffffff">Cook Jobs</span>
<em style= color:#ffffff>20660 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/sales-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/sales.svg"></i>  <br>
<span style= color:#ffffff>Sales Jobs</span>
<em style= color:#ffffff>16420 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/delivery-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/delivery.svg"></i>  <br>
<span style= color:#ffffff>Delivery Jobs</span>
<em style= color:#ffffff>9970 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/driver-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/driver.svg"></i>  <br>
<span style= color:#ffffff>Driver Jobs</span>
<em style= color:#ffffff>9595 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/tailoring-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/tailoring.svg"></i>  <br>  
<span style= color:#ffffff>Tailoring Jobs</span>
<em style= color:#ffffff>9050 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/accountant-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/accountant.svg"></i>  <br>  
<span style= color:#ffffff>Accountant Jobs</span>
<em style= color:#ffffff>8520 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/beautician-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/beautician.svg"></i>  <br>
<span style= color:#ffffff>Beautician Jobs</span>
<em style= color:#ffffff>7040 Jobs</em>
</a></div>
  <div class="grid-item"><a href="https://www.just.jobs/search/c/receptionist-jobs-in-delhi">
<i><img src="https://www.just.jobs/wp-content/themes/justjobs/new-home-page/image/receptionist.svg"></i>  <br>
<span style= color:#ffffff>Receptionist Jobs</span>
<em style= color:#ffffff>3450 Jobs</em>
</a></div>


</div>  
</section>


<!-- FAQ section-->
<section class="section-seven">
<div class="container">
<div class="row">
<div class="col-md-12 mx-auto">
<h2>Frequently asked questions</h2>
<div class="accordion faq-list" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 style="border: none;">
        <a href="#headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
         What is Blu Hire?
        </a>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
      <div class="card-body">
      Blu Hire is one of the most innovative & leading job portal focused to provide easy, fast and cost-effective solutions to SMBs and startups to hire staff post the pandemic.
      </div>
    </div>
  </div>
  <div class="card-active">
    <div class="card-header" id="headingTwo">
      <h2>
        <a href="#headingTwo" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Who can use Blu Hire?
        </a>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
      <div class="card-body">
       Small businesses, startups and other businesses looking to hire office staff, cooks, drivers, delivery executives, and other blue-collar workers can post their job on Blu Hire.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2>
        <a href="#headingThree" class="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
         Are there any hidden charges or taxes?
        </a>
      </h2>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
      <div class="card-body">
     There are no hidden charges or taxes. For now, it is completely free for job seekers. However, they can pay after getting hired if they wish.
      </div>
    </div>
  </div>
 <div class="card">
    <div class="card-header" id="headingFour">
      <h2>
        <a href="#headingFour" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          What makes Blu Hire unique?
        </a>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      Every job seeker registered on Blu Hire is mobile verified which means every application on your job post or your unlocked jobseeker contact is a 100% genuine jobseeker.
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingFive">
      <h2>
        <a href="#headingFive" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Who will handle the police verification of the candidates?
        </a>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
   Employer needs to handle the police verification of the hired employees.
      </div>
    </div>
  </div>
       <div class="card">
    <div class="card-header" id="headingSix">
      <h2>
        <a href="#headingSix" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Who will handle the Employer-Employee contract?
        </a>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
      Employer needs to handle the Employer-Employee contract of the hired employees.

      </div>
    </div>
  </div> 
</div>  
</div>  
</div>

<!--Reviews section-->
<section class="section-four">
<div class="container"> 
<h2>Faster Job Search + Happy Hiring</h2>  
<div class="row">
<div class="col-md-4 happy-sec-left">
<i><img src="images/star.svg"></i>
<h3>4.5 out of 5 <br> based on 100+<br> reviews</h3>


</div>  
<div class="col-md-8">
 <div class="owl-carousel owl-theme">
            <div class="item">
          <div class="happy-sec-mid">
<i><img src="images/coma.svg"></i>
<p>We gained control on our entry-level hiring and could work with more projects without getting more stressed out after the pandemic!
  Good site to hire blue collar staff.
</p>  
<i><img src="images/star-one.svg"></i>
<div><span><img src="images/coma.svg"></span>
<em><strong>Sahil Chandel</strong>
HR Manager, Noida</em></div>
</div>
            </div>
            <div class="item">
<div class="happy-sec-mid happy-sec-right">
<i><img src="images/coma-one.svg"></i>
<p>Extremely happy with the Blu Hire's service. I was working in an export (clothing) factory as a Tailor but due to Covid 19, they asked me to leave immediately. 
  I saw an ad for it on FB & find a new job in a couple of days. It's easy & free!</p>  
<i><img src="images/star.svg"></i>
<div><span><img src="images/coma.svg"></span>
<em><strong>Aditi Singh</strong>
Ladies Tailor, Pune</em></div>
</div> 
            </div>
                 
            
            </div>
     
           
            
          </div>  
</div> 
</div>
</div>  

</section>


 

        

<!-- Contact section-->
<a name="contactus">
  <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: #f4511e"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p><h4>Leave your details here and we'll get back to you!</h4></p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Bilaspur,Himachal Pradesh India</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 8629077731</p>
                <p><span class="glyphicon glyphicon-envelope"></span> project@gmail.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Contact -->
    </a>
</div> <!-- sub content -->
 <div class="page-header" style="background: #f4511e"></div>
 <!-- Container -->

<!-- Set height and width  -->
<p><div id="googleMap" style="height:400px;width:100%;"></div></p>

<!-- Add Google Maps -->
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzZvGe04AhzBgjDvTjqmrslNMCChtOmWA">
</script>
<script>
    var myCenter = new google.maps.LatLng(31.7076, 76.5274);
    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
			map: map
        });
    }
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Return to top</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>
