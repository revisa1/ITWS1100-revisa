
<?php 
  include('Quiz3/includes/conn.php');
  include('Quiz3/includes/headernav.php');
?>

    
<div class="justText">
  <h1>Navigate to the rest of the website; enjoy!</h1>
  <h3>There is no required username or password, just practice with
      dynamically loading php information and databases!</h3>
</div>

<?php

  $dbOk=false;
  //$success=false;
  @$db=new mysqli($GLOBALS['svr'],$GLOBALS['user'],$GLOBALS['pwd'],$GLOBALS['database']);
  //@$db = new mysqli('localhost', 'root', 'nlg7ejrB_', 'mySite');

  if ($db->connect_error){
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true;
  }
  $havePost=isset($_POST['save']);
  $errors='';

  
  
  if ($havePost) {

    $username = htmlspecialchars(trim($_POST["usernames"]));
    $password = htmlspecialchars(trim($_POST["passwords"]));
    $userType = htmlspecialchars(trim($_POST["userTypes"]));
    $labname = htmlspecialchars(trim($_POST['labnames']));
    $lablanding = htmlspecialchars(trim($_POST['lablandings']));
   
    $focusId = ''; 
     
    if ($username == '') {
      $errors .= '<li>Username may not be blank</li>';
      if ($focusId == '') $focusId = '#usernames';
    }
    if ($password == '') {
      $errors .= '<li>Password may not be blank</li>';
      if ($focusId == '') $focusId = '#passwords';
    }
    if ($userType == '') {
      $errors .= '<li>User Type may not be blank</li>';
      if ($focusId == '') $focusId = '#userTypes';
    }
    if ($labname == '') {
      $errors .= '<li>Lab Number may not be blank</li>';
      if ($focusId == '') $focusId = '#labnames';
    }
    if ($lablanding == '') {
    $errors .= '<li>Lab Landing may not be blank</li>';
    if ($focusId == '') $focusId = '#lablandings';
    }

    if ($errors != '') {
      echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
      echo $errors;
      echo '</ul></div>';
      echo '<script type="text/javascript">';
      echo '  $(document).ready(function() {';
      echo '    $("' . $focusId . '").focus();';
      echo '  });';
      echo '</script>';
    } else {
      if ($dbOk) {
        $usernameForDb = trim($_POST["usernames"]);
        $passwordForDb = trim($_POST["passwords"]);
        $userTypeForDb = trim($_POST["userTypes"]);
        $labnameForDb = trim($_POST['labnames']);
        $lablandingForDb = trim($_POST['lablandings']);
       
        $insQuery = "insert into mySiteUsers (`username`,`pw`,`userType`) values(?,?,?)";//actors=table name, last_names,etc.. field names
        $statement = $db->prepare($insQuery);
        $statement->bind_param("sss", $usernameForDb, $passwordForDb, $userTypeForDb);
        $statement->execute();

        echo '<div class="messages"><h4>Welcome ' . $username . '!</h4>';

        //$success=true;

        $statement->close();

        $insLabQuery='insert into myLabs(`title`,`landing`) values(?,?)';
        $labStatement=$db->prepare($insLabQuery);
        $labStatement->bind_param('ss',$labnameForDb,$lablandingForDb);
        $labStatement->execute();              

        echo '<div class="messages"><h4>Added ' . $labname . 'to Labs!</h4>';

        $labStatement->close();


      }
    }
 }

?>
    
      
      <h3 id='loginHeader'>Login Form</h3>
      <form id="loginform" name="loginform" action="index.php" method="post" onsubmit="return checkForm(this);">
        <fieldset>
            <div class="formData">

              <label class="field" for="usernames">Username:</label>
              <div class="value"><input type="text" size="60" value="<?php/if ($havePost && $errors != '') {
                                                                          echo $username;
                                                                        } ?>" name="usernames" id="usernames" /></div>

              <label class="field" for="passwords">Password:</label>
              <div class="value"><input type="text" size="60" value="<?php if ($havePost && $errors != '') {
                                                                          echo $password;
                                                                        } ?>" name="passwords" id="passwords" /></div>

              <label class="field" for="userTypes">Type (admin/user):</label>
              <div class="value"><input type="text" size="10" maxlength="10" value="<?php if ($havePost && $errors != '') {
                                                                                          echo $userType;
                                                                                      } ?>" name="userTypes" id="userTypes" /></div>

              <input type="submit" value="save" id="save" name="save" />
            </div>
        </fieldset>
      </form>
<!--
      <button id=logoutButton>Logout</button>

      <h3>Add/Delete Labs</h3>
      <form id="editlabs" name="editlabs" action="index.php" method="post" onsubmit="return checkForm(this);">
        <fieldset>
            <div class="formData">
              <label class="field" for="labnames">Lab Name:</label>
              <div class="value"><input type="text" size="60" value="<?php /*if ($havePost && $errors != '') {
                                                                          echo $labname;
                                                                        } ?>" name="labnames" id="labnames" /></div>
                                                                        
              <label class="field" for="lablandings">Lab Landing:</label>
              <div class="value"><input type="text" size="60" value="<?php if ($havePost && $errors != '') {
                                                                          echo $lablanding;
                                                                        } ?>" name="lablandings" id="lablandings" /></div>

              <input type="submit" value="save" id="save" name="save" />
            </div>
        </fieldset>
      </form>

      <h3 id='editLabsHeader'>Labs Add/Remove</h3>
      
      <table id="labsTable">
        <?php
        if ($dbOk) {

            $query = 'select * from myLabs order by title';//all fields=*
            $result = $db->query($query);
            $numRecords = $result->num_rows;

            echo '<tr><th>Lab Name:</th><th>Lab Landing:</th><th></th></tr>';
            for ($i = 0; $i < $numRecords; $i++) {
              $record = $result->fetch_assoc();
              if ($i % 2 == 0) {
                  echo "\n" . '<tr id="lab-' . $record['labid'] . '"><td>';
              } else {
                  echo "\n" . '<tr class="odd" id="lab-' . $record['labid'] . '"><td>';
              }
              echo htmlspecialchars($record['title']);
              echo '</td><td>';
              echo htmlspecialchars($record['landing']);
              echo '</td><td>';
              echo '<img src="labs/lab09/resources/delete.png" class="deleteLab" width="16" height="16" alt="delete lab"/>';
              echo '</td></tr>';
              // Uncomment the following three lines to see the underlying
              // associative array for each record.
              // echo '<tr><td colspan="3" style="white-space: pre;">';
              // print_r($record);
              // echo '</td></tr>';
            }

            $result->free();

            // Finally, let's close the database
            $db->close();
        }
        
        
        ?>
      </table>
      */
?> 
<?php include('Quiz3/includes/footer.php');?>
