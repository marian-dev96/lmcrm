function info_table($id){

	var textValue = $id;
	
	$.ajax({
		
		type: "GET",
		url: "test",
		data : {id: textValue},
		success: function(data){
			
			$( "#info_table" ).html(data);
			//console.log(data);
			
		}
		
	});


	
};