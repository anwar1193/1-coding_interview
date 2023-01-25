/* 
    Soal :
    Write an algorithm to print the following
    *******
     *****
      ***
       *
*/

function triangle(length){
    let result = '';
    for(let i=length; i>=1; i--){

        for(let j=0; j<=length-i; j++){
            result += ' ';
        }

        for(let k=0; k<(2*i-1); k++){
            result += '*';
        }
        
        result += '\n';
    }
    return result;
}

console.info(triangle(4));