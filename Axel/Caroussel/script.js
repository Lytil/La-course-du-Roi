var swiper = new Swiper('.swiper-container', {
  loop:true,
  autoplay: {
    delay: 2500
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
    },
  },
});

