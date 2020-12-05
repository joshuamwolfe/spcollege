function intro(name) {
    let result = `Hello my name is, ${name}`;
    let speak = console.log(result);
    return speak;
}

function add(x, y) {
    return x + y;
}

function subtract(x, y) {
    return x - y;
}

const num = 33;

module.exports = { add, subtract, num, intro };
  