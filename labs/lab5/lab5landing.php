<?php
  include('../../Quiz3/includes/conn.php');
  include('../../Quiz3/includes/headernav.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
   <title>Lab 5</title>
   <meta charset="UTF-8">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script> ></script>
   <script type="text/javascript" src="../../Resources/lab8jQuery.js"></script> 
   <script src="lab5.js"></script>
   <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
   <script type="text/javascript" src="../../Quiz3/resources/mysite.js"></script>
   <link href="../../Resources/site.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
   <style>@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');</style>
</head>
<body>
   <div class="header">
      <a href ="../../aboutMe/aboutMe.html"><img src="../../Resources/logo.png" alt="Arielle Revis Logo"></a>
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
      <div class="navLinks"><a href="../../Resume/rsmeLanding.html ">Resume</a></div>
      <div class="prjtLabs">
        <button class="prjtLabsBtn">Projects & Labs</button>
        <div class="prjtLabsContent">
        </div>
      </div>
      <div class="navLinks"><a href="http://revisarpi.eastus.cloudapp.azure.com/grpDir">Group Directory</a></div>
      <div class="navLinks"><a href="../../contactInfo/cntct.html">Contact Info</a></div>
    </div> -->
   <head><script src="lab5.js"></script><head>
   <div id="bodyBlock">
      <h1>Intro to IT - Lab 5</h1>
      <h3>During this lab we learned how to utilize basic javascript and used it to create a contact form</h3>
      <form id="addForm" name="addForm" action="#" method="post" onsubmit="return validate(this);">
         <fieldset>
            <legend>Contact Information</legend>
            <div class="formData">

               <label class="field" for="firstName">First Name:</label>
               <div class="value">
                  <input type="text" size="60" value="" name="firstName" id="firstName">
               </div>
               <label class="field" for="lastName">Last Name:</label>
               <div class="value">
                  <input type="text" size="60" value="" name="lastName" id="lastName">
               </div>

               <label class="field" for="pseudonym">Nickname:</label>
               <div class="value">
                  <input type="text" size="60" value="" name="pseudonym" id="pseudonym">
               </div>

               <label class="field" for="title">Title:</label>
               <div class="value">
                  <input type="text" size="60" value="" name="title" id="title">
               </div>

               <label class="field" for="org">Organization:</label>
               <div class="value">
                  <input type="text" size="60" value="" name="org" id="org">
               </div>
               
               <label class="field" for="comments">Comments:</label>
               <div class="value">
                  <textarea rows="4" cols="40" name="comments" id="comments" onfocus="javascript:clearText();" onblur="javascript:returnText();">Please enter your comments</textarea>
               </div>

               <input type="submit" value="Save" id="save" name="save">
            </div>
         </fieldset>
      </form>

      <br>
      <button type="button" id="button" onclick=javascript:nickname();>Review Name Information</button>

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