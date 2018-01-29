const express = require ('express')
const app = express()
app.use(express.static('public'))
app.listen(Process.env.PORT || 8080, () => console.log('tout est ok!'))
