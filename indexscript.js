// compteur de caractères du formulaire

document.addEventListener('DOMContentLoaded', function() {
    var messageInput = document.getElementById('message');
    var counter = document.getElementById('counter');

    messageInput.addEventListener('input', function() {
        var remaining = 1000 - messageInput.value.length;
        counter.textContent = remaining + ' caractères restants';
    });
});


// Affichage des commentaires

$(document).ready(function() {
    var commentIndex = 0;
    var comments = $('.comments');
    comments.hide().first().show();

    setInterval(function() {
        comments.eq(commentIndex).slideUp(function() {
            commentIndex = (commentIndex + 1) % comments.length;
            comments.eq(commentIndex).slideDown();
        });
    }, 5000); // Change comments every 5 seconds
});

// Bannière des partenaires

let copy = document.querySelector('.partenaires-images').cloneNode(true);
document.querySelector('#partenaires').appendChild(copy);

window.onload = function() {
    var images = document.querySelectorAll('.partenaires-images img');
    var totalWidth = 0;

    for (var i = 0; i < images.length; i++) {
        totalWidth += images[i].offsetWidth;
    }

    var partenairesImages = document.getElementsByClassName('partenaires-images');
    for (var i = 0; i < partenairesImages.length; i++) {
        partenairesImages[i].style.width = totalWidth + 'px';
    }

    for (var i = 0; i < partenairesImages.length; i++) {
        partenairesImages[i].addEventListener('mouseover', function() {
            for (var j = 0; j < partenairesImages.length; j++) {
                partenairesImages[j].style.animationPlayState = 'paused';
            }
        });

        partenairesImages[i].addEventListener('mouseout', function() {
            for (var j = 0; j < partenairesImages.length; j++) {
                partenairesImages[j].style.animationPlayState = 'running';
            }
        });
    }
}
