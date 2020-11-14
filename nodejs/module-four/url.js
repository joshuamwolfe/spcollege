//The url module provides functionality to convert URL string into a URL object

var url = require('url');
var urlValue = 'http://localhost:8080/test1/test2?query=value';

var parsedUrl = url.parse(urlValue, true, true);

console.log('Authorization is : ',parsedUrl.auth);
console.log('Href is : ',parsedUrl.href);
console.log('Hash is : ',parsedUrl.hash);
console.log('Hostname is : ',parsedUrl.hostname);
console.log('Path is : ',parsedUrl.path);
console.log('Pathname is : ',parsedUrl.pathname);
console.log('Port is : ',parsedUrl.port);
console.log('Protocol is : ',parsedUrl.protocol);
console.log('Search is : ',parsedUrl.search);
console.log('Slashes is : ',parsedUrl.slashes);
