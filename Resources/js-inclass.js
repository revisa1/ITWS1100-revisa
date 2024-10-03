/* In-class JavaScript File
   Place variables and functions in this file */

// variables declared outside of functions are global (scope)
var example = "An example.";
var firstName = "Hector";
var insuranceCutOffAge = 26;
var age = 19;
age=50;


function example() {
  alert(example);
}

function example2() {
  // variables declared inside a function are local to that function (scope)
  var example = "A different example.";
  alert(example);
}

function cube(x){
  return x*x*x;
}

function writeIt(){
  var element=document.getElementById("output");
  element.innerHTML="Some new text.";
}

function changeFoot(){
  document.getElementsByTagName("footer")[0].innerHTML="Hello World";
}

function showName(formObj) {
    alert(formObj.fname.value + ' ' + formObj.lname.value);
 }
  //could also use 'this' instead of formObj to pass the most recent item clicked