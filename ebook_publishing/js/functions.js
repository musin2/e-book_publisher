// Get the checkbox inputs
var categoryInputs = document.querySelectorAll('input[name="category"]');

// Attach a change event listener to each checkbox
categoryInputs.forEach(function(input) {
  input.addEventListener('change', function() {
    // Get the value of the checked checkboxes
    var checkedValues = [];
    categoryInputs.forEach(function(input) {
      if (input.checked) {
        checkedValues.push(input.value);
      }
    });

    // Filter the e-books by category
     var bookList = document.querySelector('.row'); //class-".card-deck"
    var books = bookList.querySelectorAll('.side_panel');
    books.forEach(function(side_panel) {
      var category = side_panel.getAttribute('data-category');
      if (checkedValues.length === 0 || checkedValues.indexOf(category) !== -1) {
        side_panel.style.display = '';
      } else {
        side_panel.style.display = 'none';
      }
    });
  });
});


//search function
/* $(document).ready(function () {
  $("#searchAnything").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#divlist *").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}); */


/* function search() {
  // Declare variables
  var input, filter;
  input = document.getElementById("searchAnything");
  filter = input.value.toUpperCase();
  cards = document.getElementsByClassName("card")
  titles = document.getElementsByClassName("card-title");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < cards.length; i++) {
    a = titles[i];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
} */

let searchBox = document.querySelector('#searchAnything');
let books = document.querySelectorAll('.row .col-sm-4 .card .img-thumbnail .card-body .card-title .card-text');
searchBox.oninput = () =>{
  let value = searchBox.value;
  images.forEach(filter =>{
        let title = filter.getAttribute('');
  });
}