let issueRouter = require('../routes/issues.js');
let userRouter = require('../routes/users.js');
let express = require('express');
let app = express();

app.use(express.json());
app.use('/', issueRouter);
app.use('/', userRouter);

const port = process.env.PORT || 3000;
let s = app.listen(port);

//testing!//testing!

// console.log(issueRouter.stack);


// old code

// const next_id = 6;
// const fake_array = [...issue_manager.issues()];

// function send_success (res, data) {
// 	res.writeHead(200, {"Content-Type": "application/json"});
// 	let output = { error: null, data: data };
// 	res.end(JSON.stringify(output) + "\n");
// }

// function create_issue (req) {
// 	// page 84
// 	let json_body = '';
// 	req.on('readable' , function () {
// 		let d = req.read();
// 		if (d) {
// 			if (typeof d == 'string') {
// 				json_body += d;
// 			} else if (typeof d == 'object' && d instanceof Buffer) {
// 				json_body += d.toString('utf8');
// 			}
// 		}
// 	}
// 	);

// 	req.on(
// 		'end' ,
// 		function () {      
// 		if (json_body) {
// 			let issue_data = JSON.parse(json_body);
// 			issue_data.id = next_id;
// 			next_id++;	
// 			let new_issue = issue_manager.create_issue(issue_data);
// 			fake_array.push(new_issue);
// 			send_success(res, null);
// 		}
// 	})
// }

// function handle_request (req, res) {
// 	let method = req.method.toLowerCase() 

// 	if (method == 'get') {
// 	// return issues
// 	send_success(res, fake_array);
// 	}

// 	else if (method == 'post') {
// 	// create a new issue
// 	create_issue(req);
// 	}
// }
// const routes = require('../routes/issues.js');

