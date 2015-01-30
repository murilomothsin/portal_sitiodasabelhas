
$( "#CloseModal" ).click(function() {
	$( '#contentView' ).empty();
});

$( ".ver_mais" ).click(function() {
		var id = this.getAttribute("data-id");
		$.get("/cakephp/pages/ajax/"+id,
			null,
			function(data) {
				$('#myModal').modal('show');
				$("#contentView").html(data);
			}
		);
});