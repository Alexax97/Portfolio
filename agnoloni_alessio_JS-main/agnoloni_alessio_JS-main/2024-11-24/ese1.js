/*
let display = document.querySelector('#display');
let currentInput = '';
let previousInput = '';
let operator = '';

// numeri
let button0 = document.querySelector('#zero');
let button1 = document.querySelector('#one');
let button2 = document.querySelector('#two');
let button3 = document.querySelector('#three');
let button4 = document.querySelector('#four');
let button5 = document.querySelector('#five');
let button6 = document.querySelector('#six');
let button7 = document.querySelector('#seven');
let button8 = document.querySelector('#eight');
let button9 = document.querySelector('#nine');

// operazioni algebriche
let buttonPlus = document.querySelector('#plus');
let buttonMinus = document.querySelector('#less');
let buttonFor = document.querySelector('#for');
let buttonDivide = document.querySelector('#divide');

// puisci e uguale
let buttonDelete = document.querySelector('#delete');
let buttonSame = document.querySelector('#same');

// Eventi numeri
button0.addEventListener('click', () => updateDisplay('0'));
button1.addEventListener('click', () => updateDisplay('1'));
button2.addEventListener('click', () => updateDisplay('2'));
button3.addEventListener('click', () => updateDisplay('3'));
button4.addEventListener('click', () => updateDisplay('4'));
button5.addEventListener('click', () => updateDisplay('5'));
button6.addEventListener('click', () => updateDisplay('6'));
button7.addEventListener('click', () => updateDisplay('7'));
button8.addEventListener('click', () => updateDisplay('8'));
button9.addEventListener('click', () => updateDisplay('9'));

// eventi operazioni
buttonPlus.addEventListener('click', () => setOperator('+'));
buttonMinus.addEventListener('click', () => setOperator('-'));
buttonFor.addEventListener('click', () => setOperator('*'));
buttonDivide.addEventListener('click', () => setOperator('/'));

// eventi generici
buttonDelete.addEventListener('click', clearDisplay);
buttonSame.addEventListener('click', calculateResult);






function updateDisplay(value) {
    currentInput += value;
    display.value = currentInput;
};

function setOperator(op) {
    if (currentInput) {
        previousInput = currentInput;
        operator = op;
        currentInput = '';
    }
};

function clearDisplay() {
    currentInput = '';
    previousInput = '';
    operator = '';
    display.value = '';
};

function calculateResult() {
    if (currentInput && previousInput && operator) {
        display.value = calculate(previousInput, currentInput, operator);
        currentInput = display.value;
        previousInput = '';
        operator = '';
    }
};

function calculate(a, b, operator) {
    a = parseFloat(a);
    b = parseFloat(b);
    switch (operator) {
        case '+':
            return a + b;
        case '-':
            return a - b;
        case '*':
            return a * b;
        case '/':
            return a / b;
        default:
            return 0;
    }
};

*/
