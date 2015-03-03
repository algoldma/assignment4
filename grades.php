
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>Grades - CS 142 (A) Advanced Web Design: CSS and Usability</title>
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

<body id="grades">
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
<span id="studentGrade" >Current <a href="https://rerickso.w3.uvm.edu/education/blackboard/grades.php">Grade</a>: 78</span>
<span id="classRank">
Rank: 28 of 44
</span>
</aside> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
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
######################## -->Website: <a target='_blank' href='https://algoldma.w3.uvm.edu/cs142/sitemap.php'> Aidan L. Goldman</a> | <span><a href="grades.php?email=N">Unsubscribe</a> (auto notification when assignment is graded)</span><table class="standard" cellspacing="0" cellpadding="4" border="1" width="100%">
<tr><td colspan='4'>Rank 28 of 44</td></tr><tr><td colspan='4'>Your Current Grade: 78</td></tr><tr><td colspan='4' class=''><form action='grades.php' method='post'><label for='hypoGrade'>Hypothetical Grade on the rest of the assignments: </label><input type='text' id='hypoGrade' name='hypoGrade' size='5' maxlength='3' value='100' /><input type='submit' id='butSubmit' name='butSubmit' value='What if'/><br/><br/>Potentional Grade: 90</td></tr><tr><td colspan='4'>You are allowed one late assignment</td></tr><tr><td colspan='4' style=''>Number of classes not present(includes Game Day, Personal Day, Sick Day):  </td></tr><tr><th class="NotGraded">Not Graded</th><th class="GradingStarted">Grading in progress</th><th class="GradesReleased" style="width: 200px;">Grades Released</th><th>Class Average</th></tr><tr><th>Category</th><th>Your Grade</th><th>Comments</th><th>Class Average</th></tr><tr class="GradesReleased 22"><td class="category">Style a Form <span class='percent'> 6.25%</span></td><td class="grade ">82</td><td class="comments"><br />
The overall look worked well with the form. The text can be read well with the colors chosen. The font is a good size. Some of the text boxes overlap in the form. There also does not seem to be a main index.php. The css does not pass validation but html does. <br /><br />
-Where&#039;s your sitemap.php?-8%<br /><br />
-sitemap.xml missing sitemap.php. -2%<br /><br />
-You have no navigation bar. -7%<br /><br />
-I like the background effect you have going.<br /><br />
-you reused some of example code blatantly without any change. -2%<br /><br />
-alternate form look is real nice.<br /><br />
-8-7-2-2= 81%<br /><br />
Form was hard to find, sitemap didnt&#039;t exist<br /><br />
form looks nice, validates<br /><br />
no navigation. Alternate looks very good too<br /><br />
Form works, sends email<td class="avggrade"> 76.4</td><tr class="GradesReleased 23"><td class="category">Exam I <span class='percent'> 5%</span></td><td class="grade ">70.6</td><td class="comments"><br />
<td class="avggrade"> 70.4</td><tr class="GradesReleased 24"><td class="category">Styling a Resume <span class='percent'> 6.25%</span></td><td class="grade ">80</td><td class="comments"><br />
standard items 10/10. Student updated the sitemap and all links worked. <br /><br />
validation 7/10. Everything validated except the professional style sheet.<br /><br />
student resume 20/20. The resume looked good and was easy to read. The content was good also. The student has good work experience. I would invite this person for an interview. <br /><br />
print style sheet 15/20. Some of the information was clumped up in print preview and a few things overlapped. The resume fit on one page which is good.<br /><br />
pro style sheet 30/30. The css rules were combined well and the resume looked good. The content was easy to read with the colors used. There also wasn&#039;t too much css used where it took away from the content. <br /><br />
alternative style sheet 8/10.  The alternative style was a little plain but different than the professional style sheet. The student could have been a little more creative but this works well for a resume. <br /><br />
-Does not pass validation<br /><br />
-Professional: Looks professional and clean, however the grey background is rather depressing<br /><br />
-Alternate: Love how the sections were put into two columns, is bland though<br /><br />
-Print: Fits on one page, things are squished though<br /><br />
<br /><br />
HTML Validation (PASS)<br /><br />
CSS Validation (PASS)<br /><br />
Basic Requirements (PASS)<br /><br />
<br /><br />
Overall Desgin:<br /><br />
Professional. Could be styled a little more deeply.<br /><br />
- Links could be changed colors.<br /><br />
- Sizing of &#039;Course of Study&#039; shouldn&#039;t be larget than all other text.<br /><br />
- Sizing is scaleable, but name overlaps address at points.<br /><br />
- Links work as intended, and direct you to the correct locations. Would be in the best interest to add a target=&quot;_blank&quot; to links, so that viewers can revisit your resume.<br /><br />
- No picture (may be intended).<br /><br />
<br /><br />
Alternate Style Sheet:<br /><br />
- Very plain, no color, not very creative.<br /><br />
- Right column of boxes (Skills, Education, and Course of Study) do not align correctly with the left column. (1980x1080)<br /><br />
- Text is of various sizing, making it confusing.  You seem to want to draw more attention to your interests and Course of Study, rather than your other important qualities.<br /><br />
<br /><br />
Print Style Sheet:<br /><br />
- Seems to do its job.<br /><br />
<br /><br />
Grader: Alternate style is very plain. Adding a bit more color and changing the link colors to something new would look much better.<td class="avggrade"> 82.3</td><tr class="NotGraded 25"><td class="category">Style a Table <span class='percent'> 6.25%</span></td><td class="grade ">0</td><td class="comments"><br />
<td class="avggrade"> 0</td><tr class="NotGraded 26"><td class="category">Exam II <span class='percent'> 5%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 27"><td class="category">Redesign the Course Style <span class='percent'> 10%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 29"><td class="category">Exam III <span class='percent'> 5%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 28"><td class="category">Style Before and After <span class='percent'> 6.25%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 30"><td class="category">Web Usability Testing <span class='percent'> 15%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 31"><td class="category">Exam IV <span class='percent'> 5%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 32"><td class="category">Attendance <span class='percent'> 10%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td><tr class="NotGraded 33"><td class="category">Final Project 12:00 am <span class='percent'> 20%</span></td><td class="grade ">0</td><td class="comments"><td class="avggrade"> 0</td></tr>
</table></form></td></tr></table></article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>

