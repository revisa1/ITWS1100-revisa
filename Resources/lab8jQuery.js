function getJSONpath(){
	var depth=window.location.pathname.split('/').length-2;
	var path='';
	for (var i=0; i<depth; i++){
		path+=('../');
	}
	

	return path+'/Resources/lab8JSON.json'

}



$.ajax({
	type: 'GET',
	url: getJSONpath(),
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