var fakeArray = [
    {id: 1,
    title: 'bad apple',
    status: 'new',
    created: '1/1/01',
    updated: '',
    details: 'Website broke?'},
    {id: 2,
    title: 'invalid request',
    status: 'closed',
    created: '2/1/01',
    updated: '',
    details: 'unknown filepath'},
    {id: 3,
    title: 'too slow',
    status: 'closed',
    created: '2/3/05',
    updated: '4/3/05',
    details: 'user complaint'},
    {id: 4,
    title: 'unable to create account',
    status: 'resolved',
    created: '4/12/11',
    updated: '4/28/11',
    details: 'Website broke?'},
    {id: 5,
    title: 'missing permission',
    status: 'resolved',
    created: '5/11/01',
    updated: '6/11/01',
    details: 'added authorization'},
  ];
  
  const next_id = 6;
  
  function send_success (res, data) {
   res.writeHead(200, {"Content-Type": "application/json"});
   var output = { error: null, data: data };
   res.end(JSON.stringify(output) + "\n");
  }
  
  function create_issue (req) {
    // page 84
    var json_body = '';
    req.on('readable' , function () {
       var d = req.read();
           if (d) {
               if (typeof d == 'string') {
                   json_body += d;
               } else if (typeof d == 'object' && d instanceof Buffer) {
                   json_body += d.toString('utf8');
               }
           }
       }
    );
    
    req.on(
    'end' ,
    function () {      
      if (json_body) {
          var issue_data = JSON.parse(json_body);
            issue_data.id = next_id;
            next_id++;
        /*  if (!album_data.album_name) {
            send_failure(res, 403, missing_data('album_name'));
            return;
          }
        } catch (e) {
          // got a body, but not valid json
          send_failure(res, 403, bad_json());
          return;
        }*/
        // save issue to fakeArray
        fakeArray.push(issue_data);
        send_success(res, null);
        }
    );
  }
  
  var http = require('http');
  
  function handle_request (req, res) {
    var method = req.method.toLowerCase() 
    
    if (method == 'get') {
      // return issues
      send_success(res, fakeArray);
    }
    
    else if (method == 'post') {
      // create a new issue
      create_issue(req);
    }
  }
  
  var s = http.createServer(handle_request);
  s.listen(3000);