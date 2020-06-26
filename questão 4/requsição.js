function tabela(){
    
    let tabela = document.getElementById("tabela")

    fetch("(https://jsonplaceholder.typicode.com/posts")
    .then(
        Response => Response.json()
    )
    .then(
        data=>{
            data.forEach( pessoa =>{
                    let linha = tabela.insertRow(-1);
                    let postId = linha.insertCell(0)
                    let id = linha.insertCell(1);
                    let name = linha.insertCell(2);
                    let email = linha.insertCell(3);
                    let city = linha.insertCell(4);
                    postId.innerHTML = pessoa.postId;
                    id.innerHTML = pessoa.id; 
                    name.innerHTML = pessoa.name; 
                    email.innerHTML = pessoa.email;
                    body.innerHTML = pessoa.body;
                  }

             )
            
        }
    )
 }