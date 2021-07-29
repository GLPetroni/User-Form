function sendEmail() {
  Email.send({
    Host: "smtp.gmail.com",
    Username: "glpetronig@email_address.com",
    Password: "Discordishappy77",
    To: '',
    From: "glpetronig@email_address.com",
    Subject: "Cost Form Copy",
    Body: "Well that was easy!!",
  })
    .then(function (message) {
      alert("mail sent successfully")
    });
}
