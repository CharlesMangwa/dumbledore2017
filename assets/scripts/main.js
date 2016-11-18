/**
* Main scripts
*/
import $ from 'zepto-modules'
import Ajax from './Ajax'
import NyanCat from './NyanCat'
import menuLayout from './ResponsiveMenu'

const button = document.querySelector('.PrimaryHeader__button')
button.addEventListener('click', menuLayout, false)

$(document).ready(() => {
  const main = new Ajax()
  const nyancat = new NyanCat()
  main.ajaxLoadProjects()
  main.ajaxOrderProjects()
  main.ajaxAllProjects()
  nyancat.nyancat()
})
