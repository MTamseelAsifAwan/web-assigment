// Select the form element
const loginForm = document.getElementById("loginForm");

// Function to handle form submission via AJAX
const handleFormSubmit = async (event) => {
  event.preventDefault(); // Prevent default form submission

  const formData = new FormData(loginForm); // Get form data
  const url = loginForm.getAttribute("action"); // Get form action URL

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      throw new Error("Network response was not ok.");
    }

    const data = await response.text(); // Process response data if needed

    // You can perform actions based on the response here

    console.log(data); // Log the response or perform other actions
  } catch (error) {
    console.error("There was an error!", error);
  }
};

// Attach event listener to the form for submission
loginForm.addEventListener("submit", handleFormSubmit);
