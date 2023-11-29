var i = 0;
var count = 99;
console.log(count);
//非表示
for(i=0; i<=count; i++){
    const left = document.getElementById(`left_${i}`);
    const right = document.getElementById(`right_${i}`);
    left.style.visibility = "visible";
    right.style.visibility = "visible";
    const btn1 = document.getElementById(`button1_${i}`);
    const btn2 = document.getElementById(`button2_${i}`);
    
    btn1.addEventListener('click', function(){
        if(left.style.visibility == "visible"){
            left.style.visibility = "hidden";
        }else{
            left.style.visibility = "visible";
        }
    });
     btn2.addEventListener('click', function(){
        if(right.style.visibility == "visible"){
            right.style.visibility = "hidden";
        }else{
            right.style.visibility = "visible";
        }
    });
}

//一括非表示
var j = 0;
function allhide_left(){
    for(j=0; j<=count; j++){
        const left = document.getElementById(`left_${j}`);
        if(left.style.visibility == "visible"){
            left.style.visibility = "hidden";
        }else{
            left.style.visibility = "visible";
        }
    }
}
function allhide_right(){
    for(j=0; j<=count; j++){
        const right = document.getElementById(`right_${j}`);
        if(right.style.visibility == "visible"){
            right.style.visibility = "hidden";
        }else{
            right.style.visibility = "visible";
        }
    }
}
