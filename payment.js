// Retrieve the course details from sessionStorage
const courseTitle = sessionStorage.getItem('courseTitle');
const coursePrice = sessionStorage.getItem('coursePrice');

// Display the course details on the payment page
document.getElementById('courseTitle').textContent = courseTitle;
document.getElementById('coursePrice').textContent = `$${coursePrice}`;
