//direct url

function directLink(url){

	$.post(url, function(resp) {


		$('#main-menu').html(resp);

	});

}

//dropdown navigasi



//save data

//--->id = id_form

//--->url = controller

//--->directUrl = url atau controler setelah di save
function saveData(id,url,directUrl){
	$("#"+id).on('submit',(function(e){
	    e.preventDefault();
	         $.ajax({
	            type:'POST',
	            url:url,
	            data: new FormData(this),
	            contentType: false,
	            cache: false,
	            processData:false,
	            success: function(data)
	            {
	               alert(data);
	               setTimeout(function(){
	                 	directLink(directUrl);
	               },1000);
	            },
	            error: function() 
	            {
	            }
	    });
	    $('#'+id)[0].reset();
	}));
}

//edit data

function editData(url){

	$.get(url,function(resp){

		resp =JSON.parse(resp);

		$.each(resp,function(k,v){

               $('#'+k).val(v);

               //console.log($('#'+k).val(v));

         });

	})

}





//delete data

function deleteData(url,directUrl){

	if(!confirm("Apa anda yakin ?")){

        return false;

    }else{

	   $.post(url,function(resp){

	   		alert(resp);

	   		directLink(directUrl);

	   }); 

    }

}



//accordion function







