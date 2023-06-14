const form = document.querySelector('form');
const fields = Array.from(form.elements);

// add event listener to form submit button
form.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent default form submission behavior

  // check if all fields are filled
  const isFormValid = fields.every(function(field) {
    return field.value.trim() !== '';
  });

  // if all fields are filled, submit the form
  if (isFormValid) {
    form.submit();
  } else {
    alert('Please fill out all fields before submitting.'); // show error message
  }
}); 
