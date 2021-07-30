async function mail() {
      const transport = nodemailer.createTransport({
         host: 'smtp.gmail.com',
         port: 465,
         secure: true,
         auth: {
             user: 'glpetronig@gmail.com',
             pass: 'discordishappy77'
         }
     });

      var mailOptions = {
         from: 'glpetronig@gmail.com',
         to: 'glpetronig@gmail.com',
         subject: 'Resorce request',
         text: 'Hey there, it’s our first message sent with Nodemailer ',
     };

      transport.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Message sent: %s', info.messageId);
    });
}

