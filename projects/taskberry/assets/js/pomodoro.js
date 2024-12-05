$(document).ready(function () {
  let timer
  let minutes = 15 // Default value
  let seconds = 0
  let isRunning = false

  // Function to update the timer display
  function updateTimerDisplay() {
    $('#time').text(
      `${minutes < 10 ? '0' : ''}${minutes}:${
        seconds < 10 ? '0' : ''
      }${seconds}`
    )
  }

  // Start the countdown
  $('#start-btn').click(function () {
    if (isRunning) {
      clearInterval(timer) // Clear any previous timers
      $(this).text('Resume')
    } else {
      timer = setInterval(function () {
        if (seconds === 0) {
          if (minutes === 0) {
            clearInterval(timer) // Stop the timer when it reaches 00:00
            alert('Pomodoro session is over!')
            isRunning = false
          } else {
            minutes--
            seconds = 59
          }
        } else {
          seconds--
        }
        updateTimerDisplay()
      }, 1000)
      $(this).text('Pause')
    }
    isRunning = !isRunning
  })

  // Reset the timer
  $('#reset-btn').click(function () {
    clearInterval(timer)
    minutes = 15
    seconds = 0
    updateTimerDisplay()
    $('#start-btn').text('Start')
    isRunning = false
  })

  // Set specific timer durations
  $('#start-15-mins').click(function () {
    minutes = 15
    seconds = 0
    updateTimerDisplay()
  })
  $('#start-30-mins').click(function () {
    minutes = 30
    seconds = 0
    updateTimerDisplay()
  })
  $('#start-60-mins').click(function () {
    minutes = 60
    seconds = 0
    updateTimerDisplay()
  })

  // Update the timer based on user input (if needed)
  $('#set-time-btn').click(function () {
    minutes = $('#minutes').val()
    seconds = $('#seconds').val()
    updateTimerDisplay()
    $('#timer-edit-form').addClass('d-none')
    $('#default-timer-display').removeClass('d-none')
  })

  // Cancel editing
  $('#cancel-edit-btn').click(function () {
    $('#timer-edit-form').addClass('d-none')
    $('#default-timer-display').removeClass('d-none')
  })
})
