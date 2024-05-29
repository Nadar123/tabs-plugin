import '../css/style.scss';
import 'normalize.css';

document.addEventListener('DOMContentLoaded', function () {
  const accordionItems = document.querySelectorAll('.tab-item');

  accordionItems.forEach(function (item) {
    const title = item.querySelector('.tab-title');

    // const event = window.matchMedia('(max-width: 768px)').matches ? 'click' : 'mouseover';

    title.addEventListener("click", function (e) {
      e.preventDefault();
      // If the item is already active, remove the 'active' class and return
      if (item.classList.contains('active')) {
        item.classList.remove('active');
        return;
      }

      // Close all items except the one being hovered over
      accordionItems.forEach(function (nonHoveredItem) {
        if (nonHoveredItem !== item) {
          nonHoveredItem.classList.remove('active');
        }
      });

      // Add 'active' class to the item being hovered 
      item.classList.add('active');
    });
  });
});