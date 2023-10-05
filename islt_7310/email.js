function setEmailSubject() {
            const firstName = document.getElementById("first_name").value;
            const lastName = document.getElementById("last_name").value;
            const email = document.getElementById("email").value;

            // Create a subject with dynamic content
            const subject = `Educational Website Contact  - ${firstName} ${lastName}`;

            // Encode the subject for the mailto: link
            const encodedSubject = encodeURIComponent(subject);

            // Generate the mailto: link with the subject
            const mailtoLink = `mailto:your@email.com?subject=${encodedSubject}`;

            // Set the mailto link as the form action
            document.getElementById("contactForm").setAttribute("action", mailtoLink);
}