const express = require('express');
const router = express.Router();

/* GET prodcuts listing. */
router.get('/', function (req, res, next) {
    res.send('respond with a resource');
});

router.get('/:id', function (req, res, next) {
    res.send('add new product');
});

/* ADD prodcuts listing. */

router.post('/', function (req, res, next) {
    res.send('respond with a resource');
});

/* UPDATE prodcuts listing. */

router.put('/:id', function (req, res, next) {
    res.send('respond with a resource');
});

/* DELETE prodcuts listing. */

router.delete('/:id', function (req, res, next) {
    res.send('respond with a resource');
});



module.exports = router;