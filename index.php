<?php
  $hub = array('hub-01.jpg', 'hub-02.jpg', 'hub-03.jpg', 'hub-04.jpg', 'hub-05.jpg', 'hub-06.jpg', 'hub-07.jpg', 
                'hub-08.jpg', 'hub-09.jpg', 'hub-10.jpg', 'hub-11.jpg', 'hub-12.jpg', 'hub-13.jpg', 
                'hub-14.jpg', 'hub-15.jpg', 'hub-16.jpg', 'hub-17.jpg', 'hub-18.jpg', 'hub-19.jpg', 
                'hub-20.jpg', 'hub-21.jpg', 'hub-22.jpg', 'hub-23.jpg', 'hub-24.jpg', 'hub-25.jpg', ); // array of filenames

  $i = rand(0, count($hub)-1); // generate random number size of the array
  $selectedHub = "$hub[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>

<title>Page Auto Redirect</title>

<meta http-equiv="refresh" content ="0; url=https://algoldma.w3.uvm.edu/cs142/assignment4/syllabus.php">

</head>

<body>

    <p>Redirecting to syllabus</p>
    <p>
        <a href='https://algoldma.w3.uvm.edu/cs142/assignment4/syllabus.php'>Direct link</a>
    </p>

</body>

</html>