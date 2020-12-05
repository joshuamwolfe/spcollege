const http = require('http');
const issue = require('../issue.js');
const fakeArray = [...issue.issues()];

function sendSuccess (res, data) {
	res.writeHead(200, {"Content-Type": "application/json"});
	var output = { error: null, data: data };
	res.end(JSON.stringify(output) + "\n");
}

let createIssue = issue.createIssue();

function handleRequest (req, res) {
	var method = req.method.toLowerCase() 

	if (method == 'get') {
	// return issues
	sendSuccess(res, fakeArray);
	}

	else if (method == 'post') {
	// create a new issue
	createIssue(req);
	}
}

const server = http.createServer(handleRequest);
server.listen(3000, () => console.log('Listening on port 3000...'));