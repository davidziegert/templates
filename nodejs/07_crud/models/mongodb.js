// 09_MongoDB_MongoDB_Collection_Modell_Schema
const mongoose = require("mongoose");
const mongooseSchema = mongoose.Schema;
const schema = new mongooseSchema(
  {
    title: {
      type: String,
      required: true,
    },
    year: {
      type: Number,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
  },
  { timestamps: true }
);

// 09_MongoDB_Collection_Modell
const Movies = mongoose.model("tb_movies", schema);
module.exports = Movies;
