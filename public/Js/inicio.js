let btnMenu= document.querySelector('.btn-menu');
let menu = document.querySelector('.list-container');
let ContainerMenu = document.querySelector('.menu');
let activador=true


/*Menu de navegacion */

btnMenu.addEventListener('click', () =>
{

    document.querySelector('.btn-menu i').classList.toggle('fa-times');

    if(activador)
    {
        menu.style.left="0";
        menu.style.transition="0.4s";

        activador=false;
    }
    else
    {
        activador=false;

        menu.style.left="-100%";
        menu.style.transition="0.6s";

        activador=true;
    }

});

/*Se intercalan las clases */

let enlaces = document.querySelectorAll('.lists li a');

enlaces.forEach( (element)=>
{

    element.addEventListener('click', (event) =>
    {
        enlaces.forEach( (link) => 
        {
            link.classList.remove('activo');
        });

        event.target.classList.add('activo');
    });

});

/*Se hacen los efectos scroll */

let preScrollpos = window.pageYOffset;
let goTop = document.querySelector('.go-top')

window.onscroll = () =>
{
    let arriba = window.pageYOffset;

    if (arriba <= 600)
    {
        ContainerMenu.style.borderBotton ="none";
        goTop.style.left = "-15%";
    }
    else
    {
        ContainerMenu.style.borderBotton ="2px solid #0779e4";
        goTop.style.left = "0";
        goTop.style.transition="0.5s";
    }
}

goTop.addEventListener('click', () =>
{
    document.documentElement.scrollTop=0;
    document.body.scrollTop=0;
});