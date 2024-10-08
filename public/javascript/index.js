document.addEventListener('DOMContentLoaded', () => {
    const findBtn = document.querySelector('.find-btn');
    const jobsInput = document.getElementById('jobs');
    const placeInput = document.getElementById('place');
    const companyInput = document.getElementById('company');

    findBtn.addEventListener('click', () => {
        const jobsValue = jobsInput.value;
        const placeValue = placeInput.value;
        const companyValue = companyInput.value;

        // Here you would typically send these values to a backend API
        // For now, we'll just log them to the console
        console.log('Search criteria:', {
            jobs: jobsValue,
            place: placeValue,
            company: companyValue
        });

        alert('Search function not implemented yet. Check console for entered values.');
    });
});