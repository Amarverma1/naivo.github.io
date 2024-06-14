document.addEventListener('DOMContentLoaded', () => {
     const subscribeButton = document.getElementById('subscribeButton');
     const modal = document.getElementById('popUpForm');
     const closeButton = document.querySelector('.close-button');

 
     subscribeButton.addEventListener('click', () => {
         modal.style.display = 'block';
     });
 
     closeButton.addEventListener('click', () => {
         modal.style.display = 'none';
     });
 
     window.addEventListener('click', (event) => {
         if (event.target === modal) {
             modal.style.display = 'none';
         }
     });
 });