const items = document.querySelectorAll('.menu-item');
const image = document.getElementById('slider-image');

const prev = document.getElementById('prev');
const next = document.getElementById('next');

const images = [
    '/aquamikstroy/aquamikstroy/assets/img/slide1.jpg',
    '/aquamikstroy/aquamikstroy/assets/img/slide2.jpg',
    '/aquamikstroy/aquamikstroy/assets/img/slide3.png',
    '/aquamikstroy/aquamikstroy/assets/img/slide4.jpg',
    '/aquamikstroy/aquamikstroy/assets/img/slide5.jpg'
];

let current = 0;

function updateSlider(index) {
    current = index;
    image.src = images[current];
    items.forEach(item => item.classList.remove('active'));
    items[current].classList.add('active');
}

items.forEach(item => {
    item.addEventListener('click', () => {
        console.log(item.dataset.index);
        updateSlider(parseInt(item.dataset.index));
    })
})

next.addEventListener('click', () => {
    current = (current + 1) % images.length;
    updateSlider(current);
})

prev.addEventListener('click', () => {
    current = (current - 1 + images.length) % images.length;
    updateSlider(current);
})