// function displayImage(input) {
//     if (input.files && input.files[0]) {
//         const reade = new FileReader();
//         reade.onload = function (e) {
//             const uploadedImage = document.getElementById('uploaded_image');
//             uploadedImage.src = e.target.result;
//             uploadedImage.classList.remove('default_image');
//             uploadedImage.classList.add('uploaded_image');
//         }
//         reade.readAsDataURL(input.files[0]);
//     }
//   }
// // javascript do hamburguer
//   const hamburger = document.querySelector('.hamburger');
// const navLinks = document.querySelector('.nav-links');

// hamburger.addEventListener('click', () => {
//   hamburger.classList.toggle('active');
// });

// JavaScript para alternar o menu hambúrguer
document.querySelector('.hamburguer').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.nav-links').classList.toggle('active');
});
