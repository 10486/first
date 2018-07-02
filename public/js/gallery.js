addStyle('gallery.css');
addStyle('pagination.css');
featured.addEventListener('click',function (event) {
  let e = event.target;
  if(e.classList.contains('image')||e.parentNode.classList.contains('image')){
  if(e.classList.contains('active-img')){
    e.classList = 'image full';
    e.lastChild.style.width = '100%';
    return;
  }else if (e.parentNode.classList.contains('active-img')) {
    e.parentNode.classList = 'image full';
    e.style.width = '100%';
    return;
  }
  e.style.width = '70vw';
  e.parentNode.classList = e.parentNode.classList + ' active-img' ;
  active = e;
}});
