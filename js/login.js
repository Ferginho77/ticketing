var eyeicon = document.getElementById("eye");
let password = document.getElementById("password");

eyeicon.onclick = function () {
  if (password.type === "password") {
    password.type = "text";
    eyeicon.classList.add("eye-off");
  } else {
    password.type = "text";
    password.type = "password";
    eyeicon.classList.add("eye");
  }
};
