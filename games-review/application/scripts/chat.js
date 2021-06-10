$(document).ready(function() {

    var socket = io.connect("http://localhost:8080");

    $("form").submit(function(e) {
        e.preventDefault();

        socket.emit(" client message", $("#msg").get(0).value);
        $("#msg").get(0).value = "";



    });

    socket.on("server message", function(data) {
        $("#chat").append(data + "<br>");
    });
});