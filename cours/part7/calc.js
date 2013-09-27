function buttonPressed() {
    var buttonText = event.target.innerText;

    if (isCompute(buttonText)) {
        compute();
    } else if (isClear(buttonText)) {
        clear();
    } else if (isBackSpace(buttonText)) {
        backSpace();
    } else {
        display(buttonText);
    }
}

function isClear(buttonText) {
    return "C" == buttonText;
}

function isBackSpace(buttonText) {
    return "\u21D0" == buttonText;
}

function isCompute(buttonText) {
    return "=" == buttonText;
}

function display(buttonText) {
    var newDisplay = displayField.value + buttonText;
    displayField.value = newDisplay;
}

function clear() {
    displayField.value = "";
}

function backSpace() {
    var display = displayField.value

    if (display.length > 0) {
        var newDisplay = display.substr(0, display.length - 1);
        displayField.value = newDisplay;
    }
}

function compute() {
    var newDisplay = eval(displayField.value)
    displayField.value = newDisplay;
}