/*
Ismael Villanueva-Miranda
NodeJS server hosted in a Amazon virtual machine
*/

var net = require('net');


//*******************************************
//CONFIGURING THE WEBSOCKET
//*******************************************
var express = require('express');
var http = require("http")
var app = express();
app.use(express.static(__dirname + "/"))
var server = http.createServer(app)
server.listen(5000, function(){
    console.log('App running on port 5000!');
})
var WebSocketServer = require("ws").Server
var wss = new WebSocketServer({server: server})
//*******************************************
var server = net.createServer(function(socket) {
	socket.write('Hello! This is Server :)\r\n');
	console.log('CONNECTED: ' + socket.remoteAddress +':'+ socket.remotePort);

	//*******************************************
	//RECEIVING DATA FROM THE CLIENT USING TCP
	//*******************************************
    socket.on('data', function(data) {
        var originalData = data+"";
        //console.log(originalData);
        var splitData = originalData.split("*");
		for(var i=0;i<splitData.length;i++) {
			if(splitData[i] && splitData[i].length>3){
		    	console.log(""+splitData[i]+"");
				//*******************************************
				//SENDING DATA THROUGH WEBSOCKET
				//*******************************************
			    wss.clients.forEach(function each(ws) {
			      ws.send(JSON.stringify(splitData[i]));
			    });		    	
			    //*******************************************
			}
		}                
    });	
	//*******************************************
	//ADD A CLOSE EVENT HANDLER TO THIS INSTANCE OF SOCKET
	//*******************************************    
    socket.on('close', function(data) {
        console.log('CLOSED: ' + socket.remoteAddress +' '+ socket.remotePort);
    });    
	socket.pipe(socket);
});

server.listen(1337, 'ec2-18-188-153-28.us-east-2.compute.amazonaws.com');
console.log('Server running');





