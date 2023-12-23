/*/ Toggle password visibility
const userPasswordEl = document.querySelector("#password");
const togglePasswordEl = document.querySelector("#togglePassword");

togglePasswordEl.addEventListener("click", function () {
  if (this.checked === true) {
    userPasswordEl.setAttribute("type", "text");
  } else {
    userPasswordEl.setAttribute("type", "password");
  }
});*/const handleFormSubmit = async (event) => {
  event.preventDefault();
  console.log("Form submission started!"); // Log to verify the function is triggered

  const formData = new FormData(loginForm);
  const url = loginForm.getAttribute("action");

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData,
    });
    console.log("Response received:", response); // Log the response object

    if (!response.ok) {
      throw new Error("Network response was not ok.");
    }

    const data = await response.text();

    // Check for a specific success message or condition from the server
    if (data === "success") {
      // Redirect to the next page upon successful login
      window.location.href = "./next_page.php"; // Replace with your desired URL
    } else {
      // Handle other responses or conditions if needed
      console.log("Login failed");
    }
  } catch (error) {
    console.error("There was an error!", error);
  }
};
