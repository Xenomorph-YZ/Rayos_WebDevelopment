
function submitForm(){
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var subject = document.getElementById("subject").value;

    document.getElementById("output").innerHTML = "Hello! My name is <b>" + name + "</b>, I am <b>" + age + "</b> years old, and my favorite subject is <b>" + subject + "</b>";
}

