const express = require('express');
const router = express.Router();

/* GET orders listing. */
router.get('/', function (req, res, next) {
    res.send('respond with a resource');
});

router.get('/:id', function (req, res, next) {
    res.send('add new order');
});

/* ADD orders listing. */

router.post('/', function (req, res, next) {
    res.send('respond with a resource');
});

/* UPDATE orders listing. */

router.put('/:id', function (req, res, next) {
    res.send('respond with a resource');
});

/* DELETE orders listing. */

router.delete('/:id', function (req, res, next) {
    res.send('respond with a resource');
});



module.exports = router;