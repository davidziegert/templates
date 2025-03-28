// 05_Routes
const express = require("express");
const router = express.Router();

router.get("/new", (req, res) => {
  res.render("new", { txt_title: "New Site" });
});

router.get("/", (req, res) => {
  res.render("index", { txt_title: "Home" });
});

module.exports = router;
