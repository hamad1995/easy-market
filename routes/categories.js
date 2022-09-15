const express = require('express');
const router = express.Router();

/* GET categories listing. */
router.get('/', function (req, res, next) {
    res.send('respond with a resource');
});

router.get('/:id', function (req, res, next) {
    res.send('add new category');
});

/* ADD categories listing. */

router.post('/', function (req, res, next) {
    res.send('respond with a resource');
});

/* UPDATE categories listing. */

router.put('/:id', function (req, res, next) {
    res.send('respond with a resource');
});

/* DELETE categories listing. */

router.delete('/:id', function (req, res, next) {
    res.send('respond with a resource');
});



module.exports = router;