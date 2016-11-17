/**
 * Main scripts
 */

import array from './ES8'
import headerDisplay from './HeaderResponsive'

const button = document.querySelector('.PrimaryHeader__button')

button.addEventListener('click', headerDisplay, false)

console.log(`ES8 support: ${array.includes(2)}`)
