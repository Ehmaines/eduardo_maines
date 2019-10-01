const dataButtons = document.querySelectorAll(".data-button");
const tabelaHorarioAgendados = document.querySelector("#id-horarios-agendados");
const selectedData = document.querySelector("#selected-data");

for (let i = 0; i < dataButtons.length; i++){
    dataButtons[i].addEventListener("click", function(event){
        event.preventDefault();
        const currentLine = this.parentElement.parentElement;
        console.log(selectedData.value);
        console.log(currentLine.id);
        toggleSelectedData(selectedData.value, currentLine.id);
    });
}

function toggleSelectedData(data,time){
    tabelaHorarioAgendados.innerHTML += 
    `<tr><td>${data}</td><td>${time}</td><td><button>Cancelar</button></td></tr>`;

}