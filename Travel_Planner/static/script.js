fetch('/submit', {
  method: 'POST',
  body: new FormData(document.getElementById('myForm'))
})
.then(response => response.json())
.then(data => {
  // Access the processed data from the "user_input" key
  const processedText = data.user_input;
  document.getElementById('processedData').textContent = processedText;
  console.log(processedText);
})
.catch(error => console.error(error));