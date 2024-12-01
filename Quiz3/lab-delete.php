<?php
  /* Delete an actor */
  
  /* Create a new database connection object, passing in the host, username,
     password, and database to use. The "@" suppresses errors. */
  @$db=new mysqli($GLOBALS['svr'],'root',$GLOBALS['pwd'],'mySite');
  // @$db=new mysqli($GLOBALS['svr'],$GLOBALS['user'],$GLOBALS['pwd'],$GLOBALS['database']);
  
  if ($db->connect_error) {
    $connectErrors = array(
      'errors' => true,
      'errno' => mysqli_connect_errno(),
      'error' => mysqli_connect_error()
    );
    echo json_encode($connectErrors);
  } else {
    if (isset($_POST["id"])) {
      // get our id and cast as an integer
      $labId = (int) $_POST["id"];
      
      // Setup a prepared statement. 
      $query = "delete from myLabs where labid = ?";
      $statement = $db->prepare($query);
      // bind our variable to the question mark
      $statement->bind_param("i",$labId);
      // make it so:
      $statement->execute();
      
      // return a json object that indicates success
      $success = array('errors'=>false,'message'=>'Delete successful');
      echo json_encode($success);
      
      // close the prepared statement obj and the db connection
      $statement->close();
      $db->close();
    }
    //add another file for movie-delete??, javascript...
    //if delete actor or movie delete from relationship table
    //foreign key methods to do that
  }
?>
