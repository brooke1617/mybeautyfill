var mysql = require("mysql");

var connection = mysql.createConnection({
    host: "localhost",
    port: 8889,
    user: "root",
    password: "root",
    database: "mbf",

});
connection.connect(function (err) {
    if (err) throw err;

    servicesList();
});
//query database to show all services available for booking 
function servicesList() {
    connection.query("SELECT * FROM servicesList", function (err, results) {

        if (err) throw err;
       
                }

    )}
  