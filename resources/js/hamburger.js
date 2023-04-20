// Hamburgir animation :?)

let burgir = document.getElementById("burgir");
let icon1 = document.getElementById("a");
let icon2 = document.getElementById("b");
let icon3 = document.getElementById("c");
let navbar = document.getElementById('heromenu');

const maxWindowHeight = document.documentElement.clientHeight;
let isCurrentlyScrolled = false;
let isCurrentlyClicked = false;
let firstPageLoad = true;
let clickCounter = 0;

burgir.addEventListener('click', function () {

    // // Store the state of the burgir menu (open or closed = 1 or 2).
    // clickCounter < 2 ? clickCounter += 1 : clickCounter = 1;

    // // Store the state of 'isCurrentlyClicked' variable based on the 'clickCounter'.
    // clickCounter == 1 ? isCurrentlyClicked = true : isCurrentlyClicked = false;

    // // Handle coloring logic.
    // (!isCurrentlyScrolled && isCurrentlyClicked) ? navbar.classList.add('navbar_black') : '';
    // (!isCurrentlyScrolled && !isCurrentlyClicked) ? navbar.classList.remove('navbar_black') : '';

    // navbar.classList.toggle('navbar_black');

    // Handle burgir animation logic.
    icon1.classList.toggle('a');
    icon3.classList.toggle('b');
    icon2.classList.toggle('c');

    // firstPageLoad ? (navbar.classList.remove('navbar_black'), firstPageLoad = false) : '';
});


// window.addEventListener('scroll', function () {

//     // Calculate & apply the currently needed opacity value based on the current scroll & max screen height value. 
//     let currentOpacity = (window.scrollY / maxWindowHeight);
//     navbar.style.backgroundColor = `rgba(0,0,0,${currentOpacity})`;

//     // If scroll reaches 60% of the viewport height, add a shadow to the navbar.
//     if (window.scrollY >= maxWindowHeight * 0.6) {
//         navbar.style.boxShadow = '0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1)';
//     }
//     else {
//         navbar.style.boxShadow = 'none';
//     }

//     // Add color to navbar even if scroll reaches the vh.
//     if (window.scrollY >= maxWindowHeight) {
//         isCurrentlyScrolled = true;
//         navbar.classList.add('navbar_black');
//     }
//     else {
//         isCurrentlyScrolled = false;
//         if (!isCurrentlyClicked) {
//             navbar.classList.remove('navbar_black');
//         }
//     }
// });
