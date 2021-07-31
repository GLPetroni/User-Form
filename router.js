// email.js route

var express = require('express');
var router = express.Router();

router.post('../email.js', function(req, res) {
    res.send('Email');
})

module.exports = router;
