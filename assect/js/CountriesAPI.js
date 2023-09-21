const select = document.getElementById('country-select');

fetch('https://restcountries.com/v2/all')
  .then(response => response.json())
  .then(data => {
    data.forEach(country => {
      const { name } = country;

      const option = document.createElement('option');
      option.textContent = name;
      option.value = name;
      
      select.appendChild(option);
    });
  })
  .catch(error => {
    console.log('Error fetching country data:', error);
  });