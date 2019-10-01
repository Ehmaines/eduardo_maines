
var buttonList = document.querySelectorAll("button");

for(i = 0; i< buttonList.length;i++){
    buttonList[i].addEventListener('click', buttonClick);
}
function buttonClick(){
    playSound(this.textContent);
}

function  playSound(key){
    let audio;
    switch (key) {
        case 'w':
            audio = new Audio("sons/tom-1.mp3")
            break;
        case 'a':
            audio = new Audio("sons/tom-2.mp3")
            break;
        case 's':
            audio = new Audio("sons/tom-3.mp3")
            break;
        case 'd':
            audio = new Audio("sons/tom-4.mp3")
            break;
        case 'j':
            audio = new Audio("sons/snare.mp3")
            break;
        case 'k':
            audio = new Audio("sons/crash.mp3")
            break;
        case 'l':
            audio = new Audio("sons/kick-brass.mp3")
            break;

    }
    audio.play();

}

document.addEventListener("keypress", keyPress);

function keyPress(event){
    //console.log(event)
    playSound(event.key);
}