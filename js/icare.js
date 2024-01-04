let image= document.getElementById("image");
let images=["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg"]

setInterval(function(){
    let random=Math.floor(Math.random()*8)
    image.src=images[random];
},800);