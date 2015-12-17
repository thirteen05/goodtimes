var DoorMan = (function ($) {

  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  var monthsThirty = ["04", "06", "09", "11"];
  var monthsThirtyOne = ["01", "03", "05", "07", "08", "10", "12"];
  var date = new Date();
  var year = date.getFullYear();

  //Create Month Dropdown
  //Leading Zero added for Age Calculation later

  for (i = 0; i < months.length; i++) {
    $('#dm-age-month').append("<option value='" + ('0' + (i + 1)).slice(-2) + "'>" + months[i] + "</option>");

  };

  //Create Day Dropdown with 31 days by default

  for (i = 1; i <= 31; i++) {
    $('#dm-age-day').append("<option value='" + i + "'>" + i + "</option>");

  };

  //Create Year Dropdown

  for (i = year; i >= 1900; i--) {
    $('#dm-age-year').append("<option value='" + i + "'>" + i + "</option>");

  };

  //Show or Hide the 31st day on months with less than 30 days

  $('#dm-age-month').change(function () {

    var monthValue = $('#dm-age-month').val();

    if (monthsThirty.indexOf(monthValue) !== -1) {
      $("#dm-age-day option[value='31']").hide();

    } else if (monthsThirtyOne.indexOf(monthValue) !== -1) {
      $("#dm-age-day option[value='31']").show();

    };
  });

  $('#check-age-button').click(function () {

    var monthValue = $('#dm-age-month').val();
    var dayValue = $('#dm-age-day').val();
    var yearValue = $('#dm-age-year').val();

    var birthday = new Date(monthValue + '/' + dayValue + '/' + yearValue).getTime();
    var today = new Date();
    var todayTime = today.getTime();

    var ageMill = todayTime - birthday;
    var ageSec = ageMill / 1000;
    var ageMin = ageSec / 60;
    var ageHour = ageMin / 60;
    var ageDay = ageHour / 24;
    var ageYears = ageDay / 365.25;

    if (ageYears > 17.999) {
      $('#age-verify-wrapper').fadeOut();
      $('html').removeClass('scroll-lock');
      sessionStorage.age = ageYears;
    } else{
      sessionStorage.age = ageYears;
      $('#dm-verify-message').text('You must be over 18 years of age to enter this site.');
    }

  });

  return {

    alertAge: function (age) {
      alert(age);
    },

    alertMonths: function (months) {
      alert(months);
    }

  };

})(jQuery);