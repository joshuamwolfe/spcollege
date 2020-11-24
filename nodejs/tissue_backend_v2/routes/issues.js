let express = require('express');
let app = express();
const fake_array = [...issue_manager.issues()];
const new_issue = require('')

app.get('/issues', function(req, res) {
  res.json(fake_array)  
});

app.put('/issues/issues.json', (req,res) {
	const new_issue = new Issue;

})



module.exports = app;

/* 

Notes:



*/