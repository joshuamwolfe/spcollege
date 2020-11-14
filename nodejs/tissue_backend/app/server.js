/*
In the directions 4b, why are you telling us we need to track the information? Are each of them going to be methods/functions? Are they properties of a class? What do you want us to do with: id,title,status,assignee,created,updated,details?? 

I feel like studying the code involves copy/paste, things arent connecting, should I visit terry? Are there other resources I can view?

Im pretty sure this isnt enough to be done. 
*/


var http = require('http'),
    fs = require('fs');

function retrieveAllIssues(callback) {
    fs.readdir("issues", (err, files) => {
        if (err) {
            callback(make_error("file_error",  JSON.stringify(err)));
            return;
        }

        var only_dirs = [];

        var iterator = (index) => {
            if (index == files.length) {
                callback(null, only_dirs);
                return;
            }

            fs.stat("albums/" + files[index], (err, stats) => {
                if (err) {
                    callback(make_error("file_error",
                                        JSON.stringify(err)));
                    return;
                }
                
                if (stats.isDirectory()) {
                    var obj = { name: files[index] };
                    only_dirs.push(obj);
                }
                iterator(index + 1)
            });

        }
        iterator(0);
    });
}

function createIssue(req, res) {
    console.log("INCOMING REQUEST: " + req.method + " " + req.url);
    if (req.url == '/issues.json') {
        handle_list_albums(req, res);
    } else if (req.url.substr(0, 7) == '/albums'
               && req.url.substr(req.url.length - 5) == '.json') {
        handle_get_album(req, res);
    } else {
        send_failure(res, 404, invalid_resource());
    }
}

var s = http.createServer(handle_incoming_request);
s.listen(8080);

