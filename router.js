// email.js route

var express = require('express');
var router = express.Router();
var nodemailer = require("nodemailer")
var bodyParser = require('body-parser')
var urlencodedParser = bodyParser.urlencoded({ extended: false })

router.post('/', urlencodedParser, function(request, res) {
     const cost = request.body.total_cost
     mail("glpetronig@gmail.com", cost)
     res.send('home post made');
})

async function mail(to, text) {
      const transport = nodemailer.createTransport({
         host: 'smtp.gmail.com',
         port: 8081,
         secure: true,
         auth: {
             user: 'glpetronig@gmail.com',
             pass: 'discordishappy77'
         }
     });

      var mailOptions = {
         from: 'glpetronig@gmail.com',
         to : to ,
         subject: 'Resorce request',
         text : text,
     };
    console.log(mailOptions)
      transport.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Message sent: %s', info.messageId);
    });
}

module.exports = router;
