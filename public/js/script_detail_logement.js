var textElements = document.querySelectorAll('.text');
var toggleElements = document.querySelectorAll('.toggle');

textElements.forEach((textElement, index) => {
    let fullText = textElement.textContent;
    let shortText = fullText.slice(0, 100) + '...';

    textElement.textContent = shortText;

    toggleElements[index].addEventListener('click', function(event) {
        event.preventDefault();
        if (textElement.textContent === shortText) {
            textElement.textContent = fullText;
            toggleElements[index].textContent = 'voir moins';
        } else {
            textElement.textContent = shortText;
            toggleElements[index].textContent = 'en savoir plus';
        }
    });
});


/* function showPopup() {
    swal({
      title: "Succès",
      text: "Votre demande de devis a été créée avec succès.",
      icon: "success",
      background: "#F6F5EE",
      button: {
        text: "Ok",
        closeModal: false,
        className: "customButton"
      },
      closeOnClickOutside: false,
      dangerMode: true,
    });
  }

  function submitForm() {
      document.getElementById('myForm').submit(); // Soumet le formulaire
  }


const stars = document.querySelectorAll(".star");
const ratingValueInput = document.getElementById("ratingValue");

stars.forEach(star => {
  star.addEventListener("click", function() {
    const value = parseInt(this.getAttribute("data-value"));
    ratingValueInput.value = value;
    highlightStars(value);
  });
});

function highlightStars(value) {
  stars.forEach(star => {
    const starValue = parseInt(star.getAttribute("data-value"));
    if (starValue <= value) {
      star.textContent = "★";
    } else {
      star.textContent = "☆";
    }
  });
} */