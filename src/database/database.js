const mysql = require('mysql')
const colors = require('colors')
const {promisify} = require('util')
const {database} = require('../config/keys')

const pool = mysql.createPool(database)
pool.getConnection((err,connection)=>{
    if(err){
        if(err.code === 'PROTOCOL_CONNECTION_LOST'){
            console.error('server>'.red,'DATABASE CONNECTION'.yellow,' CLOSE'.green)
        }
        if(err.code === 'ER_CON_COUNT_ERROR'){
            console.error('server>'.red, 'DATABASE CONNECTION'.yellow, ' SIN CONEXION'.green)
        }
        if (err.code === 'ECONNREFUSED') {
            console.error('server>'.red, 'DATABASE CONNECTION'.yellow, ' RECHAZADO'.green)
        }
    }

    if(connection){
        connection.release()
    }

    console.log('server>'.red, 'DATABASE CONNECTION'.yellow, ' ok'.green)

    return;
})

pool.query = promisify(pool.query)
module.exports = pool;