
var submitted=false;

function namesList() {
    
    if (submitted){
        return false;
    }
    
    
    $.ajax({
		type: 'GET',
		url: 'array.json',
		dataType: 'json',
		   success: function(responseData, status){
		  $.each(responseData.names, function() {
			  $('#names').append(
				'<li>'+this+'</li>'
			);		  
		  });
		}
    });

    return false;
}


$(document).on('click','#names li',function(){
    alert($(this).text())
 });