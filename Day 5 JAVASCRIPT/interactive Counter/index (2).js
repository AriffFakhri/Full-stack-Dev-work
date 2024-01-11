const decrementButton = document.getElementById('decrement');
const incrementButton = document.getElementById('increment');
const countElement = document.getElementById('count')

// initial count value
let count = 0;

// update the count element with the current count value
function updateCount() {
    countElement.textContent = count;
}

// event listener for decrement button
decrementButton.addEventListener('click', function () {
    count --;
    updateCount();
});
// event listener for increment button
incrementButton.addEventListener('click', function () {
    count ++;
    updateCount();
});