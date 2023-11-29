const main = document.getElementById('main');
var i = 2;

//追加
function addBox() {
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
        left.setAttribute('name', `words${i}[word_left]`);
        left.setAttribute('cols', '40');
        left.setAttribute('style', 'overflow:hidden');
        
        div.appendChild(left);
        
        var right = document.createElement('textarea');
        right.classList.add('right');
        right.setAttribute('id', 'right_'+i);
        right.setAttribute('name', `words${i}[word_right]`);
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
    i--
}