let http = require('http');

function handle_incoming_request(req, res){
    console.log('INC REQUEST:' + req.method + ' ' + req.url);
    res.writeHead(200, { 'Content-Type' : 'application/json' });
    res.end(JSON.stringify( {error: null, 
        data: {
            user: {
                first_name: 'oratio',
                last_name: 'Gadsplatt',
                email: 'horatio@3xample.org'
            }
        }
    }) + '\n');
}

let s = http.createServer(handle_incoming_request);
s.listen(8080);