let rows = document.getElementById('rows');
let flag = false;
let button = document.getElementById('view');

const getSurveys = async () => {    
    await axios.get('http://localhost:8000/api/surveys')
    .then((response) => {
        flag = true
        let survey_data = response.data
        console.log(survey_data)
        for (let i = 0; i<survey_data.length; i++){
            let survey_name = `${survey_data[i].name}`
            let survey_code = `${survey_data[i].code}`
            let survey_html = survey_name + " " +survey_code + "</br>"
            rows.innerHTML += survey_html
        }
    })
}

if(flag==false){
    getSurveys();
}

// button.addEventListener('click', getSurveys);