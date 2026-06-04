document.addEventListener('DOMContentLoaded', () => {
  const designSota = document.querySelector('.js-design-sota');

  console.log('designSota:', designSota);

  if (!designSota) return;

  const designImg = designSota.querySelector('.js-design-sota-img');

  console.log('designImg:', designImg);

  if (!designImg) return;

  const defaultSrc = designImg.dataset.defaultSrc;
  const hoverSrc = designImg.dataset.hoverSrc;

  console.log('defaultSrc:', defaultSrc);
  console.log('hoverSrc:', hoverSrc);

  designSota.addEventListener('mouseenter', () => {
    console.log('hover design');
    designImg.src = hoverSrc;
  });

  designSota.addEventListener('mouseleave', () => {
    console.log('leave design');
    designImg.src = defaultSrc;
  });
});