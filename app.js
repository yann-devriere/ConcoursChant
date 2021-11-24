// const resetMDP = document.querySelector("#resetMDP");

// resetMDP.addEventListener("click",()=>{
//     if ( confirm( "Souhaitez-vous vraiment faire une demande de réinitialisation de mot de passe ?" ) ) { console.log("Mail envoyée");
        
//     } else {
//      console.log("annulation") ;  
//     }
// })


function checkPass() {
     let mdp1 = document.getElementById("password").value;
     let mdp2 = document.getElementById("password2").value;
     if(mdp1 == mdp2) { document.form.submit(); 
     } else { alert("mdp différents");
      event.preventDefault(); 
    }
    }