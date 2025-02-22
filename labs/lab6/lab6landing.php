<?php
  include('../../Quiz3/includes/conn.php');
  include('../../Quiz3/includes/headernav.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
   <title>ITWS1100 Lab 6 : jQuery</title>
   <meta charset="UTF-8" >
   <meta name= viewport content="width=device-width, initial-scale=1.0" >
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script> ></script>
   <script type="text/javascript" src="../../Resources/lab8jQuery.js"></script> 
   <script src="lab6.js"></script>
   <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
   <script type="text/javascript" src="../../Quiz3/resources/mysite.js"></script>
   <link rel="stylesheet" href="../../Resources/site.css" type="text/css" >
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>
   <div class="header">
      <a href ="./aboutMe.html"><img src="../../Resources/logo.png" alt="Arielle Revis Logo"></a>
      <div class="headerContents">
      <h1><strong>Arielle Revis Portfolio</strong></h1>
      <h2><em>The one-stop shop to all things 'Arielle'</em></h2>
   </div>
   <div class="ui-widget">
      <label for="labsearch">Lab Search: </label>
      <input id="labs">
   </div>
 </div>
   <div class="navbar">
    <div class="navLinks"><a href="../../aboutMe/aboutMe.html">About Me</a></div>
    <div class="navLinks"><a href="../../Resume/rsmeLanding.html">Resume</a></div>
    <div class="prjtLabs">
      <button class="prjtLabsBtn">Projects & Labs</button>
      <div class="prjtLabsContent">
      </div>
    </div>
    <div class="navLinks"><a href="http://revisarpi.eastus.cloudapp.azure.com/grpDir">Group Directory</a></div>
    <div class="navLinks"><a href="../contactInfo/cntct.html">Contact Info</a></div>
  </div> -->
  <head><script src="lab6.js"></script></head>
  <div class="lab6tests">
      <h1>In this lab we utilized jquery to create interactive user elements. Here are a couple of tests you can do!</h1>
      <ul>
         <li>Click the <em>"Your Name"</em></li>
         <li>Click lab 6 button</li>
         <li>Click the <em>"Add list item"</em></li>
         <li>Click the list items themselves (2 times!)</li>
         <li>Click <em>"Hide Text"</em>, <em>"Show Text"</em>, and <em>"Toggle Text"</em> buttons</li>
      </ul>
  </div>

   <div class="bodyBlock">
      <p>
         <button type="button" id="labButton">Lab 6 Button</button>
      </p>
      <p>
         <button type="button" id="AddListItem">Add list item</button>
      </p>
      <h1>Lab 6: <em class="myName">Your Name</em></h1>

      <ul id="labList">
         <li>List item 1</li>
         <li>List item 2</li>
         <li>List item 3</li>
         <li>List item 4</li>
         <li>List item 5</li>
      </ul>

      <div id="showHideBlock">
         <div id="showHideLinks">
            <a href="#" id="toggleText">Toggle Text</a>
            <a href="#" id="hideText">Hide Text</a> |
            <a href="#" id="showText">Show Text</a>
         </div>
         <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
            ullamcorper metus sit amet velit ultrices quis congue nisl mollis.
            Proin nec orci eget nisl vehicula elementum. Vestibulum ante ipsum
            primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Phasellus lacinia dui sed diam tempor volutpat. Aliquam rutrum, urna
            vel dictum posuere, lacus magna imperdiet ligula, a imperdiet tellus
            sapien ac tellus. Sed bibendum adipiscing euismod. Phasellus sed
            adipiscing libero. Donec ut arcu tortor, non fringilla magna.
            Suspendisse vel ante arcu. Quisque ut dolor eget sem varius rhoncus
            fringilla ac ipsum. Nullam eget erat augue, consequat laoreet tellus.
            In et aliquet neque. Maecenas in erat turpis, id porta lectus. Sed
            vulputate, turpis vel pharetra tincidunt, quam nisi lacinia massa,
            sit amet hendrerit dolor mauris sed quam. Cras et eros sed nulla
            posuere sodales.
         </p>
         <p>
            Nunc vel lectus a mi suscipit cursus vitae vel metus. Ut vitae mauris
            sed magna malesuada facilisis quis at urna. Fusce sit amet ullamcorper
            lectus. Proin interdum orci et est cursus consectetur convallis mauris
            placerat. Duis bibendum felis vel sapien auctor consequat. Fusce
            rutrum aliquet eros, interdum egestas neque ultricies quis. Aliquam
            erat volutpat. Nulla facilisi. Morbi pharetra hendrerit mattis.
            Praesent vel gravida odio. Vestibulum ultricies ante eu lorem
            tincidunt eu facilisis odio fermentum.
         </p>
      </div>

   </div>
   <footer>
      <h1><strong>Thank You For Visiting!</strong></h1>
      <div class="footerLinks">
        <a href="mailto:arielle.a.revis@gmail.com">arielle.a.revis@gmail.com</a>
        <a href="tel:8482379843">(848) - 237 9843</a>
        <a href="https://www.linkedin.com/in/arielle-revis/">linkedin.com/ariellerevis</a>
       </div>
    </footer>
</body>

</html>