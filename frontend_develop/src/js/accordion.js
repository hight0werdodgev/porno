(function() {


  function openQuestion() {
    let items = document.getElementsByClassName("questions__item");
    for (let i = 0; i < items.length; i++) {
      items[i].addEventListener("click", function() {
        // var items = document.getElementsByClassName("questions__item");
        for (let i=0; i < items.length; i++){
          if(this.classList.contains('questions__item--active') ) {
            continue}
          else{
            items[i].classList.remove("questions__item--active");
          }
        }
        this.classList.toggle("questions__item--active");
      });
    }
    var questions = document.getElementById('questions');
    questions.addEventListener("click", function(e) {
      console.log(e.target);
      var items = document.getElementsByClassName("questions__item");

      if (e.target === questions || e.target === document.querySelector(".questions__list-wrapper") ||
          e.target === document.getElementById("questions__list1") || e.target === document.getElementById("questions__list2")) {
        for (var i = 0; i < items.length; i++) {
          items[i].classList.remove("questions__item--active");
        }
      }
    })

      }
  if (document.getElementsByClassName("questions__item").length) {

    openQuestion();
  }


})();