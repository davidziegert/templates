const { Sequelize, DataTypes } = require("sequelize");

/* Configuration - Option 1 */
/* one of 'mysql' | 'postgres' | 'sqlite' | 'mariadb' | 'mssql' | 'db2' | 'snowflake' | 'oracle' */
const sequelize = new Sequelize("db_mysql", "root", "usbw", {
  host: "localhost",
  dialect: "mysql",
});

const Movies = sequelize.define(
  "Movies",
  {
    title: {
      type: DataTypes.STRING,
      allowNull: false,
    },
    year: {
      type: DataTypes.INTEGER,
      allowNull: false,
    },
    description: {
      type: DataTypes.STRING,
      allowNull: false,
    },
  },
  {
    tableName: "tb_movies",
  }
);

module.exports = Movies;
