function stopLoop(){
    let image = document.getElementById('loop');
    if (image.src.match("doorlopen")){
        image.src = "images/Luso - DEF - RGB-02.svg";
    }
}