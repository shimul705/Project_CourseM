function enroll(courseTitle, coursePrice) {
    // Store the course details in the browser's sessionStorage
    sessionStorage.setItem('courseTitle', courseTitle);
    sessionStorage.setItem('coursePrice', coursePrice);
  
    // Redirect the user to the payment page
    window.location.href = 'payment.html';
  }
  