var express = require("express");
var app = express();
var server = app.listen(3000, function () {
    var host = server.address().address;
    var port = server.address().port;
    console.log("Exemple d'application disponible depuis l'adresse : http://%s:%s", host, port);
});