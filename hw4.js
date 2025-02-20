const cats = [
    { name: "Charlie", adoptionStatus: "available" },
    { name: "Lily", adoptionStatus: "adopted" },
    { name: "Max", adoptionStatus: "available" },
    { name: "Milo", adoptionStatus: "adopted" }
];

// Question 6
const availableCats = cats.filter(cat => cat.adoptionStatus === "available").map(cat => cat.name);
console.log(`You have adopted: ${availableCats.join(", " )}!`);

// Question 7
const result = (Math.random() * 10 > 5) ? "greater than five!" : "less than five!";
console.log(result);

// Question 8
const cat = { name: "Charlie", age: 3, breed: "Siamese" };
Object.values(cat).forEach(value => console.log(value));

// Question 9
if (1 == "1") console.log("1 == '1' is true");
if (1 === "1") console.log("1 === '1' is true"); else console.log("1 === '1' is false");

// Question 10
console.log(cats.map(cat => `${cat.name} is cute!`));
