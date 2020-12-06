let issueRouter = require('../routes/issues.js');
let userRouter = require('../routes/users.js');
let express = require('express');
const { GridFSBucket } = require('mongodb');
let app = express();
const mongoose = require('mongoose');

// removes depreciation warning
mongoose.set('useNewUrlParser', true);
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose.set('useUnifiedTopology', true);

mongoose
    .connect('mongodb+srv://dbUser:1234@cluster0.wsuqq.mongodb.net/TissueDataBase?retryWrites=true&w=majority')
    .then(() => console.log('Connected to MongoDB'))
    .catch((err) => console.error('Could not be connect to MongoDB because:' + err));

app.use(express.json());
app.use('/', issueRouter);
app.use('/', userRouter);

const port = process.env.PORT || 3000;
let s = app.listen(port);

/*
mongodb+srv://dbUser:<password>@cluster0.wsuqq.mongodb.net/<dbname>?retryWrites=true&w=majority
password: 28bbALn79EoUpFPk
*/