function stopLoop(){
    let image = document.getElementById('loop');
    if (image.src.match("Looping")){
        image.src = "images/Luso - DEF - RGB-02.svg";
    }
}