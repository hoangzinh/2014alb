$(function(){
	$("body").on({
	mouseenter: function(){
		$(this.cells[0]).addClass('showdraghandle');
	},
	mouseleave: function(){
		$(this.cells[0]).removeClass('showdraghandle');
	}
	}, "#table-photo tr");  // descendant selector
});

$(document).ready(function() {
	    $("#table-photo").tableDnD({
					onDragClass: "myDragClass",
				});
			$("#table-photo tr").hover(function() {
						      $(this.cells[0]).addClass('showDragHandle');
							  	}, function() {
											      $(this.cells[0]).removeClass('showDragHandle');
												  	});
});

