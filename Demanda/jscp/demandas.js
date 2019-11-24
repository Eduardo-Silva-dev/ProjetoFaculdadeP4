let demandas=[
    document.querySelector('#nome'),
    document.querySelector('#cpf'),
    document.querySelector('#produto'),
    document.querySelector('#quantidade'),
    document.querySelector('#descri'),
    document.querySelector('#setor'),
    document.querySelector('#saida')
]
let tbody = document.querySelector('table tbody')
console.log(demandas)
document.querySelector('form').addEventListener('submit', function(demanda){
event.preventDefault()
    let tr = document.createElement('tr')
    demandas.forEach(function(demanda){
        let td = document.createElement('td')
        td.textContent = demanda.value
        tr.appendChild(td)
    })
    tbody.appendChild(tr)
demandas[0].value =''
demandas[1].value = ''
demandas[2].value = ''
demandas[3].value = ''
demandas[4].value = ''
demandas[5].value = ''
})