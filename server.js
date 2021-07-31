var express = require("express");
var app = express();
var email = require('./router.js');
app.use(express.static('public'));
 
//make way for some custom css, js and images
app.use('text/css', express.static(__dirname + '/public/style.css'));
app.use('application/javascript', express.static(__dirname + '/public/cost.js'));
app.use('text/php', express.static(__dirname + '/public/index.php'));
app.use('/email',email);

//*************************************************************************************
var server = app.listen(8081, function(){
    var port = server.address().port;
    console.log("Server started at http://localhost:%s", port);
});
