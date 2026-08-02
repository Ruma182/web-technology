
console.log("Hello World!");



let name = "Sultan";
let age = 25;
let isStudent = true;
let cgpa = 3.95;
let address;
let phone = null;

console.log("Name: " + name);
console.log("Age: " + age);
console.log("Student: " + isStudent);
console.log("CGPA: " + cgpa);
console.log("Address: " + address);
console.log("Phone: " + phone);



let marks = 78;

if (marks >= 80) {
    console.log("Grade: A+");
}
else if (marks >= 70) {
    console.log("Grade: A");
}
else if (marks >= 60) {
    console.log("Grade: B");
}
else {
    console.log("Grade: F");
}


let courses = [
    "Web Technology",
    "OOP",
    "Database"
];

console.log("Courses:");
console.log(courses);


console.log("Using for Loop:");

for (let i = 0; i < courses.length; i++) {
    console.log(courses[i]);
}


console.log("Using while Loop:");

let i = 0;

while (i < courses.length) {
    console.log(courses[i]);
    i++;
}


console.log("Using do...while Loop:");

let j = 0;

do {
    console.log(courses[j]);
    j++;
} while (j < courses.length);




function showStudent(name, age) {
    console.log("Student Name: " + name);
    console.log("Student Age: " + age);
}

showStudent("Sultan", 25);


let students = [];

students[0] = "Rahim";
students[1] = "Karim";
students[2] = "Sultan";


console.log("Students:");

for (let i = 0; i < students.length; i++) {
    console.log(students[i]);
}


let name2 = prompt("Enter your name:");

console.log("Name: " + name2);


let age2 = parseInt(prompt("Enter your age:"));

console.log("Age: " + age2);


let cgpa2 = parseFloat(prompt("Enter your CGPA:"));

console.log("CGPA: " + cgpa2);


let isStudent2 = (prompt("Are you a student? (true/false)") === "true");

console.log("Student: " + isStudent2);


let grade2 = prompt("Enter your grade (A/B/C):").charAt(0);

console.log("Grade: " + grade2);



let students2 = [];

for (let i = 0; i < 3; i++) {
    students2[i] = prompt("Enter student name:");
}

console.log("Students:");

for (let i = 0; i < students.length; i++) {
    console.log(students2[i]);
}


let numbers = [];

for (let i = 0; i < 5; i++) {
    numbers[i] = Number(prompt("Enter a number:"));
}

console.log("Numbers:");

for (let i = 0; i < numbers.length; i++) {
    console.log(numbers[i]);
}