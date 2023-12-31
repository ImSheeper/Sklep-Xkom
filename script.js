let images = ["Icons/baner1.png", "Icons/baner2.png", "Icons/baner3.png"];
let index = 0;
let imageElement = document.getElementById("baner");

function changeImage() {
    index = (index + 1) % images.length;
    imageElement.src = images[index];
}

setInterval(changeImage, 1000);