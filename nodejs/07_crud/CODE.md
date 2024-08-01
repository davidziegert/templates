# Middleware: Morgan - Request-Logger
const morgan = require("morgan");
app.use(morgan("dev"));

# Statuscodes

app.use((req, res) => {
  res.status(200).render("200", { txt_title: "Status: 200 - OK" });
});

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

# Aufrufe: POST, GET, PUT, DELETE (CRUD: Create, Read, Update, Delete)

app.all("*", (req, res) => {
    console.log(req);
});

app.post("*", (req, res) => {
    console.log(req);
});

app.get("*", (req, res) => {
  console.log(req);
});

app.put("*", (req, res) => {
    console.log(req);
});

app.delete("*", (req, res) => {
    console.log(req);
});

# Funktionen

function meineFunktion(req, res, next) {
    console.log("Aufruf: meineFunktion");
    next();
}

app.use("/", meineFunktion);

# The `res.locals` property is an object that holds response local variables specific to the current request. It has a scope limited to the request and is accessible only to the view(s) rendered during that particular request/response cycle, if any.

res.local.variablenname = ""

# nanoid Alternative

const crypto = require("crypto");
res.local.randomID = crypto.randomBytes(16).toString("hex");

# Routing mit Variablen

router.get("/:variable", (req, res) => { xyz });

# Middleware: Cookies

const cookieparser = require("cookie-parser");
app.use(cookieparser());

# Logging-Requests mit Morgan

const morgan = require("morgan");
app.use(morgan("dev"));