let express = require('express');
let router = express.Router();
let issueManager = require('../issue-manager/issue');
const mongoose = require('mongoose');
// const fakeArray = [...issueManager.issues()];

const issue = mongoose.model('issue', new mongoose.Schema({
    issue: {
        Id: String,
        Title: String,
        Status: String,
        Created: String,
        Updated: String,
        Details: String, 
    }
}))

router.use(express.json());
router.use(express.urlencoded({ extended: true}));

router.get('/issues', (req, res) => {
	/*
	Returns all issues as json
	*/
    issue.find()
        .then(Model => res.json(Model));
    // res.json(fakeArray)
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

router.post('/issues', (req,res) => {
	/*
	The HTTP reqeuest body contains the JSON 
	with the new data for this isssue. In your
	code to handle this route, you should find
	the issue in your issues array with the
	correspoinding id and update it oaccordingly.
    */
   var fakeArray = [
	{id: 1,
	title: 'bad apple',
	status: 'new',
	created: '1/1/01',
	updated: '',
	details: 'Website broke?'}];

	// const response = req.body;
	// const movie = issue.find(m => m.id === parseInt(req.params.id));
    issue.create(fakeArray[0])
        .then(Model => res.json(Model));
        

	// if (!movie) {
	// 	res.status(404).send('The movie with the given ID was not found.');
	// }
	
    // // movie = req.body;
    // console.log('Movie: ', movie);
	// res.send(movie);
});

router.delete('issues/:id', (req,res) => {
	/*
	Removes the issue from the issue array.
	*/

    // const movie = issue.find(m => m.id === parseInt(req.params.id));
    
	// if (!movie) {
	// 	res.status(404).send('The course with the given ID was not found.')
	// 	return
	// }

	// const index = issue.indexOf(movie);
	// issue.splice(index, 1);
    // res.status(200).send('Movie deleted!');
    console.log('id: ', req.params.id);
    // issue.findById({ _id: req.params.id })
    //   .then(dbModel => dbModel.remove())
    //   .then(dbModel => res.json(dbModel));
});


const getName = () => {
    return 'Jim';
  };

exports.getName = getName;

module.exports = router;