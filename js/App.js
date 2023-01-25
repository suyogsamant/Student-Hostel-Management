const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function validateForm() {
  let x = document.forms["myForm"]["Uname"].value;
  let y = document.forms["myForm"]["Pass"].value;
  if (x == "" || y == "") {
    alert("Empty columns must be filled");
    return false;
  }
}

function validateForm2() {
  let w = document.forms["myForm2"]["Uname2"].value;
  let x = document.forms["myForm2"]["Mail"].value;
  let y = document.forms["myForm2"]["password"].value;
  let z = document.forms["myForm2"]["cpassword"].value;
  if (w == "" || x == "" || y == "" || z == "") {
    alert("Empty columns must be filled");
    return false;
  }
}