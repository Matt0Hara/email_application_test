document.addEventListener("DOMContentLoaded", function() {
	var container = document.querySelector('table');
	const output = fetch(container.dataset['endpoint'], {
		method: 'GET',
		cors: 'no-cors',
		cache: 'no-cache',
		headers: {
			// 'Content-Type': 'application/json',
			'Content-Type': 'text/html',
		}
	})
	.then(function(response) {
		return response.json();
	})
	.then(function(response) {
		// debugger;
		$('table').DataTable({
			"data": response,
			"columns": [
				{data: 'id'},
				{data: 'to'},
				{data: 'from'},
				{data: 'date'},
				{data: 'subject'},
				{data: 'message_id'},
			]
		});
	});
});
