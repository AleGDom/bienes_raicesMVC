 document.addEventListener('DOMContentLoaded', initApps);


function initApps(){
    darkmode();
    verifytheme();
    menuResponsive();
}

function verifytheme(){
    if(localStorage.getItem('darkmode',true)){
        document.body.classList.add('darkmode');
    } else{
        document.body.classList.remove('darkmode');
    }
}
function menuResponsive(){
    const barras = document.querySelector('.barras-btn');
    barras.addEventListener('click',showMenu);
}

function showMenu(){
    menu = document.querySelector('.navegator');
    menu.classList.toggle('visible');
}



function darkmode(){
    const darkModeBtn=document.querySelector('.darkmode-btn');
    darkModeBtn.addEventListener('click',ChangeTheme);
}

function ChangeTheme(){
    document.body.classList.toggle('darkmode');
    if(document.body.classList.contains('darkmode')){
        localStorage.setItem('darkmode',true);
    } else{
        localStorage.setItem('darkmode',false);

    }
}