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


// ma popup pour la creation d'un devis
var devis = document.getElementById('devis_demande');

devis.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
      title: "Envoyer !",
      text: "Votre demande à bien été prise en compte !",
      icon: "success",
      confirmButtonColor: "#21610B",
      background: '#F6F5EE',
      allowOutsideClick: false,
      customClass: {
          title: 'generation_cle'
      },
    }).then(() => {
        window.location.href = url;
    }); 
});


// ma popup pour la creation d'un devis
var devis = document.getElementById('formDevis');

devis.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
      title: "Envoyer !",
      text: "Votre avis viens d'être poster !",
      icon: "success",
      confirmButtonColor: "#21610B",
      background: '#F6F5EE',
      allowOutsideClick: false,
      customClass: {
          title: 'generation_cle'
      },
    }).then((result) => {
        window.location.href = url;
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