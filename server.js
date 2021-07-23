var express = require("express");

var app = express();

app.use(express.static('public'));
 
//make way for some custom css, js and images
app.use('text/css', express.static(__dirname + '/public/style.css'));
app.use('application/javascript', express.static(__dirname + '/public/cost.js'));
app.use('text/php', express.static(__dirname + '/public/index.php'));


var server = app.listen(8081, function(){
    var port = server.address().port;
    console.log("Server started at http://localhost:%s", port);
});

//var phpServer = require('node-php-server');
//
//phpServer.createServer({
//    port: 3000,
//    hostname: '127.0.0.1',
//    base: '.',
//    keepalive: false,
//    open: false,
//    bin: './node_modules/php',
//    router: "./server.php"
//});
//phpServer.close();
