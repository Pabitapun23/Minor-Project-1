function loginFormValidate(){
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var errorMessage = document.getElementById('errorMessage');
  
  if (email == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Email cannot be empty';
        return false;
    } else {
        document.getElementById('message').style.color = '';
        document.getElementById('message').innerHTML = '';
        
    }
    
    if(password == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Password cannot be empty';
        return false;

    } else {
        document.getElementById('message1').style.color = '';
        document.getElementById('message1').innerHTML = '';
        
    }
    if (password.length<=8) {
      document.getElementById('message1').style.color = 'red';
      document.getElementById('message1').innerHTML = 'Password is too short';
    return false;
  }
    if (password.length>=20) {
      document.getElementById('message1').style.color = 'red';
      document.getElementById('message1').innerHTML = 'Password is too long';
    return false;
  }
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(email)){
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'Enter valid email';
       return false;  
  }
  return true;
}    

function show_hide() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

