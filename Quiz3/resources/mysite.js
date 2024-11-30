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
  // alert('hello');
  // $.ajax({
  //   type: "post",
  //   url: "redirect.php",
  //   data: {
  //     usrTp: formObj.userTypes.value,
  //   },
  //   error: function(msg) {
  //     // there was a problem
  //     alert(msg.status + " " + msg.statusText);
  //   }
  // });  
  return true;
}

function validLogin(){
  var loginForm=getElementById('loginform');
  loginForm.style.display='none';
  var labForm=getElementById('editlabs');
  labForm.style.display='block';
}
function logout(){
  var loginForm=getElementById('loginform');
  loginForm.style.display='block';
  var labForm=getElementById('editlabs');
  labForm.style.display='none';
}

// function whichForm(){
  
//   if (success) {
//     $("#loginform").hide();
//     $("#logoutButton").show();
//     $('#loginHeader').hide();
//     $('#editLabsHeader').show();
//     $('#labsTable').show();

//   } else {
//     $("#loginform").show();
//     $("#logoutButton").hide();
//     $('#loginHeader').show();
//     $('#editLabsHeader').hide();
//     $('#labsTable').hide();
//   }

//   $("#logoutButton").click(function () {
//     $("#loginform").show();
//     $("#logoutButton").hide();
//     $("#loginform")[0].reset();

//     $('#loginHeader').show();
//     $('#editLabsHeader').hide();
//     $('#labsTable').hide();
//   });

// }


$(document).ready(function(){
  // var submitted = document.getElementById('successData').getAttribute('data-success') === 'true';
  // if (submitted) {
  //   $("#loginform").hide();
  //   $("#logoutButton").show();
  //   $('#loginHeader').hide();
  //   $('#editLabsHeader').show();
  //   $('#labsTable').show();

  // } else {
  //   $("#loginform").show();
  //   $("#logoutButton").hide();
  //   $('#loginHeader').show();
  //   $('#editLabsHeader').hide();
  //   $('#labsTable').hide();
  // }

  // $("#logoutButton").click(function () {
  //   $("#loginform").show();
  //   $("#logoutButton").hide();
  //   $("#loginform")[0].reset();

  //   $('#loginHeader').show();
  //   $('#editLabsHeader').hide();
  //   $('#labsTable').hide();
  // });

  $("#usernames").focus();
  $('#labnames').focus();


  $('.deleteLabs').click(function() {
    if(confirm("Remove Lab? (This action cannot be undone.)")) {
        
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
        url: "lab-delete.php",
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
          alert(msg.status + " " + msg.statusText);
        }
      });      
        
    }
  });
});