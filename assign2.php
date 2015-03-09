

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
</ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside><div id="slide"><h1>Assignment: Styling a Resume</h1><h2>DUE: 2015-02-06</h2><h2>Submitted Status:  Date Submitted: Feb 06, 2015</h2><h2>Category: Homework, Weight: 6.25%</h2><h2>Folder Name: assignment2</h2><p>Link to your assignment (when you have it posted): </p><p class='firstLine'><a href='https://algoldma.w3.uvm.edu/cs142/assignment2/resume.php' target='_blank'>https://algoldma.w3.uvm.edu/cs142/assignment2/resume.php</a></p> <h1>Assignment #2: Creating a Resume</h1>
<p><a href="peerCriteria.php?pid=24" target="_blank">Grading Criteria</a> NOTE: grading criteria subject to change until grading is open. Feel free to comment in class.</p><ol>
    <li>Use my <a href="http://www.uvm.edu/~rerickso/education/resume/">template</a> and create a resume for yourself name this file resume.php.</li>
    <li>Remove the document style and create a linked style sheet named resume.css.</li>
    <li>Modify the style sheet to come up with a totally different look that you like. I want two different looks, one professional (resume.css) and one creative (resume2.css) style sheet where anything goes!.</li>
    <li>Use the alternate style sheet tags so you only need one php file (see page 16 CSS).</li>
    <li>You should not make any changes to the html tags, only content (you can add more sections as needed using the correct existing elements. I want to be able to look at my resume with your style sheet.</li>
    <li>If you use images be sure to use an absolute url so it works when we grade it</li>
    <li>Create a print style (print.css) sheet so your documents look good printed.
    <li>Be sure all your pages:
	<ol>
            <li>have valid html 5 and css 3 (w3c.org standards).</li>
            <li>have the following Meta tags: author, content, description.</li>
        </ol>
    </li>
    <li>You can test your CSS by trying this link: 
        <a target="_blank" href="https://rerickso.w3.uvm.edu/education/blackboard/2015_Spring/cs142/assignments/resume.php?url=//algoldma.w3.uvm.edu/cs142/assignment2&amp;style=resume.css&amp;style2=print.css">My resume with Aidan L. Goldman's CSS</a>
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