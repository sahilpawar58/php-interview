function putData(){
    fetch('http://localhost/saffire/postForm.php',{
        method:"post",
        body: JSON.stringify({
            name:document.querySelector("#name").value,
            username:document.querySelector("#username").value,
            password:document.querySelector("#password").value,
            courseid:parseInt(document.querySelector("#courseid").value)
        })
    })
    .then(response => {
        response.json()
    })
    .then(json => {
        console.log("done"+json)
    })
}

fetch('http://localhost/saffire/getAPI.php')
.then(response => response.json())
.then(data =>{
    console.log(data)
    data.map(entry=>{
        document.querySelector("#courseid").innerHTML += `<option value='${entry['courseId']}'>${entry['course_name']}</options>`
        console.log(entry['course_name'])
    })
})
.catch(errro => {
    console.log(errro)
})

document.querySelector("#courseid").innerHTML = "<option value='dd'>sdds</options>"