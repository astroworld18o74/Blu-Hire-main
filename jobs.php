<?php require 'config.php';
$loc="";$job="";$sal="";$type="";
if(isset($_GET['loc']))
$loc=$_GET['loc'];
if(isset($_GET['type']))
$type=$_GET['type'];
if(isset($_GET['sal']))
$sal=$_GET['sal'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>.jobdiv:hover{box-shadow:5px 5px 5px 1px grey; }
    .hidedescription{
      display:none;
    }
    .nojobs{
      position:absolute;margin:auto;height:100px;width:80%;text-align:center;top:0;bottom:0;right:0;left:0;
    }
    </style>
 <script >
 function jobs(){
    <?php 
      if($sal && $type && $loc){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.salaryoffered >='$sal' and jobpost.jobtype='$type' and jobpost.joblocation='$loc'";
     }
     else if($loc && $type){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.vacancy,jobpost.jobid,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.jobtype='$type' and jobpost.joblocation='$loc'";
     }else if($sal && $loc){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.salaryoffered >='$sal' and jobpost.joblocation='$loc'";
     }
     else if($sal && $type){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.salaryoffered >='$sal' and jobpost.jobtype='$type'";
     }
     else if($loc){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.joblocation='$loc'";
     }
     else if($type){
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.jobtype='$type'";
     }
     else if($sal){
       $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid and jobpost.salaryoffered >='$sal'";
      }
    else{
      $sql="select jobpost.jobname,jobpost.jobdescription,jobpost.skillsrequired,jobpost.jobid,jobpost.vacancy,jobpost.jobtype,employer_details.company,jobpost.joblocation,jobpost.exprequired,jobpost.lastdateapply,jobpost.salaryoffered from jobpost,employer_details where jobpost.empid=employer_details.empid";
    }
    $result=mysqli_query($con,$sql);
    if(isset($_SESSION['id'])){
    $sql2="select appliedjobs.jobpostid from appliedjobs,jobseeker where appliedjobs.jobseekerid=jobseeker.seekerid and jobseeker.seekerid=".$_SESSION['id'];
    $result2=mysqli_query($con,$sql2);$array[]=0;
    while($find=mysqli_fetch_assoc($result2)){
     $array[]=$find['jobpostid'];
   }
  }
   if(mysqli_num_rows($result)=='0'){?>
      var jobs=document.getElementById('jobs');
      var nojobs=document.createElement('h1');
      nojobs.classList.add('nojobs');
      nojobs.innerHTML="No jobs available..";
      jobs.appendChild(nojobs);
  <?php }else while($r=mysqli_fetch_array($result)){
    ?>
  var jobs=document.getElementById("jobs"); 
  var d=document.createElement("div");
  d.classList.add("jobdiv");
  d.style.borderRadius="5px";
  d.style.padding="10px";
  d.style.border="1px solid #F1F5F1";
  d.style.marginBottom="5px";
  var jobname=document.createElement("h4");
  var text=document.createTextNode("<?php echo $r['jobname'] ?>");
  jobname.appendChild(text);
  jobname.style.color="black";
  var p=document.createElement("p");
  var text=document.createTextNode("<?php echo $r['company'] ?>");
  p.style.color="grey"; p.appendChild(text);
  p.style.marginBottom="5px";
  var expreq=document.createElement("span");
  expreq.classList.add('fas');
expreq.innerHTML="&#xf555; <?php echo $r['exprequired'].' years' ?>";  
expreq.style.color="#3892E8";expreq.style.marginRight="10px";
var salary=document.createElement("span");salary.classList.add('fas');
salary.innerHTML="&#xf0d6; <?php echo $r['salaryoffered'].' P.A.' ?>";  
salary.style.color="#FF3030";
salary.style.marginRight="10px";
var loc=document.createElement("span");
loc.classList.add('fas');
loc.innerHTML="&#xf689; <?php echo $r['joblocation'] ?>";
loc.style.color="#0AB221";
loc.style.marginRight="10px";
  d.appendChild(jobname);
  d.appendChild(p);
  d.appendChild(expreq);
     d.appendChild(salary);
    d.appendChild(loc);
   var lastdate=document.createElement("span");
   lastdate.style.position="relative";
   lastdate.style.float="right";lastdate.classList.add("fas");
   var text=document.createTextNode("Last Date: <?php echo $r['lastdateapply'];?>");
   lastdate.appendChild(text);
   lastdate.style.color="#890282";
   d.appendChild(lastdate);
   var description=document.createElement("div");
   var desheader=document.createElement("h5");
   desheader.innerHTML="Job Description";
   desheader.style.marginTop="10px";
   description.appendChild(desheader);
   var despara=document.createElement("p");
   despara.innerHTML="<?php echo $r['jobdescription'] ?>";
   despara.style.color="grey";
   description.appendChild(despara);
   description.classList.add("hidedescription");
   var vacancy=document.createElement("p");
   vacancy.style.fontWeight="bold";
   vacancy.innerHTML="Vacancy: <?php echo $r['vacancy'] ;?>";
   description.appendChild(vacancy);
   var jobtype=document.createElement("p");
   jobtype.style.fontWeight="bold";
   jobtype.innerHTML="Jobtype: <?php echo $r['jobtype'] ;?>";
   description.appendChild(jobtype);
   var keyskills=document.createElement("p");
   keyskills.innerHTML="Skills required:";description.appendChild(keyskills);keyskills.style.fontWeight="bold";
   var skills="<?php echo $r['skillsrequired'];?>";
   skills=skills.split(",");
   for(let a of skills){
     var chip=document.createElement("span");
     chip.style.padding="4px";
     chip.style.border="1px solid grey";
     chip.style.borderRadius="4px";
     chip.style.fontWeight="bold";chip.style.backgroundColor="orange";chip.style.marginRight="5px";
     chip.innerHTML=a;
     description.appendChild(chip);
   }
   //description.style.display="none";
   //description.style.transition="display 2s";
   d.appendChild(description);

   d.appendChild(document.createElement('hr'));
   var button=document.createElement("button");
   button.classList.add("btn");
   <?php 
   if(isset($_SESSION['id'])){
   if(!array_search($r['jobid'],$array)){?>
   button.classList.add("btn-outline-primary");
   button.innerHTML="Apply";
   button.addEventListener('click',function(){
     location.href="applytojob.php?jobid=<?php echo $r['jobid'];?>";
		});
   <?php }else{ ?>
   button.classList.add("btn-success");
   button.innerHTML="Applied";<?php } }
   else{ ?>
    button.classList.add("btn-outline-primary");
    button.innerHTML="Apply";
    button.addEventListener('click',function(){
      location.href="login.php?per=jobseeker";
     });
   <?php }
   ?>
   button.style.clear="both";
   button.style.width="100px";button.style.marginRight="5px";
   d.appendChild(button);
   var viewmore=document.createElement("span");
   viewmore.style.color="grey";
   viewmore.style.fontSize="14px";
   viewmore.innerHTML="View more";
   viewmore.style.cursor="pointer";
   d.appendChild(viewmore);
   viewmore.style.float="right";
  jobs.appendChild(d);
  viewmore.addEventListener("click",function(event){
   // description.classList.toggle("hidedescription");
   event.target.parentElement.children[6].classList.toggle("hidedescription");
   console.log( event.target.parentElement.children[6]);
if(!event.target.parentElement.children[6].classList.contains("hidedescription")){
      event.target.innerHTML="View less";   
    }
    else{
      event.target.innerHTML="View more";
    } 
});
   <?php } ?>
}
function salary(){
  var str=location.href;
  var strcut='&';
 var n=str.indexOf('sal=');
 var n1=str.indexOf('type=');
 var n2=str.indexOf('loc=');
 var n3=str.indexOf('per=');
  if(n>-1){
    if(str[n-1]=='?') strcut='?';
    while(str[n]!='&' && n<str.length){
      strcut+=str[n];n++;
    }
   var str1=str.replace(strcut, strcut[0]=='&' ? "&sal=160000" : '?sal=160000');
    var str2=str.replace(strcut, strcut[0]=='&' ? "&sal=190000" : '?sal=190000');
    var str3=str.replace(strcut, strcut[0]=='&' ? "&sal=220000" : '?sal=220000');
  }
  else {
    if(n1>-1 || n2>-1 || n3>-1){
      var str1=str+"&sal=160000";
    var str2=str+"&sal=190000";
    var str3=str+"&sal=220000";
    }
    else{
      var str1=str+"?sal=160000";
    var str2=str+"?sal=190000";
    var str3=str+"?sal=220000";
    }
  }
    document.getElementsByClassName('z')[0].setAttribute('href',str1);
    document.getElementsByClassName('z')[1].setAttribute('href',str2);
    document.getElementsByClassName('z')[2].setAttribute('href',str3);  
} 
 function jobtype(){
  var str=location.href;
  var strcut='&';
 var n=str.indexOf('type=');
 var n1=str.indexOf('sal=');
 var n2=str.indexOf('loc=');
 var n3=str.indexOf('per=');
  if(n>-1){
    if(str[n-1]=='?') strcut='?';
    while(str[n]!='&' && n<str.length){
      strcut+=str[n];n++;
    }
    var str1=str.replace(strcut,strcut[0]=='&' ?  "&type=Full-time":"?type=Full-time");
    var str2=str.replace(strcut,strcut[0]=='&' ?  "&type=Internship":"?type=Internship");
    var str3=str.replace(strcut,strcut[0]=='&' ?  "&type=Fresher": "?type=Fresher");
  }
  else{
    if(n1>-1 || n2>-1 || n3>-1){
    var str1=str+"&type=Full-time";
    var str2=str+"&type=Internship";
    var str3=str+"&type=Fresher";}
    else{
      var str1=str+"?type=Full-time";
    var str2=str+"?type=Internship";
    var str3=str+"?type=Fresher";
    }
  }
    document.getElementsByClassName('z')[3].setAttribute('href',str1);
    document.getElementsByClassName('z')[4].setAttribute('href',str2);
    document.getElementsByClassName('z')[5].setAttribute('href',str3);
 }
 function loc(){
  var str=location.href;
  var strcut='&';
 var n=str.indexOf('loc=');
 var n1=str.indexOf('type=');
 var n2=str.indexOf('sal=');
 var n3=str.indexOf('per=');
  if(n>-1){
    if(str[n-1]=='?') strcut='?';
    while(str[n]!='&' && n<str.length){
      strcut+=str[n];n++;
    }
    var str1=str.replace(strcut,strcut[0]=='&' ?  "&loc=Delhi":"?loc=Delhi");
    var str2=str.replace(strcut,strcut[0]=='&' ?  "&loc=Mumbai": "?loc=Mumbai");
    var str3=str.replace(strcut,strcut[0]=='&' ?  "&loc=Bangalore":"?loc=Bangalore");
  }
  else{
    if(n1>-1 || n2>-1 || n3>-1){
    var str1=str+"&loc=Delhi";
    var str2=str+"&loc=Mumbai";
    var str3=str+"&loc=Bangalore";}
    else{
      var str1=str+"?loc=Delhi";
    var str2=str+"?loc=Mumbai";
    var str3=str+"?loc=Bangalore";
    }
  }
  document.getElementsByClassName('z')[6].setAttribute('href',str1);
    document.getElementsByClassName('z')[7].setAttribute('href',str2);
    document.getElementsByClassName('z')[8].setAttribute('href',str3);
 }
 </script>
</head>
<body onload="jobs();dropdownchange();">
<?php include 'includes/header1.php' ?>
<div style="position:relative;margin:10px;"><div class="btn-group" role="group" style="">
<div class="btn-group mr-2" role="group" aria-label="First group">
  <button type="button" id="salbtn" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" id="btngroupdrop1"aria-haspopup="true" aria-expanded="false" onClick="salary();">
   Salary Estimate
  </button>
  <div class="dropdown-menu" aria-labelledby="btngroupdrop1">
    <a class="dropdown-item z"  href="">&#x20b9; 1,60,000+</a>
    <a class="dropdown-item z"  href="" >&#x20b9; 1,90,000+</a>
    <a class="dropdown-item z"  href="" >&#x20b9; 2,20,000+</a>
  </div>
</div>
<div class="btn-group mr-2" role="group" aria-label="Second group">
  <button type="button" id="typebtn" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btngroupdrop2" onClick="jobtype();">
  Job Type
  </button>
  <div class="dropdown-menu" aria-labelledby="btngroupdrop2">
    <a class="dropdown-item z"  href="">Full-time</a>
    <a class="dropdown-item z"  href="">Internship</a>
    <a class="dropdown-item z"  href="">Fresher</a>
  </div>
</div>
<div class="btn-group mr-2"  role="group" aria-label="Third group">
  <button type="button" id="locbtn" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="btngroupdrop2" onClick="loc();">
  Location
  </button>
  <div class="dropdown-menu" aria-labelledby="btngroupdrop2">
    <a class="dropdown-item z"  href="">Delhi</a>
    <a class="dropdown-item z"  href="">Mumbai</a>
    <a class="dropdown-item z"  href="">Bangalore</a>
  </div>
</div>
</div></div>
<div class="container" id="jobs">
</div>
<script>
function dropdownchange(){
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  if(urlParams.has('sal')){
  document.getElementById('salbtn').innerHTML = urlParams.get('sal')+"+";
}
if(urlParams.has('type')){
  document.getElementById('typebtn').innerHTML =urlParams.get('type');
}
if(urlParams.has('loc')){
  document.getElementById('locbtn').innerHTML =urlParams.get('loc');
}}
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>