//attendace counter-JavaScript to handle button click event
function present() {    
    var counterElement = document.getElementById('present_counter');
    var currentCount = parseInt(counterElement.innerText);
    counterElement.innerText = currentCount + 1;
}