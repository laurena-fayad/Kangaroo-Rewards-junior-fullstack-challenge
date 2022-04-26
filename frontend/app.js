let rows = document.getElementById('rows');

const getSurveys = async () => {    
    await axios.get('http://localhost:8000/api/surveys')
    .then((response) => {
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

getSurveys();

// button.addEventListener('click', getSurveys);