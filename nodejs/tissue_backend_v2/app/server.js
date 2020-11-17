const issue_manager = require('issue-manager');
const next_id = 6;
const fake_array = [...issue_manager.issues()];

function send_success (res, data) {
	res.writeHead(200, {"Content-Type": "application/json"});
	var output = { error: null, data: data };
	res.end(JSON.stringify(output) + "\n");
}

function create_issue (req) {
	// page 84
	var json_body = '';
	req.on('readable' , function () {
		var d = req.read();
		if (d) {
			if (typeof d == 'string') {
				json_body += d;
			} else if (typeof d == 'object' && d instanceof Buffer) {
				json_body += d.toString('utf8');
			}
		}
	}
	);

	req.on(
		'end' ,
		function () {      
		if (json_body) {
			var issue_data = JSON.parse(json_body);
			issue_data.id = next_id;
			next_id++;	
			var new_issue = issue_manager.create_issue(issue_data);
			fake_array.push(new_issue);
			send_success(res, null);
		}
	})
}

var http = require('http');

function handle_request (req, res) {
	var method = req.method.toLowerCase() 

	if (method == 'get') {
	// return issues
	send_success(res, fake_array);
	}

	else if (method == 'post') {
	// create a new issue
	create_issue(req);
	}
}

var s = http.createServer(handle_request);
s.listen(3000);