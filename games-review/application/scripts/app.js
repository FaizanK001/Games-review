var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

// Create a new server using the listen function, specifying the port number here.
app.listen(8080, function() {
    console.log('server has started')
});
// Handle if the user connecting is new or not.
var newConnection = true;

// Handle the head response.
function handler(req, res) {
    fs.readFile(__dirname + '/index.html',
        function(err, data) {
            if (err) {
                res.writeHead(500);
                return res.end('Error loading index.html');
            }
            res.writeHead(200);
            res.end(data);
        });
}
io.on('connection', function(socket) {
    //   Code your server here...
    console.log('Connected');

    socket.on("client message", function(data) {
        console.log("message recieved:" + data);
        io.emit("server message", data);

    });

    socket.on('disconnect', function() {
        console.log('User disconnected');
    });
});