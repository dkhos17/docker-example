function toggleDisplay(div) {
    if(div.style.display == '' || div.style.display == 'none'){
        div.style.display = 'block';
   }
   else {
        div.style.display = 'none';
   }
}

document.getElementById("getFirstName").addEventListener("click", function() {
    toggleDisplay(document.getElementById("getFirstNameRes"));
});

document.getElementById("getLastName").addEventListener("click", function() {
    toggleDisplay(document.getElementById("getLastNameRes"));
});

document.getElementById("getUni").addEventListener("click", function() {
    toggleDisplay(document.getElementById("getUniRes"));
});

document.getElementById("getCourse").addEventListener("click", function() {
    toggleDisplay(document.getElementById("getCourseRes"));
});

document.getElementById("getGPA").addEventListener("click", function() {
    toggleDisplay(document.getElementById("getGPARes"));
});
