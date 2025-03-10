function divideNumbers(a, b) {
    try {
        if (b === 0) {
            throw new Error("Cannot divide by zero!"); 
        }
        console.log("Result:", a / b);
    } catch (error) {
        console.error("Custom Error:", error.message);
    }
}


divideNumbers(10, 0); 
divideNumbers(10, 2); 
