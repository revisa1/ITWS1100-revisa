/* Lab 5 JavaScript File 
   Place variables and functions in this file */

var errorMessages="";
var focusCheck=false;
var textCheck=false;

function validate(formObj) {
   if (formObj.firstName.value == "") {
      errorMessages="You must enter a first name\n";
      formObj.firstName.focus();
      focusCheck=true;
   }

   if (formObj.lastName.value == "") {
      errorMessages+="You must enter a last name\n";
      if (focusCheck==false){
         formObj.lastName.focus()
         focusCheck=true
      }
   }

   if (formObj.pseudonym.value == "") {
      errorMessages+="You must enter a nickname\n";
      if (focusCheck==false){
         formObj.pseudonym.focus()
         focusCheck=true
      }

   }

   if (formObj.title.value == "") {
      errorMessages+="You must enter a title\n";
      if (focusCheck==false){
         formObj.title.focus()
         focusCheck=true
      }
   }

   if (formObj.org.value == "") {
      errorMessages+="You must enter an organization\n";
      if (focusCheck==false){
         formObj.org.focus()
         focusCheck=true
      }
   }

   if (formObj.comments.value == "" || formObj.comments.value=="Please enter your comments") {
      errorMessages+="You must enter a valid comment\n";
      if (focusCheck==false){
         formObj.comments.focus()
         focusCheck=true
      }
   }

   if (errorMessages.length!=0){
      alert(errorMessages);
      return false;
   } else{
      alert('Form successfully submitted!');
   }

   

   return true;
}

function clearText(){
   var element=document.getElementById("comments");
   if (textCheck==false){
      element.value="";
      textCheck=true;
   }
     
}

function returnText(){
   var element=document.getElementById("comments");
   if (element.value==""){
      element.value="Please enter your comments";
      textCheck=false;
   }
   
}

document.getElement

function nickname() {
   firstName=document.getElementById("firstName").value;
   lastName=document.getElementById("lastName").value;
   pseudonym=document.getElementById("pseudonym").value;
   if (firstName!=""&&lastName!=""){
      alert(firstName+' '+lastName+' is '+pseudonym);
   } else{
      alert('Please fill in First Name, Last Name, and Nickname')
   }
}

window.addEventListener("load",firstLoad);
function firstLoad(){
   document.getElementById('firstName').focus();
}
