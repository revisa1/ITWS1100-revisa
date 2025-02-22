    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script type="text/javascript" src='<?php echo $GLOBALS['iit'] . "Quiz3/resources/mysite.js"?>'></script>
    <!-- <script type="text/javascript" src="Quiz3/resources/mysite.js"></script> -->
    <script type="text/javascript" src="resources/iit.js"></script>
    <script type="text/javascript" src='<?php echo $GLOBALS['iit'] . "Resources/lab8jQuery.js"?>'></script>
    <!-- <script type="text/javascript" src="Resources/lab8jQuery.js"></script>  -->
    <link rel="stylesheet" href='<?php echo $GLOBALS['iit'] . "Resources/site.css"?>'>
    <!-- <link rel="stylesheet" href="Resources/site.css"> -->
    <link href="resources/iit.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');</style>
  </head> 
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script type="text/javascript" src="../../Quiz3/resources/mysite.js"></script>
    <script type="text/javascript" src="resources/iit.js"></script>
    <script type="text/javascript" src="../../Resources/lab8jQuery.js"></script> 
    <link rel="stylesheet" href="../../Resources/site.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">  
    <link href="resources/iit.css" rel="stylesheet" type="text/css"/>
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
    <body>
    <div class="header">
      <a class=aboutMeLink href='<?php echo $GLOBALS['iit'] . "aboutMe/aboutMe.php"?>'><img id='logoLink' src='<?php echo $GLOBALS['iit'] . 'Resources/logo.png'?>' alt="Arielle Revis Logo"></a>
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
      <div class="navLinks"><a class=aboutMeLink href='<?php echo $GLOBALS['iit'] . "aboutMe/aboutMe.php"?>'>About Me</a></div>
      <div class="navLinks"><a id=resumeLink href='<?php echo $GLOBALS['iit'] . "Resume/rsmeLanding.php"?>'>Resume</a></div>
      <div class="prjtLabs">
        <button class="prjtLabsBtn">Projects & Labs</button>
        <div class="prjtLabsContent">
          
          <?php
          
            @ $db=new mysqli($GLOBALS['svr'],$GLOBALS['user'],$GLOBALS['pwd'],$GLOBALS['database']);
            $relPath=$GLOBALS['iit'] . 'labs/';
            $query='select * from myLabs';
            $result=$db->query($query);
            $numRecords=$result->num_rows;
            for($i=0;$i<$numRecords;$i++){
              $row=$result->fetch_assoc();
              echo '<a href="'. $relPath . 'lab' .  htmlspecialchars(trim($row['labid'])). '/' . htmlspecialchars(trim($row['landing'])) . '">' .
              htmlspecialchars(trim($row['title'])) . '</a>';
            }
            $db->close();
            
          ?>

        </div>
      </div>
      <div class="navLinks">
        
        <?php
          $relPath= $GLOBALS['iit'] . '../';
          echo '<a href="' . $relPath . 'grpDir' . '">Group Directory </a>';    
              
        ?>

      </div>
      <div class="navLinks"><a id=contactLink>Contact Info</a></div>
    </div>
    <div class="justText">
      <h1>Lab 9 - Databases and SQL</h1>
      <h3>In this lab we were provided with and SQL file with the code 
        to create an actors table and insert some actors. We were also given
        a PHP program whcih has a menu with two tabs. One will add/remove/display
        actors, but there is no table for actors. The other tab does the same for
        the movies, but we were not given the code for the movies PHP program.
        <strong>During this lab, I completed the program so that the user
        can Add/Remove/Display both the movies and actors table</strong>
      </h3>
      </br>
      <h3>During the process of this lab, I foumd that I really enjoy the database
        process and the server-side approach in general. Essentially, we connected to
        our Azure instances and went to our MariaDB (similar to MySQL) to add databases,
        run queries, and more. I found this process really inciteful and I implore you to
        explore!
      </h3>
      </br>
    </div>
    <div id="header">
