let sakura = [
    'cherry-blosso.svg',
    'cherry-blossom.svg',
    'sakur.svg',
    'sakura.svg'
]

let body = document.getElementsByClassName('picture');

function createSakura() {
    let newSakura = document.createElement('div');
    newSakura.classList.add('maket');
    newSakura.style.left = Math.random() * 100 + '%';

    let sakuraSize = Math.floor(Math.random() * 40) + 'px';
    newSakura.style.width = sakuraSize; 
    newSakura.style.height = sakuraSize; 

    // newSakura.style.cssText = 'width: 40px; height: 40px;'

    let sakuraName = sakura[ Math.floor(Math.random() * sakura.length) ];
    newSakura.style.background = `url(/icon/Sakura/${sakuraName}) center center / contain no-repeat`;

       
    body[0].appendChild(newSakura);
}

let counter_1 = 0;
setInterval(function(){

    if (counter_1 < 20) {
        createSakura();
    }

    counter_1++;

}, 2475);
