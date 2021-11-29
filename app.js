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

    // document.querySelector("#formJS").addEventListener("submit", (e) => {
    //   const query = formArtiste.value;
    //   e.preventDefault();
    //   search(query);
    // });
    
    // function search(param) {
    //   const url = `http://217.182.174.155:5000/ws/2/artist?query=${param}%20&fmt=json`;
    //   fetch(url)
    //     .then((response) => response.json())
    //     .then((data) => {
    //       console.log("data", data);
    //       const artists = data.artists;
    //       artists.forEach((element) => {
    //         const nameArtist = element["name"];
    //         document.querySelector(
    //           "#artists"
    //         ).innerHTML += `<option value="${nameArtist}">${nameArtist}</option>`;
    //       });
    //     })
    //     .catch((err) => console.log(err));
    // }


    document.querySelector("#formJS").addEventListener("submit", (e) => {
      const query = formArtiste.value;
      e.preventDefault();
      search(query);
    });
    
    function search(param) {
      const url = `http://217.182.174.155:5000/ws/2/artist?query=${param}%20&fmt=json`;
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          console.log("data", data);
          const artists = data.artists;
          artists.forEach((element) => {
            const nameArtist = element["name"];
            document.querySelector(
              "#listeArt"
            ).innerHTML += `<p>${nameArtist}</p>`;
          });
        })
        .catch((err) => console.log(err));
    }


    // fetch("http://localhost:8080/apiCurl.php")
    // .then((res) => res.json())
    // .then((artistes) => {
    //   console.log(artistes);
    //   const artists = artistes;
    //     artists.forEach((element) => {
          
    //       console.log(element.name);
    //       const nameArtist = element.name;
    //       document.querySelector(
    //         "#artists"
    //       ).innerHTML += `<option value="${nameArtist}">${nameArtist}</option>`;
    //     });


        // chuck.innerText = facts.value;
        // document.querySelector("#cat").src = cats[0].url;
      // });
    
   

      // fetch("https://api.chucknorris.io/jokes/random")
      // .then((res) => res.json())
      // .then((facts) => {
      //   console.log(facts);
      //   chuck.innerText = facts.value;
      //   // document.querySelector("#cat").src = cats[0].url;
      // });