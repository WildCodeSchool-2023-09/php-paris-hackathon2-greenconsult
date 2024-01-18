/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';


const horaires = document.querySelectorAll('.grid-item');
for(let i = 0 ; i < horaires.length ; i++) {
    horaires[i].addEventListener('click', function() {
        for(let j = 0 ; j < horaires.length ; j++) {
            horaires[j].classList.remove('selected');
        }
        horaires[i].classList.toggle('selected');
    })
}