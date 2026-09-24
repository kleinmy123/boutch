document.addEventListener('DOMContentLoaded', () => {
  const filters = ['url(#warp1)', 'url(#warp2)', 'url(#warp3)', 'url(#warp4)'];
  const navLinks = document.querySelectorAll('nav a');
  let lastFilter = null;

  navLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
      const available = filters.filter(f => f !== lastFilter);
      const random = available[Math.floor(Math.random() * available.length)];
      link.style.filter = random;
      lastFilter = random;
    });

    link.addEventListener('mouseleave', () => {
      link.style.filter = '';
    });
  });
});