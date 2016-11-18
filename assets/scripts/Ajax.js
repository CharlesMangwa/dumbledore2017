import $ from 'zepto-modules'

export default class Ajax {
  ajaxLoadProjects() {
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
          'paged': paged,
        },
        (response) => {
          $('.ajaxtext').remove()
          content.append(response)
        }
      )
    })
  }

  ajaxOrderProjects() {
    $('body').on('click', '.ProjetOrder', (e) => {
      e.preventDefault()
      const term_id = e.path[1].attributes[3].value
      const content = $('.ProjetTemplate__projects')
      content.empty().append('Recherche en cours...')
      $.post(
        ajaxurl,
        {
          'action': 'filtre-category',
          'term_id': term_id,
          'paged': 1,
        },
        (response) => {
          content.empty().append(response)
          $('.buttonMore').remove()
        }
      )
    })
  }

  ajaxAllProjects() {
    $('body').on('click', '.ProjectAll', (e) => {
      e.preventDefault()
      const content = $('.ProjetTemplate__projects')
      location.reload()
    })
  }
}
