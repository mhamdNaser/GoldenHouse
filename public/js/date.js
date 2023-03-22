function checkdate() {
    // retrieve the value of the input element
    var inputDate = document.getElementById("start-date").value;

    // create a new Date object for the current date
    var currentDate = new Date();

    // create a new Date object for the input date (assuming inputDate is in ISO format)
    var reservationStartDate = new Date(inputDate);

    // calculate the difference between the two dates in milliseconds
    var diffInMs = reservationStartDate.getTime() - currentDate.getTime();

    // calculate the difference in days
    var diffInDays = Math.floor(diffInMs / (1000 * 60 * 60 * 24));

    // check if the difference is less than 30 days
    if (diffInDays < 30 || reservationStartDate < currentDate ) {
        document.getElementById('starterror').innerHTML = 'The reservation start date must be at least 30 days from the current date.'
        document.getElementById('starterror').style.color = 'red'
    } else if (reservationStartDate > currentDate) {
        document.getElementById('starterror').innerHTML = 'The reservation start date has been set'
        document.getElementById('starterror').style.color = 'green'
    }
  }

  function checkReservationDates() {
    // Retrieve the value of the input elements
    var startDateInput = document.getElementById("start-date").value;
    var endDateInput = document.getElementById("end-date").value;

    // Create new Date objects for the start and end dates (assuming the inputs are in ISO format)
    var startDate = new Date(startDateInput);
    var endDate = new Date(endDateInput);

    // Calculate the difference between the two dates in milliseconds
    var diffInMs = endDate.getTime() - startDate.getTime();

    // Calculate the difference in days
    var diffInDays = Math.floor(diffInMs / (1000 * 60 * 60 * 24));

    // Calculate the difference in months
    var diffInMonths = Math.floor(diffInDays / 30);

    // Check if the difference is less than 90 days (3 months)
    if (diffInDays < 90 || endDate < startDate ) {
        document.getElementById('end-date-error').innerHTML = 'The reservation end date must be at least 90 days from the start date.';
        document.getElementById('end-date-error').style.color = 'red';
    } else {
        document.getElementById('end-date-error').innerHTML = 'The reservation end date has been set';
        document.getElementById('end-date-error').style.color = 'green';
        document.getElementById('submit').removeAttribute('disabled')
    }
}

function opensubmit(){
}



