

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>Assign - CS 142 (A) Advanced Web Design: CSS and Usability</title>
 <meta name="description" content="This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site."/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- https://rerickso.w3.uvm.edu/education/blackboard/css/base.css -->
<!-- https://algoldma.w3.uvm.edu/cs142/assignment4/algoldma.css -->
<link href="https://algoldma.w3.uvm.edu/cs142/assignment4/algoldma.css" rel="stylesheet" type="text/css" media="screen" />
<link href="https://algoldma.w3.uvm.edu/cs142/assignment4/print_algoldma.css" rel="stylesheet" type="text/css" media="print" />
<link href="css/mainAdmin.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="https://rerickso.w3.uvm.edu/education/blackboard/favicon.ico" >

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

<body id="assign">
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
<li class="menuLink activeLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
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
</ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside><div id="slide"><h1>Assignment: Style a Table</h1><h2>DUE: 2015-02-20</h2><h2>Submitted Status: Not submittted.</h2><h2>Category: Homework, Weight: 6.25%</h2><h2>Folder Name: assignment3</h2><p>Link to your assignment (when you have it posted): </p><p class='firstLine'><a href='https://algoldma.w3.uvm.edu/cs142/assignment3/table.php' target='_blank'>https://algoldma.w3.uvm.edu/cs142/assignment3/table.php</a></p> <h1>Assignment #1: Styling a table</h1> 

<ol>
    <li>Use my <a href="2015_Spring/cs142/assignments/table-source.php">table template</a> and create a style for it. You should name your file table.php as that is the name of my file (body id="table")</li>
    <li>Name your style sheet: table.css</li>
    <li>Create an alternate style: table2.css</li>
    <li>You cannot modify the html.</li>
    <li>You will be graded on the overall looks of your table.</li>
    
    <li>You can test your CSS by trying this link: (submitting your form from this site will not work so don't worry about that, we will have to go to your actual form)
        <a target="_blank" href="https://rerickso.w3.uvm.edu/education/blackboard/2015_Spring/cs142/assignments/table.php?url=//algoldma.w3.uvm.edu/cs142/assignment3&amp;style=table.css&amp;style2=table2.css">My table with Aidan L. Goldman's CSS</a>
</li>
        
    <li>Be sure all your pages:
	<ol>
            <li>have valid  css 3 (w3c.org standards).</li>
        </ol>
    </li>
    
    <li>You will be graded on the quality of <a href="peerGrade.php"> your peer grading</a>.  Peer grading needs to be completed in 48 hours from the due date.</li>
    
    
</ol>

<?

$_SESSION["classSite"]=false;

?>
</div> <!--  id="slide" --></article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>