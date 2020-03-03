/*
Ismael Villanueva-Miranda
Sending data from the serial port to a NodeJS server hosted in a 
Amazon virtual machine
*/

var net = require('net');

//*******************************************
//CONFIGURING THE SERIAL PORT
//*******************************************
var serialport = require('serialport');
var portName = "/dev/tty.usbmodem1421";
var myPort = new serialport(portName, {
	baudRate: 115200,
	parser: new serialport.parsers.Readline('\n')
});
//*******************************************

var number = 1;
var client = new net.Socket();
//*******************************************
//CONNECTING TO THE AMAZON SERVER
//*******************************************
client.connect(1337, 'ec2-18-188-153-28.us-east-2.compute.amazonaws.com', function() {
	console.log('Connected');
	//*******************************************
	//READING DATA FROM THE SERIAL PORT
	//*******************************************
	myPort.on('data', function(data){
		var d = new Date();
		d.setHours(d.getHours() + 6);
		var timeStamp = Math.floor(d);
		//console.log('Time: ' + timeStamp);
		//console.log('DATA: ' + data);
		var sendData = data+"\n";
		//var sendData = data+"*"+number+"*"+timeStamp+"\n";
		console.log(sendData);
		client.write(sendData+'');
		number++;
	});
	//*******************************************
});

client.on('close', function() {
	console.log('Connection closed');
});

















