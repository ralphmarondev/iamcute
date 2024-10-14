document.getElementById('login-form').addEventListener('submit', function (e) {
  e.preventDefault();

  const formData = new FormData(this);

  for (let [key, value] of formData.entries()) {
    console.log(`${key}: ${value}`);
  }

  fetch('php/login_user.php', {
    method: 'POST',
    body: formData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error('Network response was not ok: ' + response.statusText);
      }
      return response.json();
    })
    .then((data) => {
      if (data.status === 'success') {
        alert('Login successful!');
        window.location.href = 'dashboard.html';
      } else {
        alert('Login failed:' + data.message);
      }
    })
    .catch((error) => {
      console.error('Error:', error);
      alert('An error occurred. Please try again later.');
    });
});
