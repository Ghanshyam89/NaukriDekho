function validate_register() {
    var name = document.registerform.firstName;//id and form name
    var namelast = document.registerform.lastName;
    var birth = document.registerform.birthdayDate;

  
    var email = document.registerform.emailAddress;
    var password_1 = document.registerform.password;
    var password_2 = document.registerform.cpassword;
    var phone = document.registerform.phoneNumber;


    if (nameVal(name)) {
        if (nameVallast(namelast))  {
            if (func_birth(birth))  {
                if (emailVal(email))  { 
                    if (pass_word(password_1)) {
                        if (passwordVal_2(password_2)) {
                            if (phoneVal(phone)) {
                                alert("Registered Successfully !");
                            }
                        }
                    }
                }
            }
        }
    }


    function nameVal(name) {
        var letters = /^['A-Za-z']+$/;
        if (name.value.match(letters)) {
            return true;
        }
        else {
            alert("Please enter characters only!");
            return false;
        }
    }

     function nameVallast(namelast) {
        var charachters = /^['A-Za-z']+$/;
        if (namelast.value.match(charachters)) {
            return true;
        }
        else {
            alert("Please enter characters only!");
            return false;
        }
    }

    function func_birth() {
        //Get the date from the TextBox.
        var dateString = document.getElementById("birthdayDate").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
        
        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
            var parts = dateString.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);

            var dtCurrent = new Date();
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                alert('Eligibility 18 years ONLY.');
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    alert('Eligibility 18 years ONLY.');
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        alert('Eligibility 18 years ONLY.');
                        return false;
                    }
                }
            }
            return true;
        } else {
            alert('Enter date in dd/MM/yyyy format ONLY.');
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


    function passwordVal_1(password_1){
        var digit = /^[0-9]+$/;
        var letters = /^['A-Za-z']+$/;
        var specialChars = /[!@#$%^&()_+\-=\[\]{};':"\\|,.<>\/?]*/;
        //except`~*
        // alert("passwordVal_1");
        if((password_1.value.match(digit)) && (password_1.value.match(letters)) && (password_1.value.length==8) || (pass.value.match(specialChars))){
            alert("Good");
            return true;
        }
        else{
            alert("Please enter a strong password!");
            return false;
        }
    }

    function pass_word(pass){
        var digit = /^[0-9]+$/;
        var letters = /^['A-Za-z']+$/;
        var specialChars = /[!@#$%^&()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        //except`~*

        if((pass.value.match(digit)) && (pass.value.match(letters)) && (pass.value.length==8) || (pass.value.match(specialChars))){
            return true;
        }
        else{
            alert("Please enter correct password!");
            return false;
        }

    }    

    function passwordVal_2(password_2){

        if(password_2.value != password_1.value)
        {  //why does it is showing error
            alert("Password does not match!");
            return false;
        }
        else{
            return true;
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