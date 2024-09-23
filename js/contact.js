function onSubmit(event) {
  event.preventDefault();
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  var input = `Name: ${name}\nEmail: ${email}\nMessage: ${message}`;

  if (!name || !email || !message) return;
  alert(`Inputted\n${input}`);
  document.getElementById('name').value = '';
  document.getElementById('email').value = '';
  document.getElementById('message').value = '';
}
