const main = document.getElementById('main');
var i = 2;

//追加
function addBox() {
    
    const div = document.createElement('div');
    div.setAttribute('id', 'text');
    if (!div.hasChildNodes()) {
        let select = document.getElementById('category').value;
        var input = document.createElement('input');
        input.setAttribute('value', select);
        input.setAttribute('style', 'display:none');
        input.setAttribute('name', `words${i}[category_id]`);
        div.appendChild(input);
    
        var left = document.createElement('textarea');//rows="1" cols="40" style="overflow:hidden"
        left.classList.add('left');
        left.setAttribute('id', 'left_'+i);
        left.setAttribute('name', `words${i}[English]`);
        left.setAttribute('rows', '1');
        left.setAttribute('cols', '40');
        left.setAttribute('style', 'overflow:hidden');
        div.appendChild(left);
        
        var right = document.createElement('textarea');
        right.classList.add('right');
        right.setAttribute('id', 'right_'+i);
        right.setAttribute('name', `words${i}[Japanese]`);
        right.setAttribute('rows', '1');
        right.setAttribute('cols', '40');
        right.setAttribute('style', 'overflow:hidden');
        div.appendChild(right);
        
        main.appendChild(div);
        i++;
    }
}

//削除
function delBox() {
    const main = document.getElementById('main');
    if (main.hasChildNodes()) {
        main.lastElementChild.remove();
    }
}