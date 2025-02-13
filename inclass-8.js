let result = "5" + 3;
console.log(result); // Output = 53

if (result === "53") {
    console.log("Js treats the numbers like strings.");
} else {
    console.log("Something went wrong.");
}

let numTrue = Number(true);
let numFalse = Number(false);

if (numTrue === 1) {
    console.log("true = 1");
} else {
    console.log("true did not convert.");
}

if (numFalse === 0) {
    console.log("false becomes 0");
} else {
    console.log("false did not convert.");
}

if (Boolean(1)) {
    console.log("Is true");
} else {
    console.log("Is false");
}

if (Boolean(0)) {
    console.log("Is true");
} else {
    console.log("Is false");
}

if (Boolean("0")) {
    console.log("'0' (string) is true");
} else {
    console.log("'0' (string) is false");
}



