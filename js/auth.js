var usernameInput = document.getElementById('username-input');
var passwordInput = document.getElementById('password-input');
var loginBtn = document.getElementById('login-btn');

loginBtn.addEventListener('click', function () {
  var username = usernameInput.value;
  var passwd = passwordInput.value;

  if (
    (username === 'root' && passwd === 'toor') ||
    (username === 'ralphmaron' && passwd === 'iscute')
  ) {
    window.location.href = 'dashboard.php';
  } else {
    alert('Incorrect password.');
  }
});
