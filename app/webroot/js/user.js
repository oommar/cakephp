var User = {
	guardar:function(){
		var formulario= $('#frmUser');
		var url = formulario.attr('action');
		$.post(url,formulario.serialize(),function(result){
			console.log(result);
		});
	}
};