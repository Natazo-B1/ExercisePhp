// Ambil Semua Element
// const btn = document.getElementById('btn');
// const Box = document.getElementById('Box');
// btn.addEventListener('click', load);
// btn.addEventListener('dblclick', Fadeout);
document.addEventListener('DOMContentLoaded',displayNone);
// // DisplayNone
function displayNone(){
 Box.style.display = 'none';
 }
 
/// Alert
 function Alert(message,classlist){
   const div = document.createElement('div');
 const Ald  = document.getElementById('Ald')
 div.className = `mt-2 alert alert-${classlist}`
 div.appendChild(document.createTextNode(message));
 Ald.appendChild(div);
 
 }
 /// Run function
 const form = document.getElementById('form');
 form.addEventListener('submit',Submit);

 function Submit(e){
   cosn = document.getElementById('name');



  e.preventDefault();
 }
 
// // Fadeout
// function Fadeout(e) {
//   // body...
//   Box.style.display = 'none';
//   btn.textContent = 'Read More'
//   e.preventDefault()
// }
// // Function show
// function load(e) {
//   // body...
//   Box.style.display = 'block'
//   btn.textContent = 'Double klik To Fadeout'
//   e.preventDefault()
// }

