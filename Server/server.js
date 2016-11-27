var express = require('express');
var app = express();
var fs = require("fs");
var bodyParser = require('body-parser')

app.use(bodyParser.json())

//http://whites.sytes.net:82/listSongs
app.get('/listSongs', function (req, res) {
   fs.readFile( __dirname + "/" + "database.json", 'utf8', function (err, data) {
       console.log( data );
       res.end( data );
   });
})



//http://whites.sytes.net:82/addSong
app.post('/addSong', function (req, res) {

  var newSong = req.body;


  //console.log(newUser);

  fs.readFile( __dirname + "/" + "database.json", 'utf8', function (err, data) {
  data = JSON.parse( data );
  //console.log( data );

  data['songs'].push(newSong)
  //finalData = JSON.stringify(data);
  console.log(data);

  fs.truncate('database.json', 0, function(){console.log('Deleted old Content of database.json')})
  fs.appendFile( __dirname + "/" + "database.json", JSON.stringify(data) + "\n", function (err) {});


  });



    res.end( JSON.stringify(newSong));

})


var server = app.listen(82, function () {

  var host = server.address().address
  var port = server.address().port

  console.log("Example app listening at http://%s:%s", host, port)

})
