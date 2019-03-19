// store array of current clinic in localStorage -- needed when reload after error form
	  localStorage.setItem("Current-Clinic", JSON.stringify(locations_clinics[currentClinic]));	

	  // new array of current clinic, coming from localStorage
	  var storedClinic = JSON.parse(localStorage.getItem("Current-Clinic"));
	  // console.log(storedClinic);

	  $('.form_bookAppointment .name_clinic').html(storedClinic[0]);