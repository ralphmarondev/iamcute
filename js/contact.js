document
  .getElementById('contact-form')
  .addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    // log form data!
    for (let [key, value] of formData.entries()) {
      console.log(`${key}: ${value}`);
    }

    fetch('php/submit_message.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === 'success') {
          alert('Message submitted successfully!');
        } else {
          alert('Failed to submit the message. Please try again.');
        }
      })
      .catch((error) => {
        console.error('Error:', error);
        alert('An error occured. Please try again later.');
      });
  });
