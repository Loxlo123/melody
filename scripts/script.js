// Filter

const list = document.querySelector('.list'),
    items = document.querySelectorAll('.teacher')
    listitems = document.querySelectorAll('.button-direction')

function filter(){
    list.addEventListener('click', event => {
        const targetId = event.target.dataset.id
        const target = event.target

        if(target.classList.contains('button-direction')){
            listitems.forEach(listitem => listitem.classList.remove('active'));
            target.classList.add('active');
        }

        switch(targetId){
            case 'all':
                getItems('teacher')
                break
            case 'all':
                getItems(targetId)
                break
            case 'vocal':
                getItems(targetId)
                break
            case 'guitar':
                getItems(targetId)
                break
            case 'drum':
                getItems(targetId)
                break
            case 'piano':
                getItems(targetId)
                break
            case 'flute':
                getItems(targetId)
                break
        }
    })
}
filter();

function getItems(className){
    items.forEach(item => {
        if (item.classList.contains(className)){
            item.style.display = 'block'
        } else {
            item.style.display = 'none' //скрытие отсальных элементов
        }
    })
}

// End Filter