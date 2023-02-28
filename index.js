// Joonas section
// function for onblur on carousel form
function locationVal() {
  let locationVar = document.locForm.location.value.trim();
  if (locationVar.length < 3) {
    alert("Location can't left empty, must have at least three(3) characters");
    return false;
  }
}
// function for validating URL as proper value
// we use const for variables, constant variables, so no let.
function validateForm() {
  const linkInput = document.getElementById("link");
  const linkValue = linkInput.value.trim();

  // check if linkValue is a valid URL
  if (!isValidUrl(linkValue)) {
    alert("Please enter a valid URL in the Link field.");
    linkInput.focus();
    return false;
  }

  return true;
}

function isValidUrl(url) {
  // urlReg to assign that the url is form ftp/http/https followed by ://
  const urlTest = /^(ftp|http|https):\/\/[^ \t\r\n]+$/;
  return urlTest.test(url);
}

// add event listener to the form submit button
// COULDN'T MAKE THIS WORK -> went with onblur
// const submitButton = document.querySelector(".formSubmit");
// submitButton.addEventListener("click", (event) => {
//   if (!validateForm()) {
//     event.preventDefault(); // prevent the form from being submitted if validation fails
//   }
// });

// End of Joonas section
