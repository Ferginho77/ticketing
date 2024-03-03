// const passwordField = document.getElementById("password");
// const showPasswordEye = document.getElementById("eye");
// const hidePasswordEye = document.getElementById("eye-off");

// showPasswordEye.addEventListener("click", function () {
//   passwordField.type = "text";
//   showPasswordEye.style.display = "none";
//   hidePasswordEye.style.display = "block";
// });

// hidePasswordEye.addEventListener("click", function () {
//   passwordField.type = "password";
//   hidePasswordEye.style.display = "none";
//   showPasswordEye.style.display = "block";
// });

// const eyeicon = document.getElementById("eye");
// let password = document.getElementById("password");

// eyeicon.onclick = function () {
//   if (password.type === "password") {
//     password.type = "text";
//     eyeicon.setAttribute("data-feather", "eye-off");
//     // Menghapus kelas 'eye' dan menambahkan kelas 'eye-off' untuk mengubah ikon
//     eyeicon.classList.remove("eye");
//     eyeicon.classList.add("eye-off");
//   } else if (password.type === "text") {
//     password.type = "password";
//     eyeicon.setAttribute("data-feather", "eye");
//     // Menghapus kelas 'eye-off' dan menambahkan kelas 'eye' untuk mengubah ikon
//     eyeicon.classList.remove("eye-off");
//     eyeicon.classList.add("eye");
//   }
//   // Memanggil fungsi 'feather.replace()' untuk memperbarui ikon Feather setelah perubahan
//   feather.replace();
// };

// let password = document.getElementById("password");
// let icon = document.getElementById("eye");
// const hide = setAttribute("data-feather", "eye-off")

// function showHide() {
//   if (password.type === "password") {
//     password.setAttribute("type", "text");
//     icon.classList.add(hide);
//   } else {
//     password.setAttribute("type", "password");
//     icon.classList.remove(hide);
//   }
// }

// feather.replace();

let password = document.getElementById("password");
let icon = document.getElementById("eye");
const hide = "eye-off"; // Tidak perlu menggunakan setAttribute di sini

function showHide() {
  if (password.type === "password") {
    password.setAttribute("type", "text");
    icon.setAttribute("data-feather", hide); // Mengubah attribute "data-feather" sesuai dengan nilai hide
    console.log("1");
  } else if (password.type === "text") {
    password.setAttribute("type", "password");
    icon.setAttribute("data-feather", "eye"); // Kembali ke icon "eye" karena password type bukan "text"
    console.log("2");
  }
  feather.replace(); // Panggil feather.replace() setelah mengubah attribute
}

// Panggil fungsi showHide() saat icon di-klik
