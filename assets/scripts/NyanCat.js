export default class NyanCat
{
  nyancat() {
    let _nyan = 0
    const __nyan = [[
      '+      o     +              o      ',
      '    +             o     +       +  ',
      'o          +                       ',
      '    o  +           +        +      ',
      '+        o     o       +        o  ',
      '-_-_-_-_-_-_-_,------,      o      ',
      '_-_-_-_-_-_-_-|   /\\_/\\            ',
      '-_-_-_-_-_-_-~|__( ^ .^)  +     +  ',
      '_-_-_-_-_-_-_-\"\"  \"\"               ',
      '+      o         o   +       o     ',
      '    +         +                    ',
      'o        o         o      o     +  ',
      '    o           +                  ',
      '+      +     o        o      +     '],
      [
        '+      o     +              +      ',
        '    o             o     o       +  ',
        'o          +                       ',
        '    +  o           +        o      ',
        'o        o     o       +        o  ',
        '_-_-_-_-_-_-_-,------,      +      ',
        '-_-_-_-_-_-_-_|   /\\_/\\            ',
        '_-_-_-_-_-_-_-|__( ^ .^)  o     +  ',
        '-_-_-_-_-_-_-_ \"\"  \"\"              ',
        '+      +         o   +       o     ',
        '    o         +                    ',
        '+        +         +      +     o  ',
        '    +           o                  ',
        '+      o     o        o      +     ',
      ]]

    function nyan() {
      console.clear()
      console.log(__nyan[_nyan].join('\n'))
      if (_nyan === 0) { _nyan = 1 } else { _nyan = 0 }
      console.debug('Pour la magie du changement !')
    }

    window.setInterval(nyan, 300)
  }
}
