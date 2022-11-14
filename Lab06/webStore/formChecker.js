function formCheck(){
    var item1 = document.getElementById("item1");
    var item2 = document.getElementById("item2");
    var item3 = document.getElementById("item3");
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var amount1 = document.getElementById("amount1");
    var amount2 = document.getElementById("amount2");
    var amount3 = document.getElementById("amount3");

    var isValid = true;
    var validUser = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!username.matches(validUser)){
        if(username.length < 1) alert("Please enter a Username");
        else alert("Username invalid")
        isValid = false;
    }
    if(password.length < 1) alert("Must enter a password");
    if(amount1 && amount2 && amount){
        alert("Select Shipping");
        valid = false;
    }
    if(item1 == 0 && item2 == 0 && item3 == 0){
        alert("Order at least 1 Item")
        valid = false; 
    }
}