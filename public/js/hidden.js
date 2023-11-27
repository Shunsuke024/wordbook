var i = 0;
var count = 10

for(i=0; i<=count; i++){
    const right = document.getElementById(`right_${i}`);
    right.style.visibility = "visible";
    const btn = document.getElementById(`button_${i}`);
    
    btn.addEventListener('click', function(){
        if(right.style.visibility == "visible"){
            right.style.visibility = "hidden";
        }else{
            right.style.visibility = "visible";
        }
    });
}
