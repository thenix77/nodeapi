const express = require('express')
const router = express.Router()

router.get('/autentication', (req, res) => {
    res.send('hello cat')
})

module.exports = router