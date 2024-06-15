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