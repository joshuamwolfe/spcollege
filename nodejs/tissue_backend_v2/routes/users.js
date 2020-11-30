let express = require('express');
let router = express.Router();
const fakeArray = [];
let nextId = 1;

class User {
	constructor (firstName, lastName, email, cell, address) {
		this.firstName = firstName;
		this.lastName = lastName;
		this.email = email;
		this.cell = cell;
		this.address = address;
		this.id = nextId;
		++nextId;
	}

	createUser() {
		//push user info to a user array
	}

	deleteUser() {
		//delete user at given index
	}

	get user() {
		//given the index retrieve user from the user array
	}
}

router.get('/users', (req, res) => {
	/*
	Returns all users as json
	*/
	res.json(fakeArray)  
});

router.put('/users/users.json', (req,res) => {
	/*
	The HTTP request body contains the JSON with the data for the new user. In your code to handle this route, you should create a new User obect and and add it to a users array.
	*/

	const response = req.body;
	const newIssue = new User(response);

	fakeArray.push(newIssue);
	res.status(200).send('User created!');
});

module.exports = router;

/* 

Notes:



*/