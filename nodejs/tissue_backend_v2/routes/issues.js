let express = require('express');
let router = express.Router();
let issueManager = require('issue-manager');
const mongoose = require('mongoose');
const fakeArray = [...issueManager.issues()];

// removes depreciation warning
mongoose.set('useNewUrlParser', true);
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose.set('useUnifiedTopology', true);

mongoose
    .connect('mongodb://localhost/tissue')
    .then(() => console.log('Connected to MongoDB'))
    .catch((err) => console.error('Could not be connect to MongoDB because:' + err));

// router.use(express.json());
// router.use(express.urlencoded({ extended: true}));

router.get('/issues', (req, res) => {
	/*
	Returns all issues as json
	*/
	res.json(fakeArray)  
});

router.put('/issues/issues.json', (req, res) => {	
	/*
	The HTTP Request body contains the JSON with
	the data to add a new issue. In your code to
	handle this route, you should retrieve the 
	issue data and create a new Issue object and
	store it in your issues array
	*/
	const response = req.body;
	const newIssue = issueManager.create_issue(response);	
	fakeArray.push(newIssue); //to make	
	res.status(200).send('The information you asked for has been retrieved.')
});

router.post('/issues/:issue_id.json', (req,res) => {
	/*
	The HTTP reqeuest body contains the JSON 
	with the new data for this isssue. In your
	code to handle this route, you should find
	the issue in your issues array with the
	correspoinding id and update it oaccordingly.
	*/

	const response = req.body;
	const movie = fakeArray.find(m => m.id === parseInt(req.params.id));

	if (!movie) {
		res.status(404).send('The movie with the given ID was not found.');
	}
	
	movie = req.body;
	res.send(movie);
});

router.delete('issues/:issue_id.json', (req,res) => {
	/*
	Removes the issue from the issue array.

	psuedo code:

	lookup movie
	if not their return 404
		delete it	
	*/

	const movie = fakeArray.find(m => m.id === parseInt(req.params.id));
	if (!movie) {
		res.status(404).send('The course with the given ID was not found.')
		return
	}

	const index = fakeArray.indexOf(movie);
	fakeArray.splice(index, 1);
	res.status(200).send('Movie deleted!');
});


module.exports = router;

/*
Notes:

post- send data to a server
	- u have an id
put- send data to a server
	- dotn have an id, server creates

*/