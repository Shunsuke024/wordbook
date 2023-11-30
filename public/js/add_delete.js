const main = document.getElementById('main');
var i = 2;
//追加
function addBox() {
    if(i <= 20){
        const div = document.createElement('div');
        div.setAttribute('id', 'text');
        div.setAttribute('class', 'bg-sky-100');
        if (!div.hasChildNodes()) {
            let select = document.getElementById('category').value;
            var input = document.createElement('input');
            input.setAttribute('value', select);
            input.setAttribute('style', 'display:none');
            input.setAttribute('name', `words${i}[category_id]`);
            div.appendChild(input);
        
            var left = document.createElement('textarea');
            left.classList.add('left');
            left.setAttribute('id', 'left_'+i);
            left.setAttribute('cols', '40');
            left.setAttribute('style', 'overflow:hidden');
            
            div.appendChild(left);
            
            var right = document.createElement('textarea');
            right.classList.add('right');
            right.setAttribute('id', 'right_'+i);
            right.setAttribute('cols', '40');
            right.setAttribute('style', 'overflow:hidden');
            div.appendChild(right);
            
            main.appendChild(div);
            i++;
        }
    }else{
        const massage = document.getElementById('max_box');
        massage.style.display = "block";
    }
}

//削除
function delBox() {
    const main = document.getElementById('main');
    const massage = document.getElementById('max_box');
        massage.style.display = "none";
    if (main.hasChildNodes()) {
        main.lastElementChild.remove();
    }
    i--
}