function validateForm() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var age = document.getElementById("age").value;
  var email = document.getElementById("email").value;
  // var php = document.getElementById("php").checked;

  var password = document.getElementById("password").value;

  // var checkedBox =  ;

  if (firstName.length < 5) {
    document.getElementById("message").innerHTML =
      "First Name should be alphabet and not less than 5 characters";
    return false;
  }
  if (lastName.length < 5) {
    document.getElementById("message").innerHTML =
      "Last Name should be alphabet and not less than 5 characters";
    return false;
  }
  if (age == "") {
    document.getElementById("message").innerHTML = "Please Enter Age";
    return false;
  }

  if (password.length < 8) {
    document.getElementById("message").innerHTML =
      "Password should be alphabet and not less than 8 characters";
    return false;
  }
  if (document.getElementById("profession").checked == false) {
    document.getElementById("message").innerHTML = "Please Select a Profession";
    return false;
  }

  if (document.querySelector("input[type=checkbox]").checked == false) {
    document.getElementById("message").innerHTML =
      "Please select your Preferred Language or At least one";
    return false;
  }

  return true;
}
