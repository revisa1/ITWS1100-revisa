<div class="header">
  <a class='aboutMeLink' ><img id='logoLink' alt="Arielle Revis Logo" ></a>
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
        $currentPath=dirname($_SERVER['PHP_SELF']);
        $relPath=str_repeat('../',substr_count($currentPath,'/')) . 'labs/'
        $query='select * from myLabs';
        $result=$db->query($query);
        $numRecords=$result->num_rows;
        for($i=0;i<$numRecords;$i++){
          $row=$result->fetch_assoc();
          echo '<a href="'. htmlspecialchars(trim($relPath)) . htmlspecialchars(trim($row['landing'])) . '">' .
          htmlspecialchars(trim($row['title'])) . '</a>';
        }
      ?>

    </div>
  </div>
  <div class="navLinks">
    <?php
      $currentPath=dirname($_SERVER['PHP_SELF']);
      $relPath=str_repeat('../',substr_count($currentPath,'/')) . '../'
      echo '<a href="' . htmlspecialchars(trim($relPath . 'grpDir')) . '">' . 
        htmlspecialchars(trim($row['title'])) . '</a';         
    ?>

  </div>
  <div class="navLinks"><a id=contactLink>Contact Info</a></div>
</div>
