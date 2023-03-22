document.addEventListener('DOMContentLoaded', function() {
    const $app = document.querySelector('.app');
    const $img = document.querySelector('.app__img');
    const $pageNav1 = document.querySelector('.pages__item--1');
    const $pageNav2 = document.querySelector('.pages__item--2');
    let animation = true;
    let curSlide = 1;
    let scrolledUp, nextSlide;

    let pagination = function(slide, target) {
        animation = true;
        if (target === undefined) {
            nextSlide = scrolledUp ? slide - 1 : slide + 1;
        } else {
            nextSlide = target;
        }

        document.querySelector('.pages__item--' + nextSlide).classList.add('page__item-active');
        document.querySelector('.pages__item--' + slide).classList.remove('page__item-active');

        $app.classList.toggle('active');
        setTimeout(function() {
            animation = false;
        }, 3000)
    }

    let navigateDown = function() {
        if (curSlide > 1) return;
        scrolledUp = false;
        pagination(curSlide);
        curSlide++;
    }

    let navigateUp = function() {
        if (curSlide === 1) return;
        scrolledUp = true;
        pagination(curSlide);
        curSlide--;
    }

    setTimeout(function() {
        $app.classList.add('initial');
    }, 1500);

    setTimeout(function() {
        animation = false;
    }, 4500);

    document.querySelector('.pages').addEventListener('mousewheel DOMMouseScroll', function(e) {
        var delta = e.originalEvent.wheelDelta;
        if (animation) return;
        if (delta > 0 || e.originalEvent.detail < 0) {
            navigateUp();
        } else {
            navigateDown();
        }
    });

    document.querySelector('.pages').addEventListener("click", function(event) {
        if (animation) return;
        if (!event.target.classList.contains('page__item-active')) {
            let target = +event.target.getAttribute('data-target');
            pagination(curSlide, target);
            curSlide = target;
        }
    });
});
