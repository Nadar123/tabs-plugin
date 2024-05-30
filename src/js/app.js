import '../css/style.scss';
import 'normalize.css';
document.addEventListener('DOMContentLoaded', (event) => {
  // Get all tab items and tab content
  const tabItems = document.querySelectorAll('.tab-item');
  const tabContents = document.querySelectorAll('.tab-content');

  // hide all tab content
  function hideAllTabContent() {
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active');
    });
  }

  // remove 'active' class from all tab items
  function removeActiveClassFromAllTabItems() {
    tabItems.forEach(tabItem => {
      tabItem.classList.remove('active');
    });
  }

  // show tab content by index
  function showTabContent(index) {
    tabContents[index].classList.add('active');
    tabItems[index].classList.add('active'); // Add 'active' class to the current tab item
  }

  // Aclick event listener to each tab item
  tabItems.forEach((tabItem, index) => {
    tabItem.addEventListener('click', () => {
      hideAllTabContent();
      removeActiveClassFromAllTabItems();
      showTabContent(index);
    });
  });

  hideAllTabContent();
  removeActiveClassFromAllTabItems();
  showTabContent(0);
});