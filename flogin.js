
        function validate11_form() {
          
            var email = document.myForm.typeEmailX;
            var pass = document.myForm.typePasswordX;

           
                if (emailVal(email)) {
                    if(pass_word(pass)){
                        alert("Login Successfull !");
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

    


            
            
      
}











