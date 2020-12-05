const issueArray = [];
const issueOne = {id: 1,
    title: 'bad apple',
    status: 'new',
    created: '1/1/01',
    updated: '',
    details: 'Website broke?'};    
const issueTwo = {id: 2,
    title: 'invalid request',
    status: 'closed',
    created: '2/1/01',
    updated: '',
    details: 'unknown filepath'};    
const issueThree = {id: 3,
    title: 'too slow',
    status: 'closed',
    created: '2/3/05',
    updated: '4/3/05',
    details: 'user complaint'};    
const issueFour = {id: 4,
    title: 'unable to create account',
    status: 'resolved',
    created: '4/12/11',
    updated: '4/28/11',
    details: 'Website broke?'};
const issueFive = {id: 5,
    title: 'missing permission',
    status: 'resolved',
    created: '5/11/01',
    updated: '6/11/01',
    details: 'added authorization'};

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

function newIssue (arg) {	
	const new_issue = new Issues (arg.id, arg.title, arg.status, arg.created, arg.updated, arg.details);
	return new_issue;
}

let test = newIssue (issueFive);

console.log(test, 'test');
function createIssue() {
    let one = newIssue(issueOne);
    let two = newIssue(issueTwo);
    let three = newIssue(issueThree);
    let four = newIssue(issueFour);
    let five = newIssue(issueFive);

    let fakeArray = [issueOne, issueTwo, issueThree, issueFour, issueFive];
    issueArray.push(fakeArray);
}

function issues () {
	return issueArray;
}

createIssue();

module.exports = {issues, createIssue, newIssue};