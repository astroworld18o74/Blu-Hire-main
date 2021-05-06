<?php
    session_start();
      if(!isset($_SESSION['user_id'])){
        header('location: ../basic_reg.php?msg=first_reg_basic');
      }
      
   ?>
   <!DOCTYPE HTML>
    <html>
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/jobseeker.css" rel="stylesheet">
        <title>Complete Profile</title>
    </head>
    <body>

        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Job Application</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registration</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
             </div>
         </nav>

<div class="container">

    <div class="container">
        <div class="jumbotron">
            <h1>Complete Your Profile & find Jobs</h1>
            <p>
                Helps passive and active jobseekers find better jobs. Get connected with over 4500 recruiters.<br/>
                Apply to jobs in just one click. Apply to thousands of jobs posted daily.
            </p>
        </div>

    <FORM id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" >



    <div class="page-header"></div>
    <h3 class="h3style">Your Information</h3>
    <div >
    <label for="name">Mention your Full Name:</label>
    <div>
    <input type="text" id="uname" placeholder="Your Name" name="uname" 
                    >
                </div>
         <label id="nameerror" class="error"></label>
    </div>
    <div>
    <label for="address">Address:</label>
    <div>
    <input type="text" id="address" placeholder="Building No." name="BuildId"  style="width:100px;" >
    <input type="text" id="address" placeholder="Street Name" name="StreetId"  style="width:200px;" >

                <input type="number" id="address" placeholder="Pincode" name="Pin"  style="width:100px;" >
                <label id="buildnoerror" ></label>
                <label id="streetnameerror" ></label>
                <label id="pinnoerror" ></label>
        </div>
        </div>
        <div>
        <label for="mobno">Mobile Number:</label>
        <div><input type="text" name="mobno" placeholder=" Mobile number" id="mobno" ></div>
        <label id="mobnoerror" ></label>
        </div>
        <div >
    <label for="Location"> Location: </label>
        <div  >
               <input type="text" id="Location" placeholder="Country" name="Country"  style="width:130px;" >

                <input type="text" id="Location" placeholder="State" name="State"  style="width:130px;" >

                <input type="text" id="Location" placeholder="City" name="City"  style="width:130px;" >
                <label id="countryerror" ></label>
                <label id="stateerror" ></label>
                <label id="cityerror" ></label>
        </div>
</div>
<div ></div>
<h3 > Your Current Employment Details </h3>


<div >
    <label for="experience" > How much work experience do you have:</label>
        <div class="col-sm-4">
            <select name="experience" id="experience" required>
                <option value="">select </option>
                <option value="0 yr/Fresher"> Fresher </option>
                <option value="1-2 yr">1-2 years </option>
                <option value="3-5 yr">3-5 years </option>
                <option value="5+ yr">5+ years </option>
         </select>
       </div>
</div>

<div >
    <label  for="skills"> What are your Key Skills:</label>
        <div ><input type="text" name="skills" placeholder="Skills"  name="skills" id="skills"
        >
        </div>
        <label id="skillerror" ></label>
</div>


<h3 > Your Educational Qualifications </h3>



<div >
    <label  for="ugcourse"> Your Basic Education: </label>
     <div > <select name="ugcourse" id="ugcourse" required>
                <option value="" label="Select">Select</option>
                <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
                <option value="B.A">B.A</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BDS">BDS</option>
                <option value="BHM">BHM</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="MBBS">MBBS</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select>
        </div>
 </div>
 <div >
    <label  for="pgcourse"> Your Masters Education:</label>
        <div > <select name="pgcourse" id="pgcourse"   required>
                            <option value="">Select</option>
                            <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
                            <option value="CA">CA</option>
                            <option value="CS">CS</option>
                            <option value="ICWA (CMA)">ICWA (CMA)</option>
                            <option value="Integrated PG">Integrated PG</option>
                            <option value="LLM">LLM</option>
                            <option value="M.A">M.A</option>
                            <option value="M.Arch">M.Arch</option>
                            <option value="M.Com">M.Com</option>
                            <option value="M.Ed">M.Ed</option>
                            <option value="M.Pharma">M.Pharma</option>
                            <option value="M.Sc">M.Sc</option>
                            <option value="M.Tech">M.Tech</option>
                            <option value="MBA/PGDM">MBA/PGDM</option>
                            <option value="MCA">MCA</option>
                            <option value="MS">MS</option>
                            <option value="PG Diploma">PG Diploma</option>
                            <option value="MVSC">MVSC</option>
                            <option value="MCM">MCM</option>
                            <option value="Other">Other</option>
                        </select>
          </div>
</div>

<div > </div>

        <div >

<div style="margin-top:10px; margin-bottom:200px;">
        <button  type="submit"  id="reg" value="submit">Create Profile</button>
        <label ></label>
        <button  type="reset" id="reset"> Reset </button>
</div>
</div>
    
    </form>
    <script type="text/javascript" src="../js/validate.js"></script>
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
            function checkForm() {

                // Fetching values from all input fields and storing them in variables.
                var name = document.getElementById("nameerror").innerHTML;
                var address1 = document.getElementById("buildnoerror").innerHTML;
                var address2 = document.getElementById("streetnameerror").innerHTML;
                var address3 = document.getElementById("pinnoerror").innerHTML;
                var mobno = document.getElementById("mobnoerror").innerHTML;
                var location1 = document.getElementById("countryerror").innerHTML;
                var location2 = document.getElementById("stateerror").innerHTML;
                var location3 = document.getElementById("cityerror").innerHTML;
                var skills = document.getElementById("skillerror").innerHTML;
                //Check input Fields Should not be blanks.

                if(name == "" && address1 == "" && address2 == "" && address3 == "" && mobno == '' && skills =='') {
                    //document.getElementById("reguser").submit();
                                     return true;
                }
                else {
                alert("Fill in with correct information");
                                     return false;

                }
            }


 </script>
    </body>
    </html>
