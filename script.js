// This function is used for the form validation on sign-up page
function validation() {
  let email = document.getElementById("floatingInput").value;
  let password = document.getElementById("floatingPassword").value;

  if (email === "" && password === "") {
    alert("Please fill all fields");
    return false;
  } else if (!email.includes("@") && !email.includes(".")) {
    alert("Please enter a valid email address");
    return false;
  } else if (password.length < 8) {
    alert("Your Password must be at least 8 characters long.");
    return false;
  } else {
    return true;
  }
}
