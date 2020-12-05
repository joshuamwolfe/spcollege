const issue_manager = require('issue-manager');
const fake_array = [...issue_manager.issues()];
const { groupEnd } = require('console');
const { GridFSBucketReadStream } = require('mongodb');
const { lstat } = require('fs');
var http = require('http');

function send_success (res, data) {
	res.writeHead(200, {"Content-Type": "application/json"});
	var output = { error: null, data: data };
	res.end(JSON.stringify(output) + "\n");
}

let create_issue = issue_manager.create_issue();

create_issue(req);

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
s.listen(3000, () => console.log('Listening on port 3000 . . .'));lstat