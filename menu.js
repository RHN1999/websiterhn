// JavaScript Document
let btnmenu = document.getElementById('btnabrir')
let menu = document.getElementById('menumobile')
let overlay = document.getElementById('overlaymenu')

btnmenu.addEventListener('click', ()=>{
	menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
	menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
	menu.classList.remove('abrir-menu')
})