const issue_manager = require('issue-manager');
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
	send_success(res, issue_manager.issues());
	}

	else if (method == 'post') {
	// create a new issue
    
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
        'end',
		function () {      
            if (json_body) {
                var issue_data = JSON.parse(json_body);
                create_issue(issue_data);

			send_success(res, null);
		}
	})
    }
    

}

var s = http.createServer(handle_request);
s.listen(3000, () => console.log('Listening on port 3000 . . .'));lstat