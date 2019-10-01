function buttonClick()
{
    alert("click");
}

document.querySelector("button").addEventListener('click', buttonClick);

function adicionarhuge() {
    document.querySelector('#hello').classList.toggle('huge');    
}



document.querySelector("#hello").addEventListener('click', adicionarhuge);
