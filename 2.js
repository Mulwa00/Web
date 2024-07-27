<script>
    // Function to show the mobile navigation menu
    function showmenu()
        var navLinks = document.getElementById("navLinks");
        navLinks.style.right = "0";
    &rbrace;

    // Function to hide the mobile navigation menu
    function hidemenu()
        var navLinks = document.getElementById("navLinks");
        navLinks.style.right = "-200px";
    &rbrace;

    // Function to validate the form
    function validateForm() 
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var contact = document.getElementById("contact").value;
        var message = document.getElementById("message").value;

        // Check if any field is empty
        if (name.trim() == "" || email.trim() == "" || contact.trim() == "" || message.trim() == "") {
            alert("All fields are required!"){}
            return false;
        &rbrace;

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) 
            alert("Invalid email address!");
            return false;
        &rbrace;

        // Validate contact number
        var contactRegex = /^\d{10}$/;
        if (!contactRegex.test(contact)) 
            alert("Invalid contact number! Please enter a 10-digit number.");
            return false;
        &rbrace;

        return true; // Submit the form if all validations pass
    &rbrace;
</script>
