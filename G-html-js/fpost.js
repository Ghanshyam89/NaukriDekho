function validate_post(){

var  jobname = document.forms['post_form']['jobtitle'];
var errors = document.getElementById(error_1);

var letters=/^[a-zA-Z ]*$/; //^this means starting character should match and $ means last charachter should match giving space after Z will accep the spaces too between the words

var prof = document.forms['post_form']['profession'];

var duration = document.forms['post_form']['jobduration'];

var numbers = /^[0-9]+$/;

var budget1 = document.forms['post_form']['budget'];

var format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;

var phone = document.forms['post_form']['contactNo'];

var address_1 = document.forms['post_form']['address'];

if(title()){
    if(profession()){
        if(duration11()){
            if(budget()){
                if(phoneVal()){
                    if(address()){

                    }
                }

            }

        }

    }
    
}

function title()
{
   if(jobname.value.length>20){
        alert('job title must be less then 20 charachters');
        errors.innerHTML = "job title must be less then 20 charachters!";
        errors.style.display="block";
        return false;
   }

   else if(!jobname.value.match(letters))//when the condition is not true then execute this
   {
       alert("Job title must contain only alphabets");
       errors.innerHTML = "Job title must only contain Alphabets";
       errors.style.display="block";
       return false;
   }
   return true;
}

function profession(){
   if(prof.value.length>20){
        alert('job title must be less then 20 charachters');
        return false;
   }

   else if(!prof.value.match(letters))//when the condition is not true then execute this
   {
       alert("Profession must contain only alphabets");
       return false;
   }
   return true;
}


   function duration11(){

   if(duration.value.length>20){
        alert(' Must be less then 20 charachters');
        return false;
   }

   else if((!duration.value.match(letters)) || (!duration.value.match(numbers)))//when the condition is not true then execute this
   {
       alert("Must contain alphabets or numbers ");
       return false;
   }
   return true;
}




    function budget(){
        if((!budget1.value.match(numbers)) || (!budget1.value.match(format))){
            alert('Please in numbers and special charachters only');
            return false;
        }
    }


    function phoneVal() {
        
    
        if (phone.value.length == 10 && phone.value.match(numbers)) {
            return true;
        }
        else {
            alert("Please enter Valid mobile Number!");
            return false;
        }
    }


    function address(){

        if(address_1.value.length<50){
            if((address_1.value.match(letters)) || (address_1.value.match(numbers)) || (address_1.value.match(format)))//when the condition is not true then execute this
            {
                return true;
            }
            else{
                alert("Must contain alphabets or numbers or special charachters ");
                return false;
            }
        }
        else{
            alert(' Must be less then 50 charachters');
            return false;
        }
     }

 }
