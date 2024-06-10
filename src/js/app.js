import '../css/style.scss';
import 'normalize.css';

const initializeTabs = () => {
  const tabItems = document.querySelectorAll('.tab-item');
  const tabContents = document.querySelectorAll('.tab-content');
  // Show tab content by index
  const showTabContent = (index) => {
    // Remove 'active' class from all tab contents and items
    tabContents.forEach(tab => tab.classList.remove('active'));
    tabItems.forEach(tab => tab.classList.remove('active'));

    if (tabContents[index]) {
      tabContents[index].classList.add('active');
    }
    if (tabItems[index]) {
      tabItems[index].classList.add('active');
    }
  }

  // Show the first tab content 
  showTabContent(0);

  // Event listener for clicking on tab items
  tabItems.forEach((tabItem, index) => {
    tabItem.addEventListener('click', () => {
      showTabContent(index);
    });
  });
}

document.addEventListener('DOMContentLoaded', initializeTabs);

document.addEventListener('DOMContentLoaded', () => {
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const titleWrapper = item.querySelector('.title-wrapper');
    const text = item.querySelector('.text');
    const arrow = item.querySelector('.rotate-arrow');

    titleWrapper.addEventListener('click', () => {
      // Remove 'active' class from all text elements and arrows
      accordionItems.forEach(item => {
        const currentText = item.querySelector('.text');
        const currentArrow = item.querySelector('.rotate-arrow');
        if (currentText !== text) {
          currentText.classList.remove('active');
          currentArrow.classList.remove('active');
        }
      });

      // Toggle 'active' class on the clicked text element and arrow
      text.classList.toggle('active');
      arrow.classList.toggle('active');
    });
  });
});