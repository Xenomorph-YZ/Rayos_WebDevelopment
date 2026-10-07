let counter = 0;

function increment() {
    counter++;
    document.getElementById("number").innerHTML = counter;
}

function decrement() {
    counter--;
    document.getElementById("number").innerHTML = counter;
    if (counter == 911) {
        alert("HAPPY BIRTHDAY EMMAN ALLAHU AKBAR!");
    }
}