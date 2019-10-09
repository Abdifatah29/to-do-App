$('.todo-form').submit(function(e) {
	e.preventDefault();
	$.ajax({
		type: 'POST',
		url: window.appUrl + 'process.php',
		data: $(this).serialize(),
		success: function(response) {
			var	todo = "<div class='align-items-center d-flex p-4 pb-4 shadow-sm mt-3'>";
				todo += `<p class='text-left w-75'>${$('.todoText').val()}</p>`;
				todo += '<div>';
					todo += `<button class='btn btn-danger markTodo' value='${response}'>`;
						todo += "<i  class='fas fa-check'></i>";
					todo += '</button>'
					todo += `<button class='btn btn-danger float-right removeTodo' name='delete' type='submit' value='${response}'>`;
						todo += "<i class='fas fa-trash-alt'></i>";
					todo += '</button>';
				todo += '</div>';
			todo += "</div>";
			$('.todolist').append(todo);
			$('.todoText').val('');
		}
	});
});

$(document).on('click', '.markTodo', function() {
	var data = {
		process: '',
		markTodo: '',
		todo: $(this).val()
	};
	var _this = $(this);
	$.ajax({
		type: 'POST',
		url: window.appUrl + 'process.php',
		data: data,
		success: function() {
			_this.parent().prev().addClass('line-success');
		}
	});
});

$(document).on('click', '.removeTodo', function() {
	var data = {
		process: '',
		removeTodo: '',
		todo: $(this).val()
	};
	var _this = $(this);
	$.ajax({
		type: 'POST',
		url: window.appUrl + 'process.php',
		data: data,
		success: function() {
			_this.parent().parent().remove();
		}
	});
});