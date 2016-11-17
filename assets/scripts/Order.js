import $ from 'zepto-modules'

export default class Order
{
  constructor() {
    $('body').on('click', '.ProjetOrder', this._onLinkClick.bind(this))
  }

  // Handlers
  //-----------------------------------------------------o

  _onLinkClick(e) {
    e.preventDefault()
    const cat = $(this).attr('data-slug')
    console.log(this)
  }
}
