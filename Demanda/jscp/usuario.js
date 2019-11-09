let usuarios = [
   document.querySelector("#nome"),
   document.querySelector('#sobrenome'),
   document.querySelector('#email'),
   document.querySelector('#cpf'),
   document.querySelector('#setor'),
   document.querySelector('#permissao')
]

let tbody = document.querySelector('table tbody')

document.querySelector('.modal').addEventListener('submit', function(event){
         event.preventDefault()
         
         let x = document.createElement("INPUT");
         x.setAttribute("type", "checkbox");

         let tr = document.createElement('tr')
         usuarios.forEach(function(usuario){
            
            

            let td = document.createElement('td')
            td.textContent = usuario.value
           
            tr.appendChild(x)
            tr.appendChild(td)
            
         })

         tbody.appendChild(tr)

         usuarios[0].value=''
         usuarios[1].value=''
         usuarios[2].value=''
         usuarios[3].value=''
         usuarios[4].value=''
         usuarios[5].value=''    
})
//excluir por checkbox
//let checkbox = document.querySelectorAll('[name=checkb]:checked');
//for (let i = 0; i < checkbox.length; i++)
 // deletar(checkbox[i]);

