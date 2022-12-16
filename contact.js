const customer_name = document.getElementById("name");
const customer_email = document.getElementById("email");
const customer_subject = document.getElementById("sub");
const customer_message = document.getElementById("message");
const form = document.querySelector("#form");
function SendMail() {
  // e.preventDefault();
  var params = {
    from_name: customer_name.value,
    email_id: customer_email.value,
    message: customer_message.value,
    subject: customer_subject.value,
  };
  emailjs
    .send("service_z9h8bpq", "template_mlxzyya", params, "2d23Vt6q2BhkMKC6h")
    .then(
      function (res) {
        console.log("Success" + res.status);
      },
      function (error) {
        console.log("FAILED...", error);
      },
    );
}
