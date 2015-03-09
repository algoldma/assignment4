
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>Media - CS 142 (A) Advanced Web Design: CSS and Usability</title>
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

<body id="media">
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
<span id="studentGrade" >Current <a href="grades.php">Grade</a>: 78</span>
<span id="classRank">
Rank: 28 of 45
</span>
</aside> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink activeLink activeLink"><a href="media.php">Resources</a></li>
<li class="menuLink"><a href="sick.php">Sick</a></li>
<li class="menuLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
</div> <!-- ************ top box ************ -->
<!-- place admin menu code here -->
<!-- userlevel = 1.5  -->
<article id="mainContent"> <!-- ######################## main Content 
######################## --><aside id="upcoming"><h1>Milestones</h1><div class="box"><h1>Assignment </h1><ol class="AssignmentLink"><li class="title summary"><a class="url" href="assign.php?pid=27">Redesign the Course Style</a> Friday the 13th</li></ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside><h1>List of all Additional Resources</h1><h1>crn: 152</h1>

<aside id="otherMedia">

<h1>Additional Notes:</h1>

	<ol>

<li class="link 114">
<figure>
<a href="http://css-tricks.com/what-beautiful-html-code-looks-like/" target="_blank">
<img src="media/link.gif" alt="External">
Beautiful Html Code</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 70">
<figure>
<a href="http://colorschemedesigner.com/" target="_blank">
<img src="media/link.gif" alt="External">
Color Schemes for Designers</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 68">
<figure>
<a href="http://www.colormatters.com/color-and-design/basic-color-theory" target="_blank">
<img src="media/link.gif" alt="External">
Color Theory</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 69">
<figure>
<a href="http://www.smashingmagazine.com/2010/01/28/color-theory-for-designers-part-1-the-meaning-of-color/" target="_blank">
<img src="media/link.gif" alt="External">
color theory for designers</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 126">
<figure>
<a href="http://css-tricks.com/complete-guide-table-element/" target="_blank">
<img src="media/link.gif" alt="External">
complete guide table element</a>

</figure>

(CSS: Ch 11, 12, 13)
</li>

<li class="link 23">
<figure>
<a href="http://css-tricks.com/attribute-selectors/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Attribute selectors</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 66">
<figure>
<a href="http://css-tricks.com/almanac/properties/b/border-radius/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Border Radius</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 67">
<figure>
<a href="http://www.css3.info/preview/rounded-border/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Border Radius</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 65">
<figure>
<a href="http://www.w3schools.com/css/css_boxmodel.asp" target="_blank">
<img src="media/link.gif" alt="External">
CSS Box Model</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 25">
<figure>
<a href="http://css-tricks.com/child-and-sibling-selectors/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Child and Sibling Selectors</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 57">
<figure>
<a href="http://webdesign.tutsplus.com/articles/choosing-the-right-font-a-practical-guide-to-typography-on-the-web/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Choosing the right font</a>

</figure>

(CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting)
</li>

<li class="link 26">
<figure>
<a href="http://www.stevesouders.com/blog/2009/04/09/dont-use-import/" target="_blank">
<img src="media/link.gif" alt="External">
CSS don't use @import</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 73">
<figure>
<a href="http://developer.mozilla.org/en-US/docs/CSS/Using_CSS_flexible_boxes" target="_blank">
<img src="media/link.gif" alt="External">
CSS Flexiable Boxes</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 54">
<figure>
<a href="http://www.alternategateways.com/tutorials/css/css-101/part-eight-css-font-and-text-properties" target="_blank">
<img src="media/link.gif" alt="External">
CSS Font and text</a>

</figure>

(CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting)
</li>

<li class="link 71">
<figure>
<a href="http://alistapart.com/article/css-positioning-101" target="_blank">
<img src="media/link.gif" alt="External">
CSS Positioning 101</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 72">
<figure>
<a href="http://www.barelyfitz.com/screencast/html-training/css/positioning/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Positioning in Ten Steps</a>

</figure>

(CSS: Ch 8, 9, 10)
</li>

<li class="link 41">
<figure>
<a href="http://css-tricks.com/specifics-on-css-specificity/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Specificity</a>

</figure>

(CSS: Ch 3, 4: Structure and the Cascade, Units)
</li>

<li class="link 42">
<figure>
<a href="http://css-specificity.webapp-prototypes.appspot.com/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Specificity Calculator</a>

</figure>

(CSS: Ch 3, 4: Structure and the Cascade, Units)
</li>

<li class="link 40">
<figure>
<a href="http://sixrevisions.com/css/css-typography-01/" target="_blank">
<img src="media/link.gif" alt="External">
CSS typography</a>

</figure>

(CSS: Ch 3, 4: Structure and the Cascade, Units)
</li>

<li class="link 24">
<figure>
<a href="http://meyerweb.com/eric/articles/webrev/200006a.html" target="_blank">
<img src="media/link.gif" alt="External">
CSS Universal selector</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 116">
<figure>
<a href="http://woork.blogspot.com/2008/06/clean-and-pure-css-form-design.html" target="_blank">
<img src="media/link.gif" alt="External">
CSS: Form design (Tutorial)</a>

</figure>

(Style a Form)
</li>

<li class="link 44">
<figure>
<a href="http://www.w3.org/Style/Examples/007/units.en.html" target="_blank">
<img src="media/link.gif" alt="External">
em, px, pt, cm, in ...</a>

</figure>

(CSS: Ch 3, 4: Structure and the Cascade, Units)
</li>

<li class="link 53">
<figure>
<a href="http://5by5.tv/bigwebshow/79" target="_blank">
<img src="media/link.gif" alt="External">
Eric Meyer interview</a>

</figure>

(CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting)
</li>

<li class="link 56">
<figure>
<a href="http://developers.google.com/webfonts/docs/getting_started" target="_blank">
<img src="media/link.gif" alt="External">
Google Web Fonts</a>

</figure>

(CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting)
</li>

<li class="link 87">
<figure>
<a href="http://www.ssbbartgroup.com/blog/2013/01/02/how-browsers-interact-with-screen-readers-and-where-aria-fits-in-the-mix/" target="_blank">
<img src="media/link.gif" alt="External">
How Browsers Interact with Screen Readers and Where ARIA Fits in the Mix </a>

</figure>

(CSS: Ch 14)
</li>

<li class="video 141">
<figure><a href="https://www.youtube.com/watch?v=oW0KFCNeFA4" target="_blank">

<img src="media/video.png" alt="video file: 
How screen readers speak a simple HTML5 page"> 
How screen readers speak a simple HTML5 page
</a></figure>

(CSS: Ch 14)
</li>

<li class="link 43">
<figure>
<a href="http://www.alistapart.com/articles/howtosizetextincss/" target="_blank">
<img src="media/link.gif" alt="External">
How to Size Text in CSS</a>

</figure>

(CSS: Ch 3, 4: Structure and the Cascade, Units)
</li>

<li class="link 19">
<figure>
<a href="http://html5doctor.com/happy-1st-birthday-us/#flowchart" target="_blank">
<img src="media/link.gif" alt="External">
HTML 5 Doctor structural flow chart</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="link 90">
<figure>
<a href="http://www.the-art-of-web.com/html/html5-form-validation/" target="_blank">
<img src="media/link.gif" alt="External">
HTML5 Form Validation Examples</a>

</figure>

(Style a Form)
</li>

<li class="video 139">
<figure><a href="video/netbeans-and-git" target="_blank">

<img src="media/video.png" alt="video file: 
Netbeans and Git"> 
Netbeans and Git
</a></figure>

(Style a Form)
</li>

<li class="video 138">
<figure><a href="video/netbeans-setup" target="_blank">

<img src="media/video.png" alt="video file: 
Netbeans Setup"> 
Netbeans Setup
</a></figure>

(Style a Form)
</li>

<li class="link 35">
<figure>
<a href="http://www.w3.org/TR/CSS2/selector.html#selector-syntax" target="_blank">
<img src="media/link.gif" alt="External">
Selector syntax</a>

</figure>

(CSS: Ch 1, 2: CSS and Documents, Selectors)
</li>

<li class="video 137">
<figure><a href="video/silk" target="_blank">

<img src="media/video.png" alt="video file: 
Silk Hosting"> 
Silk Hosting
</a></figure>

(Style a Form)
</li>

<li class="link 127">
<figure>
<a href="http://coding.smashingmagazine.com/2008/08/13/top-10-css-table-designs/" target="_blank">
<img src="media/link.gif" alt="External">
Table Designs</a>

</figure>

(CSS: Ch 11, 12, 13)
</li>

<li class="link 117">
<figure>
<a href="http://designshack.net/articles/10-css-form-examples/" target="_blank">
<img src="media/link.gif" alt="External">
Ten CSS form examples</a>

</figure>

(Style a Form)
</li>

<li class="link 118">
<figure>
<a href="http://designpotato.com/30-useful-html5-and-css3-form-designs/" target="_blank">
<img src="media/link.gif" alt="External">
Thirty Form Designs</a>

</figure>

(Style a Form)
</li>

<li class="link 153">
<figure>
<a href="http://www.freedomscientific.com/downloads/demo/FS-demo-downloads.asp" target="_blank">
<img src="media/link.gif" alt="External">
Trial version of Jaws</a>

</figure>

(CSS: Ch 14)
</li>

<li class="link 52">
<figure>
<a href="http://designshack.net/articles/typography/typography-101-understanding-the-anatomy-of-a-letter/" target="_blank">
<img src="media/link.gif" alt="External">
Typography 101</a>

</figure>

(CSS: Ch 5, 6, 7: Fonts, Text, Basic Visual Formatting)
</li>

<li class="link 119">
<figure>
<a href="http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag/" target="_blank">
<img src="media/link.gif" alt="External">
Viewport meta tag</a>

</figure>

(Style a Form)
</li>

	</ol>

</aside> <!--  id="otherMedia"  -->
</article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>