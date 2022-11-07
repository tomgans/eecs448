function validate() {
    var password = document.getElementById("pwd");
    var validated = document.getElementById("validated");
    if(password.value == '' || validated.value == ''){
        document.getElementById("message").innerHTML = "Must enter a password."
    }
    else if(validated.value.length < 8 || password.value < 8){
        document.getElementById("message").innerHTML = "Password must be at least 8 characters."
    }
    else if(validated.value != password.value){
        document.getElementById("message").innerHTML = "Passwords do not match."
    }
    else{
        document.getElementById("message").innerHTML = "Password is acceptable."
    }
}
