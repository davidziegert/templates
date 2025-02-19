// MYSQL Server starten
const db = require("../models/mysql");

/* Only for testing the connection
db.sequelize
  .authenticate()
  .then(() => console.log("MySQL-Connection: has been established successfully."))
  .catch((error) => console.log("MySQL-Connection failed:", error)); */

db.sequelize
  .sync()
  .then(() => console.log("MySQL-Connection: has been established successfully."))
  .catch((error) => console.log("MySQL-Connection failed:", error));

exports.viewAllMovies = (req, res) => {
  db.findAll()
  .then((movies) => {
    res.render("mysql", { txt_title: "MySQL-Movies", data: movies });
  })
  .catch((error) => {
    console.log(error);
  });
};

exports.viewPostMovie = (req, res) => {
  res.render("mysql_add", { txt_title: "MySQL-Movies: Add" });
};

exports.viewUpdateMovie = (req, res) => {
  const id = req.params.id;

  db.findByPk(id)
  .then((movie) => {
    res.render("mysql_update", { txt_title: "MySQL-Movies: Update", data: movie });
  })
  .catch((error) => {
    console.log(error);
  });
};

exports.postSingleMovie = (req, res) => {
  try {
    const newData = req.body;
    db.create(newData);
  } catch (error) {
    console.log(error);
  } finally {
    res.redirect("/mysql");
  }  
};

exports.updateSingleMovie = (req, res) => {
  try {
    const id = req.body.id;;
    db.update({title: req.body.title, year: req.body.year, description: req.body.description}, {returning: true, where: {id} });
  } catch (error) {
    console.log(error);
  } finally {
    res.redirect("/mysql");
  }  
};

exports.deleteSingleMovie = (req, res) => {
  try {
    const id = req.body.id;;
    db.destroy({where: {id}});
  } catch (error) {
    console.log(error);
  } finally {
    res.redirect("/mysql");
  }
};