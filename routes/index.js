const express = require('express');
const router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('Home Page', { title: 'Easy Market' });
});

module.exports = router;
