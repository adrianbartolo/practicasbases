'use strict'
//requeriendo dependencias
const express = require('express')
const socketio = require('socket.io')
const http = require('http')


const app = express()
const server = http.createServer(app)
const io = socketio(server)
const PORT = preocess.env.PORT || 3000

server.listen(PORT, () => {
console.log('server running in http://localhost:${PORT}')
})

io.on('connection', function(socket){
console.log('client: ${socket.id}')
})

io.on('connection', function(socket){
console.log('client: ${socket.id}')
setInterval(() => {
socket.emit('server/random', Math.random())
}, 2000)
socket.on('client/random', (num) =>{
console.log(num)
})
})
app.use(express.static(path.join(_dirname, 'public')))
