function addPhoto_Create(link,description)
{
	n = $(".row-photos").length + 1;
	$("#table-photo").append('<tr class="row-photos"><td class="hidden"><input class="row-id-photos" type="text" name="stt" value="-1" /></td><td>' + n + '</td><td><input type="text" class="form-control row-link-photos" value="' + link + '" placeholder="http://..." /></td><td><input type="text" class="form-control row-cmt-photos" value="' + description + '" /></td><td><button name="submit_edit_photos" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</button></td></tr>');
	$("#table-photo").tableDnDUpdate();
}
