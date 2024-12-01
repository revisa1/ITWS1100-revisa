function getToRoot(){
    var pathname=window.location.pathname;
    pathname=pathname.split('/');
    var path=''
    for(var i=1;i<pathname.length;i++){
        path+='../';
    }
    return path;
}
function checkForm(formObj) {
  
  if (formObj.usernames.value == "") {
    alert("Please enter a username");
    formObj.usernames.focus();
    return false;
  }
  
  if (formObj.passwords.value == "") {
    alert("Please enter a password");
    formObj.passwords.focus();
    return false;
  }
  
  if (formObj.userTypes.value == "") {
    alert("Please enter a type of user");
    formObj.userTypes.focus();
    return false;
  }

  return true;
}

function validLogin(){
  var loginForm=getElementById('loginform');
  loginForm.style.display='none';
  var labForm=getElementById('editlabs');
  labForm.style.display='block';
}
function logout(){
  document.getElementById("loginform").style.display="block";
  document.getElementById("loginHeader").style.display="block";
  document.getElementById("editlabs").style.display="none";
  document.getElementById("logoutButton").style.display="none";
  document.getElementById("updateLabHeader").style.display="none";
}

// $(document).on('click', '.deleteLab', function() {
//   if(confirm("Remove Lab? (This action cannot be undone.)")) {
      
//     // get the id of the clicked element's row
//   var curId = $(this).closest("tr").attr("id");
//     // Extract the db id of the actor from the dom id of the clicked element
//   var labId = curId.substr(curId.indexOf("-")+1);
//     // Build the data to send. 
//   var postData = "id=" + labId;
//     // we could also format this as json ... jQuery will (by default) 
//     // convert it into a query string anyway, e.g. 
//     // var postData = { "id" : actorId };
    
//   $.ajax({
//     type: "post",
//     url: "Quiz3/lab-delete.php",
//     dataType: "json",
//     data: postData,
//     success: function(responseData, status){
//       if (responseData.errors) {
//         alert(responseData.errno + " " + responseData.error+'database connection has failed');
//       } else {
//         // Uncomment the following line to see the repsonse message from the server
//         // alert(responseData.message);
        
//         // remove the table row in which the image was clicked
//         $("#" + curId).closest("tr").remove();
        
//         // if a php generated message box is up, hide it:
//         $(".messages").hide();
        
//         // populate the js message box and show it:
//         $("#jsMessages").html("<h4>Lab deleted</h4>").show();
        
//         // re-zebra the table
//         $("#labTable tr").each(function(i){
//           if (i % 2 == 0) {
//             // we must compensate for the header row...
//             $(this).addClass("odd"); 
//           } else {
//             $(this).removeClass("odd");
//           }
//         });
//       }
//     },
//     error: function(msg) {
//       // there was a problem
//       alert(msg.status + " " + msg.statusText+"can't find lab-delete");
//     }
//   });      
    
//   }
// });


$(document).ready(function(){
  
  $("#usernames").focus();
  $('#labnames').focus();

  

  $('.deleteLab').click(function() {
    if(confirm("Remove Lab? (This action cannot be undone.)")) {
      
      // get the id of the clicked element's row
    var curId = $(this).closest("tr").attr("id");
      // Extract the db id of the actor from the dom id of the clicked element
    var labId = curId.substr(curId.indexOf("-")+1);
    alert(labId);
      // Build the data to send. 
    var postData = "id=" + labId;
    alert(postData);
      // we could also format this as json ... jQuery will (by default) 
      // convert it into a query string anyway, e.g. 
      // var postData = { "id" : actorId };
      
    $.ajax({
      type: "post",
      url: "http://revisarpi.eastus.cloudapp.azure.com/iit/Quiz3/lab-delete.php",
      dataType: "json",
      data: postData,
      success: function(responseData, status){
        if (responseData.errors) {
          alert(responseData.errno + " " + responseData.error+'database connection has failed');
        } else {
          // Uncomment the following line to see the repsonse message from the server
          // alert(responseData.message);
          
          // remove the table row in which the image was clicked
          $("#" + curId).closest("tr").remove();
          
          // if a php generated message box is up, hide it:
          $(".messages").hide();
          
          // populate the js message box and show it:
          $("#jsMessages").html("<h4>Lab deleted</h4>").show();
          
          // re-zebra the table
          $("#labTable tr").each(function(i){
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
        alert(msg.status + " " + msg.statusText+"can't find lab-delete");
      }
    });      
      
    }
  });
});