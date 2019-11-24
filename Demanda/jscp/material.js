let materiais = [
    document.querySelector('#produto'),
    document.querySelector('#descricao'),
    document.querySelector('#quantidade'),
    document.querySelector('#entrada')
]
let tbody = document.querySelector('table tbody')
console.log(materiais)
document.querySelector('form').addEventListener('submit', function(material){
    event.preventDefault()
    let tr = document.createElement('tr')
    materiais.forEach(function(material){
        let td=document.createElement('td')
        td.textContent = material.value
        tr.appendChild(td)
    })
       tbody.appendChild(tr)
       materiais[0].value =""
       materiais[1].value =""
       materiais[2].value =""
       materiais[3].value =""
})