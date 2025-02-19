// 06_Controller
const jsonView = (req, res) => {
  res.render("new", { txt_title: "New Site" });
};

module.exports = jsonView;
