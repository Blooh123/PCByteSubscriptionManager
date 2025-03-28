

// Append numbers to cash input
function appendNumber(num) {
    let input = document.getElementById('cashInput');
    if (num === 'C') {
        input.value = ''; // Clear input
    } else {
        input.value += num;
    }
}