const FormDiv = document.querySelector(".Form-div");
const ButtonsDiv = document.querySelector(".Buttons-div");
const loginForm = document.querySelector(".login-form");
const SignupForm = document.querySelector(".signup-form");
const SignupBlock = document.querySelector(".signup-button");
const LoginBlock = document.querySelector(".login-button");
const SignupBtn = document.querySelector(".signup-btn");
const LoginBtn = document.querySelector(".login-btn");
SignupBtn.addEventListener("click", function () {
  FormDiv.classList.add("sliding-effect");
  ButtonsDiv.classList.add("slidingeffect2");
  SignupBlock.classList.toggle("Hide");
  LoginBlock.classList.toggle("Hide");
  SignupForm.classList.add("active2");
  loginForm.classList.remove("active2");
  FormDiv.classList.remove("slidingeffect3");
  ButtonsDiv.classList.remove("slidingeffect3");
});
LoginBtn.addEventListener("click", function () {
  FormDiv.classList.add("slidingeffect3");
  ButtonsDiv.classList.add("slidingeffect3");
  SignupBlock.classList.toggle("Hide");
  LoginBlock.classList.toggle("Hide");
  SignupForm.classList.remove("active2");
  loginForm.classList.add("active2");
  FormDiv.classList.remove("sliding-effect");
  ButtonsDiv.classList.remove("slidingeffect2");
});

// for eye and creating display and not display of password
var tags = document.querySelectorAll("#password");
var eyes = document.querySelectorAll("#eye");
for (let j = 0; j < tags.length; j++) {
  eyes[j].addEventListener("click", () => {
    if (tags[j].classList.contains("hiden")) {
      tags[j].setAttribute("type", "text");
      eyes[j].classList.add("fa-eye");
      eyes[j].classList.remove("fa-eye-slash");
      tags[j].classList.remove("hiden");
    } else {
      // eyes[j].addEventListener("click", () => {
      tags[j].setAttribute("type", "password");
      eyes[j].classList.remove("fa-eye");
      eyes[j].classList.add("fa-eye-slash");
      tags[j].classList.add("hiden");
    }
  });
}