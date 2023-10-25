const mosaicItems = document.querySelectorAll('.mosaic-item');

mosaicItems.forEach((item) => {
    const imagenTexto = item.querySelector('.imagen-texto');

    item.addEventListener('mouseover', () => {
        item.classList.add('enlarged');
        imagenTexto.style.display ='block';
    });

    item.addEventListener('mouseout', () => {
        item.classList.remove('enlarged');
        imagenTexto.style.display = 'none';
    });
});


