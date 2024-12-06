
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>root index</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script type="text/javascript" src='<?php echo $GLOBALS['iit'] . "Quiz3/resources/mysite.js"?>'></script>
    <!-- <script type="text/javascript" src="Quiz3/resources/mysite.js"></script> -->
    <script type="text/javascript" src='<?php echo $GLOBALS['iit'] . "Resources/lab8jQuery.js"?>'></script>
    <!-- <script type="text/javascript" src="Resources/lab8jQuery.js"></script>  -->
    <link rel="stylesheet" href='<?php echo $GLOBALS['iit'] . "Resources/site.css"?>'>
    <!-- <link rel="stylesheet" href="Resources/site.css"> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');</style>
  </head> 
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
            
            
          ?>

        </div>
      </div>
      <div class="navLinks">
        
        <?php
          $projQuery='select landing from myProjects where name="grpDir"';
          $projRes=$db->query($projQuery);
          $pRow=$projRes->fetch_assoc();
          $relPath= $GLOBALS['iit'] . '../';
          echo '<a href="' . $relPath. htmlspecialchars(trim($pRow['landing'])) . '">Group Directory </a>';    
          $db->close();
        ?>

      </div>
      <div class="navLinks"><a id=contactLink href='<?php echo $GLOBALS['iit'] . "contactInfo/cntct.php"?>'>Contact Info</a></div>
    </div>
      