$(document).ready(function(){
	
	console.log("start")
    
	let password = $('#password')
    let password_confirm = $('#password_confirm')
    
	password_confirm.keyup(function () 
    {
       console.log(password.val() + ' ' + password_confirm.val()) 
       if (password.val() != password_confirm.val()){
        //password_confirm.prop('invalid', true);
        this.setCustomValidity('les deux mots de passe ne sont pas égaux');
        console.log("false")
        }
        else {
        //password_confirm.prop('valid', true);
        this.setCustomValidity('');
        console.log("true")
        }
        
    })
    
})
