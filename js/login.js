document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();

    let email = document.querySelector(".email").value;
    let password = document.querySelector(".password").value;

    fetch("php/login.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ email, password }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.status === "success") {
            window.location.href = "dashboard.html";
        }
    });
});
