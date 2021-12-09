// const resetMDP = document.querySelector("#resetMDP");

// resetMDP.addEventListener("click",()=>{
//     if ( confirm( "Souhaitez-vous vraiment faire une demande de réinitialisation de mot de passe ?" ) ) { console.log("Mail envoyée");
        
//     } else {
//      console.log("annulation") ; 
//     }
// })

// function checkPass() {
//      let mdp1 = document.getElementById("password").value;
//      let mdp2 = document.getElementById("password2").value;
//      if(mdp1 == mdp2) { document.form.submit(); 
//      } else { alert("mdp différents");
//       e.preventDefault(); 
//     }
//     }

    const formArtiste = document.querySelector("#queryArtists");
    const formChanson = document.querySelector("#querySongs");

    const selectChansons = document.querySelector("#songs");
    
    document.querySelector("#formJS").addEventListener("submit", (e) => {
      const query = formArtiste.value;
      const query2 = formChanson.value;
      selectChansons.innerHTML = ' ';
      e.preventDefault();
      search(query,query2);

    });

    

    function search(param,param2) {
      const url = `http://217.182.174.155:5000/ws/2/recording?query=recording:${param2}%20AND%20artist:${param}%20&fmt=json`;
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          console.log("data", data);
          const recordings = data.recordings;
          recordings.forEach((element) => {
            const nameSong = element.title; 

            const nameArtiste = element["artist-credit"][0]["name"]; 

            document.querySelector(
              "#songs"
            ).innerHTML += `<option value="${nameSong} par ${nameArtiste}">${nameSong} par ${nameArtiste}</option>`;
          });
        })
        .catch((err) => console.log(err));
    }




const pwd = document.querySelector("#password");
const pwd2 = document.querySelector("#password2");

pwd2.addEventListener('keyup',function(){
    if (pwd.value != pwd2.value){
    pwd2.setAttribute("style","background-color : red;");
    }else{
        pwd2.setAttribute("style","background-color : green;")
    }
})

