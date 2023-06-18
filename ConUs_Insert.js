function submitForm(event) {
    event.preventDefault();
  
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
  
    // Validate form
    if (!name || !email || !subject || !message) {
      alert("Please fill in all fields");
      return;
    }
  
    // display a success message
    var successMessage = document.getElementById("successMessage");
    successMessage.textContent = "Form submitted successfully!";
    document.getElementById("contactForm").reset();
  }
  