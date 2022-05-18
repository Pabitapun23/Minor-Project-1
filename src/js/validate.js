function Validate() {
	var email = document.getElementById('email').value;
	var subject = document.getElementById('subject').value;
    var text = document.getElementById('text').value;

	if (email == "") {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Email cannot be empty';
        return false;
    } else {
        document.getElementById('message').style.color = '';
        document.getElementById('message').innerHTML = '';
        
    }
    if (subject == "") {
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'Subject cannot be empty';
        return false;
    } else {
        document.getElementById('message1').style.color = '';
        document.getElementById('message1').innerHTML = '';
        
    }
    if (text == "") {
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'Text field cannot be empty';
        return false;
    } else {
        document.getElementById('message2').style.color = '';
        document.getElementById('message2').innerHTML = '';
        
    }
    return true;
}