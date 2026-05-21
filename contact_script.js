document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("w-c-s-bgc_p-1-dm-id-2");
    if (!contactForm) return;

    contactForm.addEventListener("click", function (event) {
        event.preventDefault();

        let name = document.getElementById("ijowk-3").value.trim();
        let email = document.getElementById("ipmgh-3").value.trim();
        let phone = document.getElementById("imgis-3").value.trim();
        let subject = "Contact Form Inquiry";
        let message = document.getElementById("i5vyy-3").value.trim();

        let messageContainer = document.getElementById("contact-message");
        if (!messageContainer) {
            messageContainer = document.createElement("div");
            messageContainer.id = "contact-message";
            messageContainer.style.marginTop = "10px";
            document.getElementById("contactForm").appendChild(messageContainer);
        }

        let errorMessage = "";

        if (!/^[A-Z][a-zA-Z ]*$/.test(name)) {
            errorMessage += "Name must start with a capital letter.<br>";
        }
        if (!/^\d{10}$/.test(phone)) {
            errorMessage += "Phone number must be exactly 10 digits.<br>";
        }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            errorMessage += "Invalid email format.<br>";
        }

        if (errorMessage) {
            messageContainer.innerHTML = errorMessage;
            messageContainer.style.color = "red";
            messageContainer.style.padding = "10px";
            messageContainer.style.border = "1px solid red";
            messageContainer.style.backgroundColor = "#f8d7da";
            return;
        }

        let formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("phone", phone);
        formData.append("subject", subject);
        formData.append("message", message);

        fetch("contact_form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            messageContainer.innerHTML = data.message;
            messageContainer.style.color = data.status === "success" ? "green" : "red";
            messageContainer.style.padding = "10px";
            messageContainer.style.border = data.status === "success" ? "1px solid green" : "1px solid red";
            messageContainer.style.backgroundColor = data.status === "success" ? "#d4edda" : "#f8d7da";
        })
        .catch(error => {
            console.error("Error:", error);
            messageContainer.innerHTML = "An error occurred. Please try again later.";
            messageContainer.style.color = "red";
            messageContainer.style.padding = "10px";
            messageContainer.style.border = "1px solid red";
            messageContainer.style.backgroundColor = "#f8d7da";
        });
    });
});
