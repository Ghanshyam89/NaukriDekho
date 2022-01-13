function clearErrors(){

  errors = document.getElementsByClassName('form_error'); //accessing the class of form_error and store it in error
  for(let item of errors)//for loop
  {
      item.innerHTML = ""; //it will reset or clr  all the errors if the error has been corrected
  }


}
function seterror(id, error){ 
  //whatever error i give it in the error input will pass the same error in that id
  
  element = document.getElementById(id);
  element.getElementsByClassName('form_error')[0].innerHTML = error;//it means set the form_error innerhtml to seterror and innerhtml used to modify or set the contents of html

}



function validateForm(){
  var returnval = true; //by default it's set
  clearErrors();


  var email = document.forms['myForm']["femail"].value;
  if (email.length>15){
      seterror("typeEmailX", "*Email length is too long");
      returnval = false;
  }
  else{
    alert("All Good!");
  }
  var password = document.forms['myForm']["fpass"].value;
  if (password.length < 8){

      // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
      seterror("typePasswordX", "*Password should be atleast 8 characters long!");
      returnval = false;
  }
}