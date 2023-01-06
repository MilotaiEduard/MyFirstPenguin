document.querySelector('#submit').onclick = function(){
    var password = document.querySelector('#password').value,
    confirmPassword = document.querySelector('#confirmpassword').value,
    username = document.querySelector('#name').value;

    if(username == ""){
        alert("Username field cannot be empty.");
    }

     if(password == ""){
       alert("Password field cannot be empty.");
    }

     if(confirmPassword == "")
        alert("Confirm Password field cannot be empty.");

     if(username == "" && password == "" && confirmPassword == ""){
        alert("Fields cannot be empty.");
    }

      if(password != confirmPassword){
        alert("Passwords didn't match. Please try again.");
        return false;
    }
}