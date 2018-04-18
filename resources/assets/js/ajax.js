$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#question-add-comment').submit(function(event) {
	event.preventDefault();

	$.post('/api/comments/question', {'body': "OLAAA"})
	.done(function(data) {
		console.log(data);
	})
	.fail(function() {
		console.log("error");
	});

/*
	$.ajax({
		url: '/path/to/file',
		type: 'default GET (Other values: POST)',
		dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	*/
	

	/*
	$.ajax({
		url: 'testRequest',
		type: 'GET',
		dataType: 'json',
		data: {param1: 'value1'},
	})
	.done(function(data) {
		console.log("success:" + data);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	*/

});