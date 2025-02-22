
/*Finds the pathname, splits it into a list, finds the list's length,
and subtracts 2 for trailing slashes and blank items. For that length-2
creats a variable 'path' and adds a ../ for every element which brings you
back to root of website from whichever page. Returns the path (../'s) and then 
the path to the JSON file*/
function getJSONpath(){
	var depth=window.location.pathname.split('/').length-2;
	var path='';
	for (var i=0; i<depth; i++){
		path+=('../');
	}
	

	return path+'iit/Resources/lab8JSON.json'

}

//similar to the getJSONpath but returns the path to the labs folder
function getLabspath(){
	var depth=window.location.pathname.split('/').length-2;
	var path='';
	for (var i=0; i<depth; i++){
		path+=('../');
	}
	return path+'iit/labs'
}



/*
$.ajax({
	type: 'GET',
	url: getJSONpath(),
	dataType: 'json',
	   success: function(responseData, status){
	  $.each(responseData.menuItem, function() {
		  $('.prjtLabsContent').append(
			"<a href='"+ getLabspath()+'/'+this.lab + '/'+this.landing+"'>"+this.title+'</a>'
		);		  
	  });
	}, error: function(msg) {
	  // there was a problem
	  alert('There was a problem: ' + msg.status + ' ' + msg.statusText);
	}
});	
*/

//jQuery UI function for autocomplete
$(function() {

    var basepath=getLabspath();


    var availableTags = [
      { label: "Lab 1", url: basepath+'/lab1/lab1landing.php' },
      { label: "Lab 2", url: basepath+'/lab2/revisa-ariellerevis-resume.php' },
      { label: "Lab 3", url: basepath+'/lab3/lab3landing.php' },
      { label: "Lab 4", url: basepath+'/lab4/lab4landing.php' },
      { label: "Lab 5", url: basepath+'/lab5/lab5landing.php' },
      { label: "Lab 6", url: basepath+'/lab6/lab6landing.php' },
      { label: "Lab 7", url: basepath+'/lab7/lab7landing.php' },
      { label: "Lab 8", url: basepath+'/lab8/lab8landing.php' },
	  { label: "Lab 9", url: basepath+'/lab9/index.php' },
	  { label: "Lab 10", url: basepath+'/lab10/lab10landing.php' }
    ];
  
    $("#labs").autocomplete({
      source: availableTags,
      select: function(event, ui) {
        window.location.href = ui.item.url;
      }
    });
  });
  