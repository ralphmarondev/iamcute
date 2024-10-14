document
  .getElementById('register-form')
  .addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('php/register.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === 'success') {
          alert('Registration successful!');
        } else {
          alert('Registration failed:', data.message);
        }
      })
      .catch((error) => {
        console.error('Error:', error);
        alert('An error occured. Please try again later.');
      });
  });
