$(document).ready(function () {
  $('#signup-form').submit(function (event) {
    event.preventDefault()
    var fullname = $('#signUpFullName').val()
    var username = $('#signUpUsername').val()
    var password = $('#signUpPassword').val()

    console.log(
      `fullname: ${fullname}, username: ${username}, password: ${password}`
    )

    $.post(
      'api/register_user.php',
      {
        fullname: fullname,
        username: username,
        password: password,
      },
      function (response) {
        var res = JSON.parse(response)

        if (res.success == '1') {
          alert('User registered successfully')
          $('#signUpFullName').val('')
          $('#signUpUsername').val('')
          $('#signUpPassword').val('')
          // tab to sign in
        } else {
          alert('Registration failed: ' + res.error)
        }
      }
    )
  })
})
