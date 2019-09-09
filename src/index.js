const express = require('express')
const morgan = require('morgan')
const colors = require('colors')
const exphbs = require('express-handlebars')
const path = require('path')

//initializacion
const app = express()



//setting 
app.set('port', process.env.PORT || 3000)
app.set('views',path.join(__dirname,'view'))
app.engine('.hbs',exphbs({
    defaultLayout:'main',
    layoutsDir:path.join(app.get('views'),'layouts'),
    partialsDir:path.join(app.get('views'),'partials'),
    extname:'.hbs',
    helpers:require('./lib/handlebars')
}))
app.set('view engine','hbs')


//midleware
app.use(morgan('dev'))
app.use(express.urlencoded({extended:false}))
app.use(express.json())


//variables globales
app.use((req,res,next)=>{
    
    
    next()
})

//rutas
app.use(require('./routes/index'))
app.use(require('./routes/authentication'))
app.use('/links',require('./routes/links'))

//public
app.use(express.static(path.join(__dirname,'public')))
app.use('/bootstrap',express.static(path.join('node_modules','bootstrap')))
app.use('/jquery', express.static(path.join('node_modules', 'jquery')))
app.use('/fontawesome', express.static(path.join('node_modules', '@fortawesome','fontawesome-free')))


//start server
app.listen(app.get('port'),()=>{
    console.log('server>'.red, 'Listen'.yellow,' UP'.grey)
})