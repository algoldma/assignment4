
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>Lecture - CS 142 (A) Advanced Web Design: CSS and Usability</title>
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

<body id="lecture">
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
######################## --><aside id="upcoming"><h1>Milestones</h1><div class="box"><h1>Assignment </h1><ol class="AssignmentLink"><li class="title summary"><a class="url" href="assign.php?pid=27">Redesign the Course Style</a> Friday the 13th</li></ol></div><div class="box"><h1>Test </h1><ol class="examLink"><li class="title summary">Exam II Wednesday the 25th</li></ol></div></aside><p>CRN: 11783 MWF starting at 12:50 to 01:40 in room KALKIN 001</p>


<aside id="otherMedia">

<h1>Additional Notes:</h1>

	<ol>

<li class="link 19">
<figure>
<a href="http://html5doctor.com/happy-1st-birthday-us/#flowchart" target="_blank">
<img src="media/link.gif" alt="External">
HTML 5 Doctor structural flow chart</a>

</figure>

</li>

<li class="link 114">
<figure>
<a href="http://css-tricks.com/what-beautiful-html-code-looks-like/" target="_blank">
<img src="media/link.gif" alt="External">
Beautiful Html Code</a>

</figure>

</li>

<li class="link 23">
<figure>
<a href="http://css-tricks.com/attribute-selectors/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Attribute selectors</a>

</figure>

</li>

<li class="link 24">
<figure>
<a href="http://meyerweb.com/eric/articles/webrev/200006a.html" target="_blank">
<img src="media/link.gif" alt="External">
CSS Universal selector</a>

</figure>

</li>

<li class="link 25">
<figure>
<a href="http://css-tricks.com/child-and-sibling-selectors/" target="_blank">
<img src="media/link.gif" alt="External">
CSS Child and Sibling Selectors</a>

</figure>

</li>

<li class="link 26">
<figure>
<a href="http://www.stevesouders.com/blog/2009/04/09/dont-use-import/" target="_blank">
<img src="media/link.gif" alt="External">
CSS don't use @import</a>

</figure>

</li>

<li class="link 35">
<figure>
<a href="http://www.w3.org/TR/CSS2/selector.html#selector-syntax" target="_blank">
<img src="media/link.gif" alt="External">
Selector syntax</a>

</figure>

</li>

	</ol>

</aside> <!--  id="otherMedia"  -->

<h1>Lecture Notes: CSS: Ch 1, 2: CSS and Documents, Selectors</h1>
<article id="slide"><ol>
    <li>Welcome to the class :)
        <ol>
            <li><a href="http://www.uvm.edu/~rerickso/">Robert M. Erickson</a> feel free to call me Bob.</li>
            <li>Castleton State College (BS in CIS, 1987)<br />
                Clarkson University (MS in MIS, 1991)</li>
            <li>What do you expect?</li>    
        </ol>

    </li>


    <li>Syllabus - be sure to read all of it.</li>
    <li> The basic structure of almost all elements (tags)
        <ol>
            <li>&lt; Opening bracket</li>
            <li>Tag name (i.e. body)</li>
            <li>tag attribute=&quot;value&quot; (i.e. bgcolor=&quot;#ffffff&quot;)</li>
            <li>&gt; Closing bracket</li>
        </ol>
    </li>

    <li>Basic structure of a web page: (important NOTE Document type and Meta tags, required for validation.) <br />
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;color:black;background:white;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
            <pre style="margin: 0; line-height: 125%"><span style="color: #4c8317">&lt;!DOCTYPE html&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;html</span> <span style="color: #1e90ff">lang=</span><span style="color: #aa5500">&quot;en&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;head&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;title&gt;</span>google link text (up to 64 characters)<span style="color: #1e90ff; font-weight: bold">&lt;/title&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;meta</span> <span style="color: #1e90ff">charset=</span><span style="color: #aa5500">&quot;utf-8&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;meta</span> <span style="color: #1e90ff">name=</span><span style="color: #aa5500">&quot;author&quot;</span> <span style="color: #1e90ff">content=</span><span style="color: #aa5500">&quot;Your Name&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;meta</span> <span style="color: #1e90ff">name=</span><span style="color: #aa5500">&quot;description&quot;</span> <span style="color: #1e90ff">content=</span><span style="color: #aa5500">&quot;&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
    
<span style="color: #1e90ff; font-weight: bold">&lt;link</span> <span style="color: #1e90ff">rel=</span><span style="color: #aa5500">&quot;stylesheet&quot;</span>
	  <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;style.css&quot;</span>
      <span style="color: #1e90ff">media=</span><span style="color: #aa5500">&quot;screen&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>

<span style="color: #aaaaaa; font-style: italic">&lt;!--[if lt IE 9]&gt;</span>
<span style="color: #aaaaaa; font-style: italic">    &lt;script src=&quot;//html5shim.googlecode.com/sin/trunk/html5.js&quot;&gt;&lt;/script&gt;</span>
<span style="color: #aaaaaa; font-style: italic">&lt;![endif]--&gt;</span>
    
<span style="color: #1e90ff; font-weight: bold">&lt;/head&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;body</span> <span style="color: #1e90ff">id=</span><span style="color: #aa5500">&quot;nameOfFile&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########   comment to separate source code    ################## --&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;header&gt;</span>
    <span style="color: #1e90ff; font-weight: bold">&lt;h1&gt;</span>main title for site<span style="color: #1e90ff; font-weight: bold">&lt;/h1&gt;</span>
    <span style="color: #1e90ff; font-weight: bold">&lt;h2&gt;</span>Tag line<span style="color: #1e90ff; font-weight: bold">&lt;/h2&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;/header&gt;</span>

<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########   comment should have something     ################## --&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;nav&gt;</span>
     <span style="color: #1e90ff; font-weight: bold">&lt;ol&gt;</span>
     	<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;activePage&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Home<span style="color: #1e90ff; font-weight: bold">&lt;/li&gt;</span>
        <span style="color: #1e90ff; font-weight: bold">&lt;li&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;about.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>About<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
        <span style="color: #1e90ff; font-weight: bold">&lt;li&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;stuff.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Stuff<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>    
     <span style="color: #1e90ff; font-weight: bold">&lt;/ol&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;/nav&gt;</span>

<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########   meaningful about what this part   ################## --&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;article</span> <span style="color: #1e90ff">id=</span><span style="color: #aa5500">&quot;main&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;h1&gt;</span>main title for page<span style="color: #1e90ff; font-weight: bold">&lt;/h1&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;p&gt;</span>What ever you want to say goes here<span style="color: #1e90ff; font-weight: bold">&lt;/p&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;/article&gt;</span>
<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########  search for  html5 article vs section  ################## --&gt;</span>

<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########   is all about                      ################## --&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;aside</span> <span style="color: #1e90ff">id=</span><span style="color: #aa5500">&quot;rightColumn&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;h2&gt;</span>Extra info<span style="color: #1e90ff; font-weight: bold">&lt;/h2&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;p&gt;</span>Whatever you want to say that is<span style="color: #1e90ff; font-weight: bold">&lt;/p&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;/aside&gt;</span>

<span style="color: #aaaaaa; font-style: italic">&lt;!-- ###########                                     ################## --&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;footer&gt;</span>
    <span style="color: #1e90ff; font-weight: bold">&lt;p&gt;</span>Your name maybe<span style="color: #1e90ff; font-weight: bold">&lt;/p&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;/footer&gt;</span>

<span style="color: #1e90ff; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;/html&gt;</span>
            </pre></div>
    </li>


    <li>html - defines the structure and content of your web site. It may be handy for you to review what beautiful html code looks like.
    </li>

    <li>CSS - defines the look (html defines the content)
        <ol>

            <li>Create style rules to define the look. the format is always:<br />
                <pre>selector { property: value; [property: value;]}</pre>
                <br/><br/>
                for example:<br />
                <pre>body { background-color: #ffffff;}</pre>
            </li>

            <li>In this class we only use <b><a href="2014_Spring/cs142/lectures/samples/StyleSheet.html">Linked Style Sheets</a></b> (be sure to look up reset style sheet).
                <pre>
&lt;link rel=&quot;stylesheet&quot;
	  href=&quot;notestyle.css&quot;
	  type=&quot;text/css&quot; /&gt;</pre>
                <br />
                The file is called notestyle.css and only has the style and no html tags at all.
            </li>

            <li>There can be conflicting CSS rules and here is where the 'cascade' comes into place. A simple rule of thumb is that css rule closest to the tag will take precedence so the order is in-line, document, linked sheet.</li> 


            <li><b>class</b> selector, always preceded by a period. For example:
                <br />Class specifically for a paragraph element: <pre>p.first { text-indent: 0.5in; }</pre>
                <br />General class that can be used for any element: <pre>.first { text-indent: 0.5in; }</pre>

                <br />Creates a class named <b>first</b> for the paragraph tag that indents the first line 0.5 inches and in the second example it a generic class that can be used on any element that will allow a text-indent.

                <p style="text-indent: 0.5in;" />This line is indented. Notice how the effect does not carry over to the second line. This is why I named it 'first' for first line indent! You use this class by using the class attribute of the tag:

                <pre>&lt;p class=&quot;first&quot;&gt;This line is indented. ...</pre>
            </li>

            <li>An Id CSS rule will take precedence over a class rule no matter where it is located.<ol>
                    <li>Begins with a #, for example<br/>
                        <pre>#menu{background-color: #fff000;}</pre></li>
                    <li>The rule is to use the id once in a page, but can be used on every page. the id attribute is used for css the name attribute is used for when you submit your form</li>
                </ol></li>

            <li>The universal selector - See Eric Meyer's link as he wrote the book on CSS, he is an expert, i am not :(</li>

            <li>Attribute Selection - useful for testing your site. One of those possibilities that if you can remember it can be very handy. Lots of power for formatting items that are common (for example the image with a title of Figure ... (page 42 and 43 CSS) <code>a[target="_blank"]</code></li>

            <li>parent child relationships - each element fits in a particular place in the overall structure of the document (see pages 44 and 45 CSS)</li>

            <li><span class="highlight">Descendant Selectors</span> - create rules that operate only in certain structural circumstances. For example a link located in menu block but not the other links.
                <br/><code>#menu a{color: blue;}</code><br/></li>

            <li><span class="highlight">Selecting Children</span> - you just want to to style a child of a particular parent you use the child combinator >. Child selectors are just restricted descendant selectors. So in this case only strong element inside the h1 element<br />
                <code>h1 > strong {color: #ff0000;}</code></li>

            <li><code><a href="2015_Spring/cs142/lectures/samples/ch1-sampleCSS.php">Example:</a> ul li {border: 1px solid red;}</code><br />
                <br />
                This will put a border around all the &lt;li&gt; elements:<br />
                <br /><code>
                    &lt;ul&gt;<br />
                    &lt;li&gt;Apple<br />
                    &lt;ol&gt;<br />
                    &lt;li&gt;Macintosh&lt;/li&gt;<br />
                    &lt;li&gt;Empire&lt;/li&gt;<br />
                    &lt;/ol&gt;<br />
                    &lt;/li&gt;<br />
                    &lt;/ul&gt;</code><br />
                <br />
                Change the rule to the child selector:<br />
                <br />
                <code>ul &gt; li {border: 1px solid red;}</code><br />
                <br />
                And there will be just one border around Apple (try it though).<br /></li>
            <li><span class="highlight">Adjacent Sibling Elements</span> - elements that are next to each other or follow each other like a paragraph following a heading one.<br/>
                <code>h1 + p {margin-top: 0;}</code></li>


            <li><span class="highlight">Pseudo-Class</span> - uses a colon instead of a period,supported for the anchor tag.
                <br />a:link
                <br />a:visited
                <br />a:hover
                <br />a:active
            </li>
        </ol>
    </li>

    <li>Sample CSS: What does it do?
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #1e90ff; font-weight: bold">fieldset</span><span style="color: #00aa00; text-decoration: underline">.contact</span> &gt; <span style="color: #1e90ff; font-weight: bold">input</span> + <span style="color: #1e90ff; font-weight: bold">label</span><span style="color: #888888">:before</span>{
    <span style="color: #0000aa">content</span>:<span style="color: #aa5500">&quot;\a&quot;</span>;
    <span style="color: #0000aa">white-space</span>: pre;
}
            </pre></div>
    </li>

    <li>I would suggest trying the CSS rules in the chapters to see how they work and to help you understand and remember them. The rules are how we style everything without using inline styles. It is also important to have every page's body tag with an id.</li>

    <li>PHP form. Look at the different sections
        <ol>
                <li>Section One Initialize variables
                    <ol>
                        <li>1.a is just for the classroom to make it easier for us to help you</li>
                        <li>1.b is used for a security error check in security.php, the variables used are defined in top.php</li>
                        <li>1.c is where you will have one variable for every object on your form (exception is only one variable for each radio button group). You would initialize the values to the default value you want when the form goes live. Often during develop i put my email address (and other information) in just so i don't have to type it. be sure to check how it works with the live default values. Not we print these variables out in the form. See line 298 and line 305. Note that the order i initialize the variables is the same order that they appear on the form. We follow this order throughout the code.</li>
                        <li>1.d is where you will have one variable for each form object you are going to check for errors, we assume there are no errors at first. You should notice in section 2.d that if there is an error this flag gets set to true. Then notice in the form itself lines 300 and line 307 that we have php write a class to identify a mistake for this object, which will be styled with css, lines 82 to 86 (style.css) so that it is clear to the user where the mistake is at.</li>

                    </ol>
                </li>
                
                <li>Section Two Process the form
                    <ol>
                        <li>2.a starts off by calling a function that performs a security check. This security check looks to see if the form was sent to itself (the if statement to see if this is a form, is so that we can use the security check for other pages). It would be expected that this function expands as you learn more about security.</li>
                        <li>2.b initializes an array variable to collect any error messages that we have. I also create an array to hold the data from the form. This example is going to save the data to a csv though more likely you would be saving the data to a sql table of some sorts.</li>
                        <li>2.c initializes the same variables from section 1.c, in the same order, to the values that are coming from our form. In each case you want to make sure you are getting rid of any malicious code someone may try to send in. For first name i am using htmlentities which would not allow &lt;strong&gt;Bob&lt;/strong&gt; and do the same for any other html elements. For email I am using the php sanitize filters (<a href="http://www.php.net/manual/en/filter.filters.sanitize.php" target="_blank">http://www.php.net/manual/en/filter.filters.sanitize.php</a>). I also place the sanatized value into my data record array, though i am not saving the data at this point. You would do this for each piece of data even if you are using a list box, or radio button that was sending a value you placed in. Never trust any data coming from the browser.</li>
                        <li>2.d is a meaty section where we check each item for each error that we want to check for. However the approach here is look for the first error (ie its empty) and not check any other errors for this item. In each case the logic is the same. The if statement asks checks to see if that error exists, when it does we put an appropriate message to display to the user in the errormsg array and flag this object as having an error. If the value passes the first error we then check the second. It is important to note that we check for errors in the same order that the objects appear on the form so that any error messages will appear in the same order.</li>
                        <li>2.e is a big section on what we do when there are no mistakes and encompasses sections 2.f to 2.h, ie when the errormsg array has nothing in it.</li>
                        <li>2.f loops through the post array and creates a message containing the name of your object and the value that was submitted. It does relate to my convention of using a three letter prefix for all objects and camel case naming convention, ie. txtFirstName. I remove the first 3 letters and break the camel case apart into two words, ie First Name, so the display looks better. You can also use if statements to take out btnSubmit and customize the display a little more. I store this in a variable that i will use in sections 2.h and 3.b</li>
                        <li>2.g just takes the data in the data array and saves it to a csv file in the data folder. SO i only save the data if the data sent to me was all valid. Depending on your server set up you may need to manually create the file and set the permissions for it. I believe on our SILK host you don't need to do anything but create the folder. optionally this section 2.g could save the data to a database.</li>
                        <li>2.h is how we mail a copy of the information to the user who filled it out. I never recommend having any mail sent via CC to yourself as it would expose your email address to everyone filling out the form. It is important to change the $from and $subject to reflect your site.</li>
                    </ol>
                    
                </li>
                
                 <li>Section Three Display the form
                    <ol>
                        <li>3.a just starts the article container to hold our html form.</li>
                        <li>3.b is a block to provide the user with an on screen copy of what information they have sent. Lines 221 and 229 do the same thing really so choose which wording you would like. It is line 237 that displays the contents of the email message that is sent.</li>
                        <li>3.c displays the error messages if there are any (the first visit to the form there are none). The errors are listed in the order they happen which should be the same order the objects appear on the form provided you followed my coding style. The id gives you the css hook.</li>
                        <li>3.d is our html form.</li>
                    </ol>
                    
                </li>
        </ol>
    </li>
</ol>
</article>
</article> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</body>
</html>