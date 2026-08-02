function showStudentInfo(name, age, email, gender) {


   
    let courses = [
        "Web Technology",
        "OOP",
        "Database"
    ];

    console.log("Courses:");

    for (let i = 0; i < courses.length; i++) {
        console.log(courses[i]);
    }

  
    document.getElementById("output").innerHTML =
        "<h2>Student Information</h2>" +
        "Name: " + name + "<br>" +
        "Age: " + age + "<br>" +
        "Email: " + email + "<br>" +
        "Gender: " + gender + "<br><br>" +
        "Status: " + (age >= 18 ? "Adult" : "Minor") + "<br><br>" +
        "<b>Courses:</b><br>" +
        courses.join("<br>");
}




document.addEventListener("submit", function (event) {

        event.preventDefault();

        
        let name =
            document.getElementById("name").value;

        let age =
            document.getElementById("age").value;

        let email =
            document.getElementById("email").value;

        let gender =
            document.querySelector(
                'input[name="gender"]:checked'
            ).value;

      
        showStudentInfo(
            name,
            age,
            email,
            gender
        );

    });