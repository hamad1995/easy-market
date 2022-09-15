const express = require('express');
const router = express.Router();

/* GET users listing. */
router.get('/', function (req, res, next) {
  res.send('respond with a resource');
});

router.get('/:id', function (req, res, next) {
  res.send('add new user');
});

/* ADD users listing. */

router.post('/', function (req, res, next) {
  res.send('respond with a resource');
});

/* UPDATE users listing. */

router.put('/:id', function (req, res, next) {
  res.send('respond with a resource');
});

/* DELETE users listing. */

router.delete('/:id', function (req, res, next) {
  res.send('respond with a resource');
});



module.exports = router;
