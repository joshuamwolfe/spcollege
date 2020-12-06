var fakeArray = [
	{id: 1,
	title: 'bad apple',
	status: 'new',
	created: '1/1/01',
	updated: '',
	details: 'Website broke?'},

	{id: 2,
	title: 'invalid request',
	status: 'closed',
	created: '2/1/01',
	updated: '',
	details: 'unknown filepath'},

	{id: 3,
	title: 'too slow',
	status: 'closed',
	created: '2/3/05',
	updated: '4/3/05',
	details: 'user complaint'},

	{id: 4,
	title: 'unable to create account',
	status: 'resolved',
	created: '4/12/11',
	updated: '4/28/11',
	details: 'Website broke?'},

	{id: 5,
	title: 'missing permission',
	status: 'resolved',
	created: '5/11/01',
	updated: '6/11/01',
	details: 'added authorization'},
  ];

function issues () {
	return fakeArray;
}

class Issues {
	constructor (id, title, status, created, updated, details) {
		this.id = id;
		this.title = title;
		this.status = status;
		this.created = created;
		this.updated = updated;
		this.details = details;		
	}
}

function create_issue (arg) {	
	const new_issue = new Issues(arg.id, arg.title, arg.status, arg.created, arg.updated, arg.details);
	return new_issue;
}

exports.issues = issues;
exports.create_issue = create_issue;


/*
	// var json_body = '';
	// request.on('readable', function () {
	// 	 var d = req.read();
	// 	 if (d) {
	// 		if (typeof d == 'string') {
	// 			json_body += d;				
	// 		} else if (typeof d == 'object' && d instanceof Buffer) {
	// 			json_body += d.toString('utf8');
	// 		}
	// 	 }
	// })
*/