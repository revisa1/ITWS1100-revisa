
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>root index</title>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script type="text/javascript" src="Quiz3/resources/mysite.js"></script>
    <script type="text/javascript" src="Resources/lab8jQuery.js"></script> 
    <link rel="stylesheet" href="Resources/site.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');</style>
  </head> 
  <body>
    <div class="header">
      <a class=aboutMeLink href='<?php echo $GLOBALS['iit'] . 'aboutMe/aboutMe.html'?>'><img id='logoLink' src='<?php echo $GLOBALS['iit'] . 'Resources/logo.png'?>' alt="Arielle Revis Logo"></a>
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
      <div class="navLinks"><a class=aboutMeLink>About Me</a></div>
      <div class="navLinks"><a id=resumeLink>Resume</a></div>
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
      