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
      e.preventDefault(); 
    }
    }

    const formArtiste = document.querySelector("#queryArtists");
    const formChanson = document.querySelector("#querySongs")
    const selectArtistes = document.querySelector("#artists");
    const selectChansons = document.querySelector("#songs");
    
    document.querySelector("#formJS").addEventListener("submit", (e) => {
      const query = formArtiste.value;
      const query2 = formChanson.value;
      selectArtistes.innerHTML =' <option value="neutre" disabled selected >Artistes correspondants à la recherche</option>' ;
      selectChansons.innerHTML = ' <option value="neutre" disabled selected >Titres correspondants à la recherche</option>';
      e.preventDefault();
      search2(query);
      search(query,query2);

    });

    
    function search2(param) {
      const url = `http://217.182.174.155:5000/ws/2/artist?query=${param}%20&fmt=json`;
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          console.log("data", data);
          const artists = data.artists;
          artists.forEach((element) => {
            const nameArtist = element["name"];
            document.querySelector(
              "#artists"
            ).innerHTML += `<option value="${nameArtist}">${nameArtist}</option>`;
          });
        })
        .catch((err) => console.log(err));
    }
    
    function search(param,param2) {
      const url = `http://217.182.174.155:5000/ws/2/recording?query=recording:${param2}%20AND%20artist:${param}%20&fmt=json`;
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          console.log("data", data);
          const recordings = data.recordings;
          recordings.forEach((element) => {
            const nameSong = element.title; 
            document.querySelector(
              "#songs"
            ).innerHTML += `<option value="${nameSong}">${nameSong}</option>`;
          });
        })
        .catch((err) => console.log(err));
    }
