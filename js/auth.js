document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("registerForm")?.addEventListener("submit", function (e) {
        e.preventDefault();
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        fetch("php/register.php", {
            method: "POST",
            body: JSON.stringify({ name, email, password }),
            headers: { "Content-Type": "application/json" },
        })
        .then(response => response.json())
        .then(data => alert(data.message));
    });

    document.getElementById("loginForm")?.addEventListener("submit", function (e) {
        e.preventDefault();
        const email = document.getElementById("loginEmail").value;
        const password = document.getElementById("loginPassword").value;

        fetch("php/login.php", {
            method: "POST",
            body: JSON.stringify({ email, password }),
            headers: { "Content-Type": "application/json" },
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                window.location.href = "home.html";
            } else {
                alert(data.message);
            }
        });
    });
});
