// // const express = require ("express");
// // const path = require ("path");
// // const mysql = require("mysql");
// // const dotenv = require("dotenv");

// // dotenv.config({path: "./.env" })

// // const app = express();

// // const db = mysql.createConnection({
// //     host: process.env.DATABASE_HOST,
// //     user:  process.env.DATABASE_USER,
// //     passwod:  process.env.DATABASE_PWD,
// //     database: process.env.DATABASE
// // });

// // const publicDirectory = path.join(__dirname, "./public" )
// // app.use(express.static(publicDirectory));

// // app.set("view engine", "html");

// // db.connect( (error) => {
// //     if(error)
// //     {
// //         console.log(error)
// //     }
// //     else{
// //         console.log("mysql connected");
// //     }
// // })

// // app.get("/", (req,res)=>
// // {
// //     //res.send("<h1>Login</h1>")
// //     //res.render("index.html");
// //     res.sendFile(path.join(__dirname + '/views/index.html'));
// // });
// // app.listen(3000, ()=>
// // {
// //     console.log("server started on port 3000"); 
// // })
// // const http = require('http');
// // const express = require('express');
// // const path = require('path');
// // const app = express();
// // app.use(express.json());
// // app.use(express.static("express"));
// // // default URL for website
// // app.use('/', function(req,res){
// //     res.render(path.join(__dirname+'/html/annual-recitals.html'));
// //     //__dirname : It will resolve to your project folder.
// //   });
// // const server = http.createServer(app);
// // const port = 3000;
// // server.listen(port);
// // console.debug('Server listening on port ' + port);

// var mysql = require('mysql');
// var express = require('express');
// var session = require('express-session');
// var bodyParser = require('body-parser');
// var path = require('path');
// const { homedir } = require('os');

// var connection = mysql.createConnection({
// 	host     : 'localhost',
// 	user     : 'root',
// 	password : '',
// 	database : 'minor'
// });

// var app = express();
// app.use(session({
// 	secret: 'secret',
// 	resave: true,
// 	saveUninitialized: true
// }));
// app.use(bodyParser.urlencoded({extended : true}));
// app.use(bodyParser.json());

// app.get('/', function(request, response) {
// 	response.sendFile(path.join(__dirname + '/views/index.html'));
// });

// app.post('/auth', async(request, response) => {
// 	// var name = request.body.name;
// 	// var phone = request.body.phone;
//   const { name, phone } = request.body.login;
// 	if (name && phone) {
// 		connection.query('SELECT * FROM register WHERE name = ? AND phone = ?', [name, phone], function(error, results, fields) {
// 			if (results.length > 0) {
// 				request.session.loggedin = true;
// 				request.session.name = name;
// 				response.redirect('/home.php');
// 			} else {
// 				response.send('Incorrect Username and/or Password!');
// 			}			
// 			response.end();
// 		});
// 	}

// //   app.post('/auth', async(request, response) => {

// //     const { name, phone } = request.body.login;
// //     console.log(name, phone);
// //     connection.query('SELECT * FROM register WHERE name = ? AND phone = ?', [name, phone], function(error, results, fields) {
// //         if (err) {
// //             console.log(err);
// //         }
// //         console.log('Done') //  const results = Object.values(JSON.parse(JSON.stringify(result)));
// //             //     //console.log(results[0].Name);
// //     })
// //     response.render("auth");
// // });

// //    else {
// // 		response.send('Please enter Username and Password!');
// // 		response.end();
// // 	}
// // });

// app.get('/home.php', function(request, response) {
// 	if (request.session.loggedin) {
// 		response.send('<a href="home.php">Home</a>');
// 	} else {
// 		response.send('Please login to view this page!');
// 	}
// 	response.end();
// });

// app.listen(3000);
