
var imagesArray=["images/stone.png","images/paper.png","images/scissors.png"]
function displayImage(){
  
    var num=Math.floor(Math.random()*imagesArray.length); // 0...3
    document.canvas1.src=imagesArray[num];  
  
}

function displayStone(){

   document.canvas2.src=imagesArray[0];
  
}

function displayPaper(){


   document.canvas2.src=imagesArray[1];


}

function displayScissors(){

   document.canvas2.src=imagesArray[2];

}
