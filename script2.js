function validate(){
    var name = document.getElementById('name').value;
    var Contact = document.getElementById('contact').value;
    var Password = document.getElementById('password1').value;
    var CPassword = document.getElementById('password2').value;
    var error_message = document.getElementById('error_message');
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length > 20){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(Contact) || Contact.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(Password != CPassword){
        text="Password mismatched";
        error_message.innerHTML = text;
        return false;
    }
    if(Password.length < 6){
      text="Password Should be 6 character long";
      error_message.innerHTML = text;
      return false;
    }
    return true;
  }