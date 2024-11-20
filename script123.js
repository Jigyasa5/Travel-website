// swipe
var swiper = new Swiper(".review-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
});

// loadmore


let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

// confimartion mail

document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Hide the form and show the confirmation message
    document.querySelector(".booking .book-form").style.display = "none";
    document.getElementById("confirmationMessage").style.display = "block";
});



// Get the search bar and button elements
const searchBar = document.getElementById("searchBar");
const searchBtn = document.querySelector(".search-btn");

// Add event listener for search button click
searchBtn.addEventListener("click", function() {
    const searchQuery = searchBar.value.trim();

    if (searchQuery) {
        // Perform search operation (this is just a placeholder for actual search functionality)
        alert(`Searching for: ${searchQuery}`);
        
        // You can replace the alert with your actual search logic, like sending the query to a server.
        // For now, we'll just clear the input after a search.
        searchBar.value = '';
    } else {
        alert("Please enter a search query.");
    }
});

// Optional: Add event listener for the Enter key press to trigger the search
searchBar.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        searchBtn.click();
    }
});
