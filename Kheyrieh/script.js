//Only for avoid new line and necessary for div contenteditable
document.querySelector('.input').onkeydown = function(e){
  if(e.keyCode == 13){
     e.preventDefault();
  }  
}