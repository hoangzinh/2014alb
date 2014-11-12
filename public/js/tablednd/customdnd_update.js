$(function(){
	$("body").on({
		mouseenter: function(){
		$(this.cells[1]).addClass('showdraghandle');
	},
		mouseleave: function(){
		$(this.cells[1]).removeClass('showdraghandle');
	}
	}, "#table-photo tr");  // descendant selector
});

$(document).ready(function() {
	    $("#table-photo").tableDnD({
					onDragClass: "myDragClass",
				});
			$("#table-photo tr").hover(function() {
						      $(this.cells[1]).addClass('showDragHandle');
							  	}, function() {
											      $(this.cells[1]).removeClass('showDragHandle');
												  	});
});

