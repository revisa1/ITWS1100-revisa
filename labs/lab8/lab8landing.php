<?php
  include('../../Quiz3/includes/conn.php');
  include('../../Quiz3/includes/headernav.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>lab 8</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script> ></script>
    <script type="text/javascript" src="../../Resources/lab8jQuery.js"></script> 
    <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script type="text/javascript" src="../../Quiz3/resources/mysite.js"></script>
    <link rel="stylesheet" href="../../Resources/site.css">
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
    <div class="justText">
      <h1>Lab 8 - Javascript, JSON, AJAX</h1>
      <h3>During this lab, instructions were to dynamically create our lab pages using a JSON file
        including a list of our project menu items. We then needed to write some JavaScript to read
        that file and thus build the page dynamically. As you might have noticed, I do not have a projects
        page, but a project header that is present on all pages. Thus, I ran into some issues with relative
        linking, as it needed to work in VS code preview, not just when the server is running. To solve these 
        issues, I created two functions findJSONpath, and findLabspath, in which I found the relative path
        of each page and then linked it to either the JSON file or the lab page(from the tab in the header).
      </h3>
      </br>
      <h3>Additionally, as part of this lab we needed to use some sort of jQuery UI to <em>jazz up</em>
        our sites (my professor's words, not mine) in which I chose an autocomplete function. From this simple
        feature I was able to expand it to a lab search feature, located in the header of every page. During its 
        production, however, I ran into a similar issue with linking, with which i promptly fixed with the findLabspath
        function. I invite you to fiddle with these tools, enjoy!
      </h3>
      </br>

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