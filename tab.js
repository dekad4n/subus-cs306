function tabFilter(){
  var element = document.getElementById("tab--content");
  console.log(element);
  element.classList.toggle("active");
}
function tabFilterWorkers(){
  var element = document.getElementById("tab--content__workers");
  console.log(element);
  element.classList.toggle("active");
}
function tabFilterBusses(){
  var element = document.getElementById("tab--content__busses");
  console.log(element);
  element.classList.toggle("active");
}
function tabFilterTrips(){
  var element = document.getElementById("tab--content__trips");
  console.log(element);
  element.classList.toggle("active");
}
function tabFilterTickets(){
  var element = document.getElementById("tab--content__tickets");
  console.log(element);
  element.classList.toggle("active");
}
function tabFilterLocations(){
  var element = document.getElementById("tab--content__locations");
  console.log(element);
  element.classList.toggle("active");
}
document.getElementById("idCheckbox").addEventListener("click", function(event){
  var element = document.getElementById("filter--form__id");
  console.log(element);
  element.classList.toggle("active");
  var element2 = document.getElementById("filter--form__id2");
  console.log(element);
  element2.classList.toggle("active");
});
document.getElementById("ageCheckbox").addEventListener("click", function(event){
  var element = document.getElementById("filter--form__age");
  console.log(element);
  element.classList.toggle("active");
  var element2 = document.getElementById("filter--form__age2");
  console.log(element);
  element2.classList.toggle("active");
});