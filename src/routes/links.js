const express = require('express')
const router = express.Router()

//conexion a la base de datos
const pool = require('../database/database')

//rutas de links
router.get('/add',(req,res)=>{
    res.render('./links/add')
})

router.post('/add',async (req,res)=>{
    //console.log(req.body)
    const {nombre, correo,pswd} = req.body

    const datos = {
        nombre,
        correo,
        pswd
    }

    await pool.query('insert into usuarios set ?',[datos])
    
    res.send('grabado')

})

module.exports = router