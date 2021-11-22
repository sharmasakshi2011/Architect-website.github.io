function validate(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var error_message = document.getElementById('error_message');
    
    error_message.style.padding = "10px";
    
    var text;
    if(username==null){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(password==null){
      text = "Please Enter Valid Name";
      error_message.innerHTML = text;
      return false;
    }
    alert('login successfull');
    return true;
}