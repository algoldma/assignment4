<?php
  $hub = array('hub-01.jpg', 'hub-02.jpg', 'hub-03.jpg', 'hub-04.jpg', 'hub-05.jpg', 'hub-06.jpg', 'hub-07.jpg', 
                'hub-08.jpg', 'hub-09.jpg', 'hub-10.jpg', 'hub-11.jpg', 'hub-12.jpg', 'hub-13.jpg', 
                'hub-14.jpg', 'hub-15.jpg', 'hub-16.jpg', 'hub-17.jpg', 'hub-18.jpg', 'hub-19.jpg', 
                'hub-20.jpg', 'hub-21.jpg', 'hub-22.jpg', 'hub-23.jpg', 'hub-24.jpg', 'hub-25.jpg', ); // array of filenames

  $i = rand(0, count($hub)-1); // generate random number size of the array
  $selectedHub = "$hub[$i]"; // set variable equal to which random filename was chosen
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>Lectures - CS 142 (A) Advanced Web Design: CSS and Usability</title>
 <meta name="description" content="This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site."/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- https://rerickso.w3.uvm.edu/education/blackboard/css/base.css -->
<!-- https://algoldma.w3.uvm.edu/cs142/assignment4/algoldma.css -->
<link href="https://algoldma.w3.uvm.edu/cs142/assignment4/algoldma.css" rel="stylesheet" type="text/css" media="screen" />
<link href="https://algoldma.w3.uvm.edu/cs142/assignment4/print_algoldma.css" rel="stylesheet" type="text/css" media="print" />
<link href="css/mainAdmin.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="https://rerickso.w3.uvm.edu/education/blackboard/favicon.ico" >

<style type="text/css">
body{
background: url(hubble/<?php echo $selectedHub; ?>);
background-attachment: fixed;
background-size:100% 100%;
}
</style>


<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
<!--
// keeps us from getting framed
		if (top.location != self.location) {
			top.location.replace(self.location)
		}
//-->
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-32182956-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();


</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
     $( "#txtDateRequest" ).datepicker();
});
</script>

<script src="misc.js"></script>
</head>

<body id="lectures">
<div id="topbox"> <!-- ************ top box ************ -->
<header> <!-- ************ header ************ -->
		<h1 id="classtitle">
<a href="http://www.uvm.edu/~cems/cs/?Page=default.php">CS</a> 142 (A) 
<a href="syllabus.php?classRegNum=152" class="url">Advanced Web Design: CSS and Usability</a>
</h1>
<div id="toolmenu"><span id="screenSize"></span></div>
</header> <!-- ************ end header  ************ -->

<aside id="studentInfo"> <!-- %^%^%^%^%^ studentInfo %^%^%^%^%^ -->
<span id="studentName">
Student: algoldma [<a href="https://webauth.uvm.edu/webauth/logout">logout</a>]
</span>
<span id="studentGrade" >Current <a href="https://rerickso.w3.uvm.edu/education/blackboard/grades.php">Grade</a>: 76.9</span>
<span id="classRank">
Rank: 24 of 45
</span>
</aside> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink activeLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink"><a href="media.php">Resources</a></li>
<li class="menuLink"><a href="sick.php">Sick</a></li>
<li class="menuLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
</div> <!-- ************ top box ************ -->
<!-- place admin menu code here -->
<!-- userlevel = 1.5  -->
<article id="mainContent"> <!-- ######################## main Content 
######################## --><aside id="upcoming"><h1>Milestones</h1><div class="box"><h1>Lecture </h1><ol class="LecturesLink"><li class="title summary"><a class="url" href="lecture.php?lid=104">CSS: Ch 11, 12, 13</a></li></ol></div><div class="box"><h1>Assignment </h1><ol class="AssignmentLink"><li class="title summary"><a class="url" href="assign.php?pid=25">Style a Table</a> Friday the 20th</li><li class="title summary">Peer Grading <span class="relaseDate">Due Date: 2014-06-05</span> Thursday the 5th</li>
</ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside><h2>Lectures</h2><ol class="LecturesLink"><li class="title summary">2015-01-14 - <a class="url" href="lecture.php?lid=100">CSS: Ch 1, 2: CSS and Documents, Selectors</a></li><li class="title summary">2015-01-21 - <a class="url" href="lecture.php?lid=101">CSS: Ch 3, 4: Structure and the Cascade, Units</a></li><li class="title summary">2015-01-28 - <a class="url" href="lecture.php?lid=102">CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting</a></li><li class="title summary">2015-02-04 - <a class="url" href="lecture.php?lid=103">CSS: Ch 8, 9, 10</a></li><li class="title summary">2015-02-11 - <a class="url" href="lecture.php?lid=104">CSS: Ch 11, 12, 13</a></li><li class="title summary">2015-02-18 - <a class="url" href="lecture.php?lid=105">CSS: Ch 14</a></li><li class="title summary">2015-03-11 WU: 1, 2</li><li class="title summary">2015-03-18 WU: 3, 4</li><li class="title summary">2015-03-25 WU: 5, 6</li><li class="title summary">2015-04-01 WU: 7, 8</li><li class="title summary">2015-04-08 WU: 9</li><li class="title summary">2015-04-15 WU: 10, 11, 12, 13</li></ol></article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>