//form validation
//function to show error
function findError(errorId, errorMsg) {
  document.getElementById(errorId).innerHTML = errorMsg;
}

//function to validate form

function validateForm() {
  //get form values
  let username = document.form.username.value;
  let email = document.form.email.value;
  let password = document.form.password.value;
  let rpassword = document.form.rpassword.value;

  //define errors with default values
  let unerror = (emerror = pserror = rperror = true);

  //validate username
  if (username === "") {
    findError("unerror", "Username is required!");
  } else {
    let regex = /^[a-zA-Z\s]+$/;
    if (regex.test(username) === false) {
      findError("unerror", "Letters Only");
    } else {
      findError("unerror", "");
      unerror = false;
    }
  }

  //validate email
  if (email === "") {
    findError("emerror", "Your email is required!");
  } else {
    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (regex.test(email) === false) {
      findError("emerror", "Please enter a valid email address");
    } else {
      findError("emerror", "");
      emerror = false;
    }
  }

  if (password === "") {
    findError("pserror", "Password is required!");
  } else {
    let regex = /^(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{15,}$/;

    if (regex.test(password) === false) {
      findError(
        "pserror",
        "passwords must have,at least an uppercase,a lowercase,a digit,a special character and longer than or equal 15 characters"
      );
    } else {
      findError("pserror", "");
      pserror = false;
    }
  }

  if (rpassword !== password) {
    findError("rperror", "password does not Match!");
  } else {
    findError("rperror", "");
    rperror = false;
  }

  //prevent submit if false
  if ((unerror || emerror || pserror || rperror) === true) {
    return false;
  }
}
