/**
* Main scripts
*/
import $ from 'zepto-modules'
import array from './ES8'

import headerDisplay from './HeaderResponsive'

const button = document.querySelector('.PrimaryHeader__button')

button.addEventListener('click', headerDisplay, false)

import NyanCat from './NyanCat'
import Order from './Order'


console.log(`ES8 support: ${array.includes(2)}`)
class Main
{
  ajaxLoad() {
    $('body').on('click', '.buttonMore', (e) => {
      e.preventDefault()
      const paged = $('.buttonMore').attr('data-paged')
      console.log('Paged: ', paged)
      const content = $('.ProjetTemplate__projects')
      $('.buttonMore').remove()
      content.append('<span class="ajaxtext">Recherche en cours</span>')
      $.post(
        ajaxurl,
        {
          'action': 'more-content',
          'paged': paged
        },
        (response) => {
          $('.ajaxtext').remove()
          content.append(response)
        }
      )
    })
  }

  ajaxOrder() {
    $('body').on('click', '.ProjetOrder',(e) => {
      e.preventDefault()
      const term_id = e.path[1].attributes[3].value
      console.log(e)
      const content = $('.ProjetTemplate__projects')
      content.empty().append("Recherche en cours...")
      $.post(
        ajaxurl,
        {
          'action': 'filtre-category',
          'term_id': term_id,
          'paged' : 1
        },
        (response) => {
          content.empty().append(response)
          $('.buttonMore').remove()
        }
      )
    })
  }
}

$(document).ready(() => {
  const main = new Main()
  const nyancat = new NyanCat()
  main.ajaxLoad()
  main.ajaxOrder()
  nyancat.nyancat()
})
