let express = require('express');
let router = express.Router();
let issueManager = require('../issue-manager/issue');
const mongoose = require('mongoose');


const issue = mongoose.model('issue', new mongoose.Schema({    
    id: String,
    title: String,
    status: String,
    // created: String,
    // updated: String,
    details: String,     
},
{ 
    timestamps: { 
      createdAt: 'Created', 
      updatedAt: 'Updated' 
    } 
}));

router.use(express.json());
router.use(express.urlencoded({ extended: true}));

router.get('/issues', (req, res) => {
	/*
	Returns all issues as json
	*/
    issue.find({})
        .then(Model => res.json(Model));
    // res.json(fakeArray)
});

router.post('/issues', (req,res) => {
    /* The HTTP reqeuest body contains the JSON with the new data for this isssue. In your code to handle this route, you should find the issue in your issues array with the correspoinding id and update it oaccordingly. */
    const {id,title,status,details} = req.body; // look at deconstructing later TODO
    var fakeArray =
	{id: id,
	title: title,
	status: status,
    details: details};
    
    issue.create(fakeArray)
        .then(Model => res.json(Model));
        
});

router.put('/issues/:id', (req, res) => {	
    /*The HTTP Request body contains the JSON with the data to add a new issue. In your code to handle this route, you should retrieve the issue data and create a new Issue object and store it in your issues array*/    
    const {id,title,status,details} = req.body;

    issue.findOne({id:req.params.id}, function (err, issue) {
        if(id !== undefined) {
            issue.id = id;
        }

        if(title !== undefined) {
            issue.title = title;
        }

        if(status !== undefined) {
            issue.status = status;
        }

        if(details !== undefined) {
            issue.details = details;
        }

        issue.save().then(dbTransaction => {
            res.json(dbTransaction);
          })
          .catch(err => {
            res.status(404).json(err);
          });
    })

});

router.delete('/issues/:id', (req,res) => {
	/*
	Removes the issue from the issue array.
	*/

    console.log('id: ', req.params.id);
    issue.deleteOne({ id: req.params.id})
        .then(dbModel => res.json(dbModel));
});

module.exports = router;