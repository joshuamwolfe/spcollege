//HTTP requests often include query strings in the URL or parameter data in the body for forms
//The query string and parameters are just basic key/value pairs

var qString = require('querystring');
var params = qString.parse("name=Brad&color=red&color=blue");
console.log(params);
