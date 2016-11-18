const menuLayout = () => {
  const header = document.querySelector('.PrimaryHeader')
  const classes = Object.keys(header.classList).map((key) => header.classList[key])
  classes.includes('PrimaryHeader--hover')
    ? header.classList.remove('PrimaryHeader--hover')
    : header.classList.add('PrimaryHeader--hover')
}

export default menuLayout
