function validate(formObj) {
  
  if (formObj.firstNames.value == "") {
    alert("Please enter a first name");
    formObj.firstNames.focus();
    return false;
  }
  
  if (formObj.lastName.value == "") {
    alert("Please enter a last name");
    formObj.lastName.focus();
    return false;
  }
  
  if (formObj.dob.value == "") {
    alert("Please enter a date of birth");
    formObj.dob.focus();
    return false;
  }

  if(formObj.title.value==''){
    alert('Please enter a Title');
    formObj.title.focus();
    return false;
  }

  if (formObj.year.value==''){
    alert('Please enter a year');
    formObj.year.focus();
    return false;
  }
    
  return true;
}


$(document).ready(function() {
  
  var pathname = window.location.pathname; // Returns the path and filename
  var filename = pathname.split('/').pop(); // Extracts filename from the path
  //if filename stuff just for focus
  //just add another click bind event



  if(filename=='index.php'){
        // focus the name field on first load of the page
    $("#firstNames").focus();
  } 
  else if(filename=="movies.php"){
    
    // focus the name field on first load of the page
    $("#title").focus();
  }

  $(document).on('click',".deleteActor",function() {//binds click event to .deleteActor class
    if(confirm("Remove actor? (This action cannot be undone.)")) {
        
        // get the id of the clicked element's row
      var curId = $(this).closest("tr").attr("id");
        // Extract the db id of the actor from the dom id of the clicked element
      var actorId = curId.substr(curId.indexOf("-")+1);
        // Build the data to send. 
      var postData = "id=" + actorId;
        // we could also format this as json ... jQuery will (by default) 
        // convert it into a query string anyway, e.g. 
        // var postData = { "id" : actorId };
        
      $.ajax({
        type: "post",
        url: "actor-delete.php",
        dataType: "json",
        data: postData,
        success: function(responseData, status){
          if (responseData.errors) {
            alert(responseData.errno + " " + responseData.error);
          } else {
            // Uncomment the following line to see the repsonse message from the server
            // alert(responseData.message);
            
            // remove the table row in which the image was clicked
            $("#" + curId).closest("tr").remove();
            
            // if a php generated message box is up, hide it:
            $(".messages").hide();
            
            // populate the js message box and show it:
            $("#jsMessages").html("<h4>Actor deleted</h4>").show();
            
            // re-zebra the table
            $("#actorTable tr").each(function(i){
              if (i % 2 == 0) {
                // we must compensate for the header row...
                $(this).addClass("odd"); 
              } else {
                $(this).removeClass("odd");
              }
            });
          }
        },
        error: function(msg) {
          // there was a problem
          alert(msg.status + " " + msg.statusText);
        }
      });      
        
    }
  });

  $(document).on('click',".deleteMovie",function() {
      if(confirm("Remove movie? (This action cannot be undone.)")) {
        
        // get the id of the clicked element's row
        var curId = $(this).closest("tr").attr("id");
        // Extract the db id of the actor from the dom id of the clicked element
        var movieId = curId.substr(curId.indexOf("-")+1);
        // Build the data to send. 
        var postData = "id=" + movieId;
        // we could also format this as json ... jQuery will (by default) 
        // convert it into a query string anyway, e.g. 
        // var postData = { "id" : actorId };
        
        $.ajax({
          type: "post",
          url: "movie-delete.php",
          dataType: "json",
          data: postData,
          success: function(responseData, status){
            if (responseData.errors) {
              alert(responseData.errno + " " + responseData.error);
            } else {
              // Uncomment the following line to see the repsonse message from the server
              // alert(responseData.message);
              
              // remove the table row in which the image was clicked
              $("#" + curId).closest("tr").remove();
              
              // if a php generated message box is up, hide it:
              $(".messages").hide();
              
              // populate the js message box and show it:
              $("#jsMessages").html("<h4>Movie deleted</h4>").show();
              
              // re-zebra the table
              $("#movieTable tr").each(function(i){
                if (i % 2 == 0) {
                  // we must compensate for the header row...
                  $(this).addClass("odd"); 
                } else {
                  $(this).removeClass("odd");
                }
              });
            }
          },
          error: function(msg) {
            // there was a problem
            alert(msg.status + " " + msg.statusText);
          }
        });      
        
      }

  });



    
});
  
 
      
    