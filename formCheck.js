const form = document.querySelector('.form1');
const submitBtn = document.querySelector('button[type="submit"]');

// add event listener to submit button
submitBtn.addEventListener('click', function(event) {
  // prevent the form from submitting by default
  event.preventDefault();

  // get all form fields
  const breed = document.querySelector('#breed').value;
  const age = document.querySelector('#age').value;
  const gender = document.querySelector('input[name="gender"]:checked');
  const cat = document.querySelector('input[name="cat"]:checked');
  const dog = document.querySelector('input[name="dog"]:checked');
  const kid = document.querySelector('input[name="kid"]:checked');

  // check if any field is blank
  if (breed === '' || age === '' || gender === null || cat === null && dog === null && kid === null) {
    alert('Please fill out all fields before submitting the form.');
  } else {
    // submit the form if all fields are filled out
    form.submit();
  }
});