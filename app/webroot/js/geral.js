$( ".ver_mais" ).click(function() {
	$("#contentView").html('<center><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Carregando...</center>');
	var id = this.getAttribute("data-id");
  var type = this.getAttribute("data-type");
	$.get("/cakephp/pages/ajax/"+id+"/"+type,
		null,
		function(data) {
			$("#contentView").html(data);
		}
	);
});

$('#myModal').on('hidden.bs.modal', function () {
	$( '#contentView' ).html('');
});