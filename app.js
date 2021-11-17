const resetMDP = document.querySelector("#resetMDP");

resetMDP.addEventListener("click",()=>{
    if ( confirm( "Souhaitez-vous vraiment faire une demande de réinitialisation de mot de passe ?" ) ) { console.log("Mail envoyée");
        
    } else {
     console.log("annulation") ;  
    }
})