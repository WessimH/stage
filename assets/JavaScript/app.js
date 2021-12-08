$(document).ready(function()
{console.log("start")
    let MDP = document.getElementById('#MDP')
    let mdp_confirm = $('#password_confirm')
    mdp_confirm.change(function () 
    {
       console.log("test") 
       if (MDP.value() == mdp_confirm.value()){
        console.log("True")
        }
        else {
        console.log("False")
        }
        })
    
})