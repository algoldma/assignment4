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
 <title>Calendar - CS 142 (A) Advanced Web Design: CSS and Usability</title>
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
background: url(hubble/<?php echo $selectedHub; ?>) no-repeat;
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

<body id="calendar">
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
<li class="menuLink activeLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
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
</ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside> <h2>Calendar</h2><table id='vcalendar'><tr id='attendanceRow'>
<th>Attendance for: algoldma</th><td class='Present'>Present</td><td class='Late'>Late</td><td class='Sick'>Sick</td><td class='Personal'>Personal</td><td class='Absent'>Absent</td><td class='FreeDay'>Free Day</td></tr>
<tr class='monthHeader'><th colspan='7'>January 2015</th></tr><tr class='days'><th class='header'>S</th><th class='header'>M</th><th class='header'>T</th><th class='header'>W</th><th class='header'>T</th><th class='header'>F</th><th class='header'>S</th></tr><tr><td colspan='4'>&nbsp;</td><td class=' Jan days Thu'><div class='date '>1</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Fri'><div class='date '>2</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Sat'><div class='date '>3</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Jan days Sun'><div class='date '>4</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Mon'><div class='date '>5</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Tue'><div class='date '>6</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Wed'><div class='date '>7</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Thu'><div class='date '>8</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Fri'><div class='date '>9</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Sat'><div class='date '>10</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Jan days Sun'><div class='date '>11</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Mon'><div class='date Present'>12</div><div class="event vevent INFO ">First Day of Classes</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Tue'><div class='date '>13</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Wed'><div class='date Present'>14</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=100">CSS: Ch 1, 2: CSS and Documents, Selectors</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Thu'><div class='date '>15</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Fri'><div class='date Present'>16</div><div class="event vevent INFO ">Last Day to Add Classes without Instructor Permission</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Sat'><div class='date '>17</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Jan days Sun'><div class='date '>18</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Mon VACA'><div class='date '>19</div><div class="event vevent VACA ">Martin Luther King Holiday</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Tue'><div class='date '>20</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Wed'><div class='date Present'>21</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=101">CSS: Ch 3, 4: Structure and the Cascade, Units</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Thu'><div class='date '>22</div><div class="event vevent INFO ">Banff Mountain Film Festival</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Fri'><div class='date Present'>23</div><div class="event vevent INFO ">Banff Mountain Film Festival</div>
<div class="event vevent assignment  submitted "><a class="url" href="assign.php?pid=22">Style a Form</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Sat'><div class='date '>24</div><div class="event vevent INFO "><a target="_blank" href="http://www.skirack.com/browse.cfm/banff-mountain-film-festival/4,1101.html?utm_source=Skirack+Mailing+List&utm_campaign=cc9c6573cf-Banff_2014&utm_medium=email&utm_term=0_808b1c8b4d-cc9c6573cf-420374881&mc_cid=cc9c6573cf&mc_eid=81f84335b8">Banff Mountain Film Festival</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Jan days Sun'><div class='date '>25</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Mon'><div class='date Present'>26</div><div class="event vevent INFO ">Last Day to Add/Drop</div>
<div class="event vevent INFO "><a target="_blank" href="2015_Spring/cs142/lectures/samples/phpexamplewrong.pdf">Php Mistakes</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Tue'><div class='date '>27</div><div class="event vevent INFO "><a target="_blank" href="http://theoatmeal.com/comics/design_hell">Comic about Web Design</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Wed'><div class='date Present'>28</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=102">CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Thu'><div class='date '>29</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Fri'><div class='date Present'>30</div><div class="event vevent assignment  notSubmitted ">Exam I</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Jan days Sat'><div class='date '>31</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr class='monthHeader'><th colspan='7'>February 2015</th></tr><tr class='days'><th class='header'>S</th><th class='header'>M</th><th class='header'>T</th><th class='header'>W</th><th class='header'>T</th><th class='header'>F</th><th class='header'>S</th></tr><tr><td class=' Feb days Sun'><div class='date '>1</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Mon'><div class='date '>2</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Tue'><div class='date '>3</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Wed'><div class='date Present'>4</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=103">CSS: Ch 8, 9, 10</a></div>
<div class="event vevent INFO "><a target="_blank" href="http://go.uvm.edu/energystudy">UVM Off Campus Energy Study, IRB # 15-249</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Thu'><div class='date '>5</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Fri'><div class='date Present'>6</div><div class="event vevent assignment  submitted "><a class="url" href="assign.php?pid=24">Styling a Resume</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Sat'><div class='date '>7</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Feb days Sun'><div class='date '>8</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Mon'><div class='date Present'>9</div><div class="event vevent INFO "><a target="_blank" href="http://css-tricks.com/video-screencasts/102-braindump-on-responsive-web-design/">CSS Tricks on Responsive Design</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Tue'><div class='date '>10</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Wed'><div class='date Present'>11</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=104">CSS: Ch 11, 12, 13</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Thu'><div class='date '>12</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Fri'><div class='date Present'>13</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Sat'><div class='date '>14</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Feb atoday Sun'><div class='date '>15</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Mon VACA'><a class="callInSick" href="sick.php?dateValue=1424062800"><img alt="Call in sick" src="css/sick.jpg" /></a><div class='date '>16</div><div class="event vevent VACA ">Presidents' Day Holiday</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Tue'><a class="callInSick" href="sick.php?dateValue=1424149200"><img alt="Call in sick" src="https://rerickso.w3.uvm.edu/education/blackboard/css/sick.jpg" /></a><div class='date '>17</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Wed'><a class="callInSick" href="sick.php?dateValue=1424235600"><img alt="Call in sick" src="https://rerickso.w3.uvm.edu/education/blackboard/css/sick.jpg" /></a><div class='date '>18</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=105">CSS: Ch 14</a></div>
<div class="event vevent INFO ">substitute</div>
<div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Thu'><a class="callInSick" href="sick.php?dateValue=1424322000"><img alt="Call in sick" src="https://rerickso.w3.uvm.edu/education/blackboard/css/sick.jpg" /></a><div class='date '>19</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Fri'><a class="callInSick" href="sick.php?dateValue=1424408400"><img alt="Call in sick" src="https://rerickso.w3.uvm.edu/education/blackboard/css/sick.jpg" /></a><div class='date '>20</div><div class="event vevent INFO ">substitute</div>
<div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<div class="event vevent assignment  notSubmitted "><a class="url" href="assign.php?pid=25">Style a Table</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Sat'><div class='date '>21</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Feb days Sun'><div class='date '>22</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Mon'><div class='date '>23</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Tue'><div class='date '>24</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Wed'><div class='date '>25</div><div class="event vevent assignment  notSubmitted ">Exam II</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Thu'><div class='date '>26</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Fri'><div class='date '>27</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Feb days Sat'><div class='date '>28</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr class='monthHeader'><th colspan='7'>March 2015</th></tr><tr class='days'><th class='header'>S</th><th class='header'>M</th><th class='header'>T</th><th class='header'>W</th><th class='header'>T</th><th class='header'>F</th><th class='header'>S</th></tr><tr><td class=' Mar days Sun'><div class='date '>1</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Mon VACA'><div class='date '>2</div><div class="event vevent VACA ">Spring Recess</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Tue'><div class='date '>3</div><div class="event vevent INFO ">Town Meeting Day Recess</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Wed VACA'><div class='date '>4</div><div class="event vevent VACA ">Spring Recess</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Thu VACA'><div class='date '>5</div><div class="event vevent VACA ">Spring Recess</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Fri VACA'><div class='date '>6</div><div class="event vevent VACA ">Spring Recess</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Sat'><div class='date '>7</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Mar days Sun'><div class='date '>8</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Mon'><div class='date '>9</div><div class="event vevent INFO ">Before</div>
<div class="event vevent INFO ">After</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Tue'><div class='date '>10</div><div class="event vevent INFO ">git hub</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Wed'><div class='date '>11</div><div class="event vevent lecture ">WU: 1, 2</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Thu'><div class='date '>12</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Fri'><div class='date '>13</div><div class="event vevent INFO ">Demo your designs</div>
<div class="event vevent assignment  notSubmitted "><a class="url" href="assign.php?pid=27">Redesign the Course Style</a></div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Sat'><div class='date '>14</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Mar days Sun'><div class='date '>15</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Mon'><div class='date '>16</div><div class="event vevent INFO ">Demo your designs</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Tue'><div class='date '>17</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Wed'><div class='date '>18</div><div class="event vevent lecture ">WU: 3, 4</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Thu'><div class='date '>19</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Fri'><div class='date '>20</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Sat'><div class='date '>21</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Mar days Sun'><div class='date '>22</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Mon'><div class='date '>23</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Tue'><div class='date '>24</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Wed'><div class='date '>25</div><div class="event vevent lecture ">WU: 5, 6</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Thu'><div class='date '>26</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Fri'><div class='date '>27</div><div class="event vevent INFO ">Last Day to Withdraw</div>
<div class="event vevent assignment  notSubmitted ">Exam III</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Sat'><div class='date '>28</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Mar days Sun'><div class='date '>29</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Mon'><div class='date '>30</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Mar days Tue'><div class='date '>31</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td colspan='4'>&nbsp;</td></tr><tr class='monthHeader'><th colspan='7'>April 2015</th></tr><tr class='days'><th class='header'>S</th><th class='header'>M</th><th class='header'>T</th><th class='header'>W</th><th class='header'>T</th><th class='header'>F</th><th class='header'>S</th></tr><tr><td colspan='3'>&nbsp;</td><td class=' Apr days Wed'><div class='date '>1</div><div class="event vevent lecture ">WU: 7, 8</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Thu'><div class='date '>2</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Fri'><div class='date '>3</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<div class="event vevent assignment  notSubmitted ">Style Before and After</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Sat'><div class='date '>4</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Apr days Sun'><div class='date '>5</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Mon'><div class='date '>6</div><div class="event vevent INFO ">Guest Speaker</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Tue'><div class='date '>7</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Wed'><div class='date '>8</div><div class="event vevent lecture ">WU: 9</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Thu'><div class='date '>9</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Fri'><div class='date '>10</div><div class="event vevent INFO ">Group Working Session<br>Laptops ok</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Sat'><div class='date '>11</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Apr days Sun'><div class='date '>12</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Mon'><div class='date '>13</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Tue'><div class='date '>14</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Wed'><div class='date '>15</div><div class="event vevent lecture ">WU: 10, 11, 12, 13</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Thu'><div class='date '>16</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Fri'><div class='date '>17</div><div class="event vevent INFO ">Honors Day</div>
<div class="event vevent INFO ">Demo your designs</div>
<div class="event vevent assignment  notSubmitted ">Web Usability Testing</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Sat'><div class='date '>18</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Apr days Sun'><div class='date '>19</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Mon'><div class='date '>20</div><div class="event vevent INFO ">Demo your designs</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Tue'><div class='date '>21</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Wed'><div class='date '>22</div><div class="event vevent INFO ">Demo your designs</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Thu'><div class='date '>23</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Fri'><div class='date '>24</div><div class="event vevent assignment  notSubmitted ">Exam IV</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Sat'><div class='date '>25</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' Apr days Sun'><div class='date '>26</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Mon'><div class='date '>27</div><div class="event vevent INFO ">Demo your designs</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Tue'><div class='date '>28</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Wed'><div class='date '>29</div><div class="event vevent INFO ">Last Day of Classes</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' Apr days Thu'><div class='date '>30</div><div class="event vevent assignment  notSubmitted ">Attendance</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td colspan='2'>&nbsp;</td></tr><tr class='monthHeader'><th colspan='7'>May 2015</th></tr><tr class='days'><th class='header'>S</th><th class='header'>M</th><th class='header'>T</th><th class='header'>W</th><th class='header'>T</th><th class='header'>F</th><th class='header'>S</th></tr><tr><td colspan='5'>&nbsp;</td><td class=' May days Fri'><div class='date '>1</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Sat'><div class='date '>2</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' May days Sun'><div class='date '>3</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Mon'><div class='date '>4</div><div class="event vevent assignment  notSubmitted ">Final Project 12:00 am</div>
<ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Tue'><div class='date '>5</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Wed'><div class='date '>6</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Thu'><div class='date '>7</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Fri'><div class='date '>8</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Sat'><div class='date '>9</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' May days Sun'><div class='date '>10</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Mon'><div class='date '>11</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Tue'><div class='date '>12</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Wed'><div class='date '>13</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Thu'><div class='date '>14</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Fri'><div class='date '>15</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Sat'><div class='date '>16</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' May days Sun'><div class='date '>17</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Mon'><div class='date '>18</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Tue'><div class='date '>19</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Wed'><div class='date '>20</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Thu'><div class='date '>21</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Fri'><div class='date '>22</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Sat'><div class='date '>23</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' May days Sun'><div class='date '>24</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Mon'><div class='date '>25</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Tue'><div class='date '>26</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Wed'><div class='date '>27</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Thu'><div class='date '>28</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Fri'><div class='date '>29</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td class=' May days Sat'><div class='date '>30</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
</tr><tr><td class=' May days Sun'><div class='date '>31</div><ol class='webReviewList'></ol><ol class='taVisists'></ol></td>
<td colspan='6'>&nbsp;</td></tr></table></article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>