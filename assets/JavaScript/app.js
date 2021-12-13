$(document).ready(function () {
  console.log("start");
  
  let Is_valid = false;

  let password = $("#password");
  let password_confirm = $("#password_confirm");

  var True = "../img/pictogram/False.svg";
  var img = ["../img/pictogram/False.svg", "../img/pictogram/True.svg"];

  function validate() { //on vérifie la validitée du mot de passe
    var format = ['!','@','#','$','%','^','&','*','(',')','_','+','\\', '-' , ',' ,'=' ,'[' , ']' , '{','}',';',':','|',';','<','>','/','?','*']
    var str = password.val();
    if (str.match(/[0-9]/g)) {

    }
    if (str.match(/[A-Z]/g)) {
    }
    if (str.match(/[a-z]/g)) {

    }
    format.forEach(element => {
        if (str.indexOf(element))
        {
            
        }
    });
    
    if (str.length <= 10) {
      console.log("longeures");
    }
  }
  password.keyup(function () {
      validate()
  })
  password_confirm.keyup(function () {
      
    console.log(password.val() + " " + password_confirm.val()); //
    if (password_confirm.length == 0) {
      console.log("No value ");
    } else {
      if (password.val() != password_confirm.val()) {// on vérifie que les mdps sont parel
        //password_confirm.prop('invalid', true);
        this.setCustomValidity("les deux mots de passe ne sont pas égaux");
        console.log("false");
      } else {
        //password_confirm.prop('valid', true);
        this.setCustomValidity("");
        console.log("true");
      }
    }
  });
});
