
    function validate_form() {
        var fname = document.applyform.firstName;
        var lname = document.applyform.lastName;
        var email = document.applyform.Email;
        var phone = document.applyform.PhoneNumber;


        if (nameVal(fname)) {
            if(nameVal(lname)){
                if (emailVal(email)) {
                    if (phoneVal(phone)) {
                        alert("Your Application has been Successfully Sent!")
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }




function nameVal(name) {
    var letters = /^['A-Za-z']+$/;
    // var letters = /^[a-zA-Z][a-zA-Z ]*$/;  // For Full Name
    if (name.value.match(letters)) {
        return true;
    }
    else {
        alert("Please enter characters only!");
        return false;
    }
}



function emailVal(email) {
    emailvalidate = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    if (email.value.match(emailvalidate)) {
        return true;
    }
    else {
        alert("Please enter a valid Email id!");
        return false;
    }
}


function phoneVal(phone) {
    var digit = /^[0-9]+$/;

    if (phone.value.length == 10 && phone.value.match(digit)) {
        return true;
    }
    else {
        alert("Please enter Valid mobile Number!");
        return false;
    }
}

}