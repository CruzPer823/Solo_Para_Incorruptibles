const cbxEstado = document.getElementById('estados')
cbxEstado.addEventListener('change',getMunicipios)

const cbxMunicipio = document.getElementById('municipios')


function fetchAndSetData(url, formData,targetElement){
    return fetch(url,{
        method: "POST",
        body: formData,
        mode: 'cors'
    })
    .then(response=>response.json())
    .then(data => {
        targetElement.innerHTML = data
    })
    .catch(err => console.log(err))
}

function getMunicipios(){
    let estado = cbxEstado.value
    let url = '../includes/getMunicipios.php'
    let formData = new FormData()
    formData.append('estado', estado)

    fetchAndSetData(url,formData,cbxMunicipio)
}