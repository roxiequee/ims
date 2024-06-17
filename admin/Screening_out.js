function searchCandidates() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    /*
    Retrieve search input
    This line will retrieves the value entered into the search input field 
    with the id 'searchInput' and converts it to lowercase. 
    This allows for case-insensitive search comparisons.
    */

   const candidateResults = document.getElementById('candidateResults');
   /*
   Retrieve Candidate Results Container:
   const candidateResults = document.getElementById('candidateResults');
   This line gets the element with the id 'candidateResults',
   which is the container where the filtered candidate profiles will be displayed.
  */
    
        const candidates = [
        { name: 'ISMAILY MOFATH ZEFANIA', qualifications: 'Bachelor\'s degree', experience: '3 years' },
        { name: 'MOHAMED MOFATH ZEFANIA', qualifications: 'Master\'s degree', experience: '5 years' },
        { name: 'MADARAKA KASENGA NGOMALE', qualifications: 'Ph.D.', experience: '7 years' },
        { name: 'DANIEL ZEPHANIA NYAMKOKOMA', Qualification: 'Diploma', Experience: '1 year'},
        /*
       An array named candidate will represent  candidate profiles. 
       Each candidate object includes properties like name, qualifications, and experience.
       */
        // We can add more candidate profiles as we want...
    ];

    const filteredCandidates = candidates.filter(candidate => 
        candidate.qualifications.toLowerCase().includes(searchInput) || 
        candidate.experience.toLowerCase().includes(searchInput)
    );
    /*Filter Candidates:
const filteredCandidates = candidates.filter(candidate => candidate.qualifications.toLowerCase().includes(searchInput)
Candidate.experience.toLowerCase().includes(searchInput) );
This code filters the candidates array based on whether the search input matches any part of the qualifications or
experience of each candidate. 
It uses the filter method to create a new array (filteredCandidates) containing only the candidates 
that match the search criteria.
*/

    candidateResults.innerHTML = '';
    /*This line clears any existing content in the candidateResults container 
    before displaying the filtered candidate profiles.
    */
    filteredCandidates.forEach(candidate => {
        const candidateProfile = document.createElement('div');
        candidateProfile.innerHTML = `
            <h3>${candidate.name}</h3>
            <p>Qualifications: ${candidate.qualifications}</p>
            <p>Experience: ${candidate.experience}</p>
        `;
        candidateResults.appendChild(candidateProfile);
    });
    /*
    filteredCandidates.forEach(candidate => { const candidateProfile = document.createElement('div'); 
    candidateProfile.innerHTML = <h3>candidate.name</h3><p>Qualifications:{candidate.qualifications}</p> <p>Experience: ${candidate.experience}</p> ; 
candidateResults.appendChild(candidateProfile); });
Here, for each candidate in the filteredCandidates array, 
a new div element is created to display the candidate's name, qualifications, and experience. 
This element is then appended to the candidateResults container, 
effectively displaying the filtered candidate profiles on the recruitment dashboard.
*/
    /*
    This javascript code includes the logic for filtering candidate profiles based on qualifications
    and experience and displaying the results dynamically on the dashboard.
    */
}