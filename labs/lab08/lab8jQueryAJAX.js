
$(document).ready(function() {

		$.ajax({
			type: 'GET',
			url: 'http://revisarpi.eastus.cloudapp.azure.com/iit/labs/lab08/lab8JSON.json',
			dataType: 'json',
			   success: function(responseData, status){
			  $.each(responseData.menuItem, function() {
				  $('.prjtLabsContent').append(
					'<a href="http://revisarpi.eastus.cloudapp.azure.com/iit/labs/' + 
					this.lab + '/'+this.landing+'">'+this.title+'</a>'
				);		  
			  });
			}, error: function(msg) {
			  // there was a problem
			  alert('There was a problem: ' + msg.status + ' ' + msg.statusText);
			}
		  });	
});