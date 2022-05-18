var check = function() {
  if (document.getElementById('password').value == 
      document.getElementById('repassword').value) {
    document.getElementById('repassword').style.color = 'green';
    document.getElementById('repassword').innerHTML = '';
      return false;
  } else {
    document.getElementById('repassword').style.color = 'red';
    document.getElementById('repassword').innerHTML = 'not matching';
      return false;
  }
    return true;
}

function validateProfile(){
  var username = document.getElementById('username').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var repassword = document.getElementById('repassword').value;
  var address = document.getElementById('address').value;
  var contact = document.getElementById('contact').value;
  
  if (username == "") {
    if (username == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Username cannot be empty';
        return false;
    } else (username != "") {
        document.getElementById('message1').style.color = '';
        document.getElementById('message1').innerHTML = '';     
    }
  } 
  else if (email == "") {
      if(email == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Email cannot be empty';
        return false;
    } else if(email != "") {
        document.getElementById('message2').style.color = '';
        document.getElementById('message2').innerHTML = '';
    }
     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    else if(!re.test(email)){
      document.getElementById('message2').style.color = 'red';
      document.getElementById('message2').innerHTML = 'Enter valid email';
       return false;
    }  
  }
    
  else if(password == "") {
    if (password == "") {
        document.getElementById('message3').style.color = 'red';
        document.getElementById('message3').innerHTML = 'Password cannot be empty';
        return false;
    } else {
        document.getElementById('message3').style.color = '';
        document.getElementById('message3').innerHTML = '';      
    }

    if (repassword == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Repassword cannot be empty';
        return false;
    } else {
      document.getElementById('message').style.color = '';
      document.getElementById('message').innerHTML = ''; 

    if (password != repassword) {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'two password do not match';
    return false;
  } else {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = '';         
    }
    if (password.length<=8) {
      document.getElementById('message3').style.color = 'red';
      document.getElementById('message3').innerHTML = 'Password is too short';
    return false;
  }
    if (password.length>=20) {
      document.getElementById('message3').style.color = 'red';
      document.getElementById('message3').innerHTML = 'Password is too long';
    return false;
    }
  }

  else if (address == "") {
    if (address == "") {
        document.getElementById('message4').style.color = 'red';
        document.getElementById('message4').innerHTML = 'Address cannot be empty';
        return false;
    } else if (address != "") {
        document.getElementById('message4').style.color = '';
        document.getElementById('message4').innerHTML = '';       
    }
  }

  else if (contact == "") {
    if (contact == "") {
        document.getElementById('message5').style.color = 'red';
        document.getElementById('message5').innerHTML = 'Contact cannot be empty';
        return false;
    } else if (contact != "") {
        document.getElementById('message5').style.color = '';
        document.getElementById('message5').innerHTML = '';   
    }
  } 
  return true;
} 

var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
};
