let express = require('express');
let router = express.Router();
const mongoose = require('mongoose');
let issueManager = require('../issue-manager/issue');

const user = mongoose.model('user', new mongoose.Schema({    
    firstName: String,
    lastName: String,
    email: String,
    cell: String,
    id: String
}));

router.get('/users', (req, res) => {
	/*
	Returns all users as json
	*/
    user.find({})
    .then(Model => res.json(Model));
});

router.put('/users/users.json', (req,res) => {
	/*
	The HTTP request body contains the JSON with the data for the new user. In your code to handle this route, you should create a new User obect and and add it to a users array.
	*/
    const { firstName, lastName, email, cell, id} = req.body;

    let fakeArray =
	{
        firstName: firstName,
        lastName: lastName,
        email: email,
        cell: cell,
        id: id
    };

    user.create(fakeArray)
        .then(Model => res.json(Model));
});

module.exports = router;