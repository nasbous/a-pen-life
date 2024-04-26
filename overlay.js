document.addEventListener("DOMContentLoaded", function() {
    const contactIcon = document.querySelector('img[src="./images/contact-icon.png"]');
    const contactLink = document.querySelector('.cta-contact');
    function showFormOverlay() {
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');

        const formContainer = document.createElement('div');
        formContainer.classList.add('form-container');

        formContainer.innerHTML = `
            <link rel="stylesheet" type="text/css" href="style.css">
            <div class="background-image"></div>
            <div class="form">
                <form action="process_form.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        `;

        overlay.appendChild(formContainer);

        document.body.appendChild(overlay);

        function closeOverlay() {
            document.body.removeChild(overlay);
        }

        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                closeOverlay();
            }
        });

        const closeButton = document.createElement('span');
        closeButton.classList.add('close-btn');
        closeButton.innerHTML = '&times;';
        closeButton.addEventListener('click', closeOverlay);
        formContainer.appendChild(closeButton);
    }

    contactIcon.addEventListener('click', showFormOverlay);

    contactLink.addEventListener('click', function(event) {
        event.preventDefault();
        showFormOverlay();
    });
});
