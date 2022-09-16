const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const logger = require('morgan');
const sassMiddleware = require('node-sass-middleware');
const sqlite3 = require("sqlite3").verbose();
const indexRouter = require('./routes/index');
const usersRouter = require('./routes/users');
const categoriesRouter = require('./routes/categories');
const productsRouter = require('./routes/products');
const ordersRouter = require('./routes/orders');
require("reflect-metadata");
require("dotenv").config();
//DB connection
const eMarket = path.join(__dirname, "database", "easymarket.db");
const db = new sqlite3.Database(eMarket, (err) => {
  if (err) {
    console.error(err.message);
  }
  console.log("Connected to the eMarket database.");
});

const app = express();

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(sassMiddleware({
  src: path.join(__dirname, 'public'),
  dest: path.join(__dirname, 'public'),
  indentedSyntax: false, // true = .sass and false = .scss
  sourceMap: true
}));
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/api/users', usersRouter);
app.use('/api/categories', categoriesRouter);
app.use('/api/products', productsRouter);
app.use('/api/orders', ordersRouter);

module.exports = app;
