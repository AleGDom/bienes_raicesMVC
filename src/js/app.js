 document.addEventListener('DOMContentLoaded', initApps);


function initApps(){
    darkmode();
    verifytheme();
    menuResponsive();
    contact();
}

function contact(){
    const contact=document.querySelectorAll('#contact');
    const methodForm=document.querySelector('.method-contact');
    contact.forEach(contact=>{
        contact.addEventListener('click',function(e){
            if(e.target.value=='telefono'){
                methodForm.innerHTML=`

                <label for="tel">Telefono</label>
                <input type="tel" name="tel" id="tel" placeholder="Escribe tu telefono">

                <p>Si eligio Telefono elija fecha y hora</p>
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
                `;
            } else{
                methodForm.innerHTML=`
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu correo">
                `;
            }
        });
    })
}

function verifytheme(){
    if(localStorage.getItem('darkmode')==='on'){
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
        localStorage.setItem('darkmode','on');
    } else{
        localStorage.setItem('darkmode','off');

    }
}