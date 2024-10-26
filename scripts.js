// Function to handle the click event
function handleClick(event) {
  alert("Clicked item ID: " + event.target.id);
}

// Add event listener to each <li> element
document.querySelectorAll("li").forEach(function (li) {
  li.addEventListener("click", handleClick);
});
