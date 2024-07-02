// document.addEventListener("DOMContentLoaded", function () {
//   fetch("get_schedule.php")
//     .then((response) => response.json())
//     .then((data) => {
//       const scheduleDiv = document.getElementById("schedule");
//       data.forEach((item) => {
//         const session = document.createElement("div");
//         session.textContent = `${item.date} - ${item.title} - ${item.description}`;
//         scheduleDiv.appendChild(session);
//       });
//     })
//     .catch((error) => console.error("Error fetching schedule:", error));
document.addEventListener("DOMContentLoaded", function () {
  fetch("get_conferences.php")
    .then((response) => response.json())
    .then((data) => {
      const conferenceSelect = document.querySelector(
        'select[name="conference_id"]'
      );
      data.forEach((conference) => {
        const option = document.createElement("option");
        option.value = conference.id;
        option.textContent = conference.title;
        conferenceSelect.appendChild(option);
      });
    })
    .catch((error) => console.error("Error fetching conferences:", error));
});



document.addEventListener("DOMContentLoaded", function() {
  fetchConferenceSchedule();
});

function fetchConferenceSchedule() {
  fetch("get_schedule.php")
    .then(response => response.json())
    .then(data => {
      const scheduleDiv = document.getElementById("schedule");
      scheduleDiv.innerHTML = "";

      data.forEach(item => {
        const session = document.createElement("div");
        session.classList.add("conference-session");
        session.innerHTML = `
          <h3>${item.title}</h3>
          <p><strong>Date:</strong> ${item.date}</p>
          <p><strong>Description:</strong> ${item.description}</p>
        `;
        scheduleDiv.appendChild(session);
      });
    })
    .catch(error => console.error("Error fetching conference schedule:", error));
}


$(document).ready(function() {
  function submitForm(formId, actionUrl) {
      $.ajax({
          url: actionUrl,
          type: 'POST',
          data: $(formId).serialize(),
          success: function(response) {
              $('.success-message').html(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.error(textStatus, errorThrown);
              $('.error-message').html('An error occurred. Please try again.');
          }
      });
  }

  // click event listeners submit buttons
  $('form').on('click', '.submit-btn', function(e) {
      e.preventDefault(); 
      var formId = $(this).closest('form');
      var actionUrl = formId.attr('action'); 
      submitForm(formId, actionUrl);
  });
});


// DIGI CLOCK FUNCTIONS 

// function updateClock() {
//   var now = new Date();
//   var hours = now.getHours().toString().padStart(2, '0');
//   var minutes = now.getMinutes().toString().padStart(2, '0');
//   var seconds = now.getSeconds().toString().padStart(2, '0');
//   var timeString = hours + ':' + minutes + ':' + seconds;
  
//   document.querySelector('.clock').textContent = timeString;
// }
// setInterval(updateClock, 1000);
// updateClock();

function countCounter(elementId, endValue) {
  let currentValue = 0;
  const element = document.getElementById(elementId);
  const interval = setInterval(() => {
      element.style.color = 'red';
      element.textContent = currentValue;
      if (currentValue === endValue) {
          clearInterval(interval);
          element.style.color = 'green';
      } else {
          currentValue++;
      }
  }, 800); 
}

document.addEventListener('DOMContentLoaded', () => {
  countCounter('totalConferences', totalConferences);
  countCounter('totalUsers', totalUsers);
  countCounter('totalFeedback', totalFeedback);
});
