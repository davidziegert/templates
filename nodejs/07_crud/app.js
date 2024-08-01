// Express
const express = require("express");
const app = express();
const url = "localhost";
const port = 5005;

// Setup
app.set("case sensitive routing", false);

// Moment - Time
const moment = require("moment");
const timestamp = moment().format("llll");

// Views
app.set("view engine", "ejs");
app.set("views", "views");

// Middleware: Static Files
app.use(express.static("public"));

// Middleware: Request JSON-Formats
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

// Middleware: Helmet-HTTP-Security
const helmet = require("helmet");
app.use(helmet());

// Rooting
const router = require("./routes/route");
app.use(router);

// Rooting Errors
app.use((req, res) => {
  res.status(403).render("403", { txt_title: "Status: 403 - Forbidden" });
});

app.use((req, res) => {
  res.status(404).render("404", { txt_title: "Status: 404 - Not Found" });
});

app.use((req, res) => {
  res.status(500).render("500", { txt_title: "Status: 500 - Internal Server Error" });
});

app.use((req, res) => {
  res.status(502).render("502", { txt_title: "Status: 502 - Bad Gateway" });
});

// Express-Server
app.listen(port, url, () => {
  console.log("Server running since: " + timestamp + " at - http://" + url + ":" + port);
});
