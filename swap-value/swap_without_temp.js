/*
    Write an algorithm to swap the following value (without temp variable)
    a = 10 , b = 3
*/
let a = 10;
let b = 3;

b = b + a; // 13
a = b - a; // 3
b = b - a; // 10

console.info(a);
console.info(b);