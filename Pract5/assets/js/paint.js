let canvas = document.getElementById('draw');
context = canvas.getContext("2d");
let clickX = new Array();
let clickY = new Array();
let clickDrag = new Array();
let paint;
let mouseX;
let mouseY;

//розкоментуйте якщо використовуєте layout з практичною
//необхідно отримати додактовий offset
let offsetLeft = canvas.parentElement.parentElement.offsetLeft;
let offsetTop  = canvas.parentElement.parentElement.offsetTop;


canvas.addEventListener('mousedown',function (e){
   mouseX = e.pageX - this.offsetLeft;
   mouseY = e.pageY - this.offsetTop;
   mouseX = e.pageX - this.offsetLeft - offsetLeft;
   mouseY = e.pageY - this.offsetTop - offsetTop; 
   paint = true;
   addClick(mouseX, mouseY);
   redraw();
});
canvas.addEventListener('mousemove',function (e){
   if(paint){
       addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);

       addClick(e.pageX - this.offsetLeft - offsetLeft, e.pageY - this.offsetTop - offsetTop, true);
       redraw();
   }
});
canvas.addEventListener('mouseup',function (e){
   paint = false;
});
canvas.addEventListener('mouseleave',function (e){
   paint = false;
});

function addClick(x, y, dragging)
{
   clickX.push(x);
   clickY.push(y);
   clickDrag.push(dragging);
}
function onclickRadio() {
	var nameRadio = document.getElementsByName('nameRadio');
	var rezultatRadio;
	for (var i = 0; i < nameRadio.length; i++) {
		if (nameRadio[i].type === 'radio' && nameRadio[i].checked) {
			rezultatRadio = nameRadio[i].value;
		}
   }
   return rezultatRadio;
}             


function redraw(){
   context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas

   context.strokeStyle = onclickRadio();
   context.lineJoin = "round";
   context.lineWidth = 5;

   for(var i=0; i < clickX.length; i++) {
       context.beginPath();
       if(clickDrag[i] && i){
           context.moveTo(clickX[i-1], clickY[i-1]);
       }else{
           context.moveTo(clickX[i]-1, clickY[i]);
       }
       context.lineTo(clickX[i], clickY[i]);
       context.closePath();
       context.stroke();
   }
}
document.getElementById('clear').addEventListener('click', function() {
   context.clearRect(0, 0, canvas.width, canvas.height);
 }, false);