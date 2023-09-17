'use strict'

const loginContainer = document.getElementById('login_container')

const moveOverlay = () => loginContainer.classList.toggle('move')

document.getElementById('abrir-cadastro').addEventListener('click', moveOverlay)
document.getElementById('abrir-login').addEventListener('click', moveOverlay)