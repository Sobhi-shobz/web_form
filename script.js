document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if (!name || !email || !password) {
        alert('Please fill all required fields.');
        event.preventDefault();
    } else {
        // Additional client-side validation if necessary
        console.log('Form submitted successfully!');
    }
});
