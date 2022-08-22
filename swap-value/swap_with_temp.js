/*
    Write an algorithm to swap the following value (with temp variable)
    a = 10 , b = 3
*/

let a = 10;
let b = 3;

let temp = b;
b = a;
a = temp;

console.info(a);
console.info(b);