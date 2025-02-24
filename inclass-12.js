function outerFunction() {
let outerVariable = "Parent execution context"

function innerFunction() {
    console.log(outerVariable);
  }
     return innerFunction;
  } 

  const myFunction = outerFunction();
  myFunction();