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


//Ici mon JS pour la création d'un devis
document.getElementById('devis_demande').addEventListener('submit', function (event) {
  event.preventDefault();

  Swal.fire({
      title: "Envoyer !",
      text: "Votre demande de devis à bien été envoyé !",
      icon: "success",
      confirmButtonColor: "#21610B",
      confirmButtonText: "OK",
      background: '#F6F5EE',
      customClass: {
          title: 'generation_cle'
      },
      allowOutsideClick: false,
  }).then((result) => {
      if (result.isConfirmed) {
          this.submit();
      }
  });
});

document.getElementById('formAvis').addEventListener('submit', function(event) {
  event.preventDefault();
  
  Swal.fire({
      title: "Envoyer !",
      text: "Votre avis à bien été posté !",
      icon: "success",
      confirmButtonColor: "#21610B",
      confirmButtonText: "OK",
      background: '#F6F5EE',
      customClass: {
          title: 'generation_cle'
      },
      allowOutsideClick: false,
  }).then((result) => {
      if (result.isConfirmed) {
          this.submit();
      }
  });
});


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
}