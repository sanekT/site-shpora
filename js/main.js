'use strict';

let ul = document.querySelector('.sidebar__list');
let mainbar = document.querySelector('.mainbar');
const sidebarIndex = document.querySelector('.sidebar__index');

/*
    на кнопку "На главную" вешаю событие клик, по которому получаю html из страницы index.html
    и через регулярку нахожу тот участок html, который отображается на главной странице
*/
sidebarIndex.addEventListener('click', function(){
    let url = `https://sanekt.github.io/`;
    let request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4){
            outputResponse(request.response)
        }
    };

    request.open('GET', url, false);
    request.send(null);
});

function outputResponse(response){
    const pattern = /<section class="mainbar total-block">(.*?)<\/section>/s;
    const result = response.match(pattern);
    mainbar.innerHTML = result[1];
}

ul.onclick = function(e){
    let target = e.target.closest('li');
    
    let folderOpen = this.querySelectorAll('.sidebar__folder-open');
    let sideBar2 = document.querySelectorAll('.sidebar__list2');
    for(let val of sideBar2){
        if(val.closest('li') == target) continue;
        val.style.display = 'none';
    }
    
    if(folderOpen.length > 0){
        for(let val of folderOpen){
            if(val.closest('li') == target) continue;
            val.classList.remove('sidebar__folder-open');
            val.classList.add('sidebar__folder-close');
        }
    }
    
    if(target.tagName != 'LI') return;
    if(e.target.closest('ul').className == 'sidebar__list2') return;
    
    let span = target.querySelector('span');
    span.classList.toggle('sidebar__folder-open');
    span.classList.toggle('sidebar__folder-close');
    
    let tech = target.dataset.tech;
    
    let ul2 = target.querySelector('ul');
    let ds = getComputedStyle(ul2).display;
    if(ds == 'block') ul2.style.display = 'none';
    else ul2.style.display = 'block';
    
    
    
    ul2.onclick = function(e){
        let target = e.target;
        let arc = target.dataset.arc;
        
        //тут для получения url можно было использовать location.href, который вернул бы http://site-shpargalka
        let url = `https://sanekt.github.io/site-shpora/articles/${tech}-${arc}.html`;
        let request = new XMLHttpRequest();
        request.onreadystatechange = function(){
            if(request.readyState == 4){
                mainbar.innerHTML = request.response;
            }
        };
        request.open('GET', url);
        request.send(null);
        
        ul2.style.display = 'none';
    }
}
