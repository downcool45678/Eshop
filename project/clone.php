<!DOCTYPE html>
<html>
<head>
  <title>Google Clone</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    #search-form {
      text-align: center;
      margin-top: 100px;
    }

    #search-input {
      padding: 10px;
      width: 400px;
      font-size: 16px;
    }

    #search-button {
      padding: 10px 20px;
      font-size: 16px;
    }

    #search-results {
      margin-top: 50px;
      text-align: center;
    }

    .result {
      margin-bottom: 20px;
    }

    .result a {
      text-decoration: none;
    }

    .result h3 {
      color: #1a0dab;
    }

    .result p {
      color: #545454;
    }
  </style>
</head>
<body>
  <div id="search-form">
    <form id="searchForm">
      <input type="text" id="search-input" name="q" autofocus>
      <input type="submit" id="search-button" value="Google Search">
    </form>
  </div>

  <div id="search-results"></div>

  <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var query = document.getElementById('search-input').value;
      displayResults(query);
    });

    function displayResults(query) {
      var resultsDiv = document.getElementById('search-results');
      resultsDiv.innerHTML = '';

      // Simulated search results
      var results = [
        {
          title: 'Search Result 1',
          url: 'https://www.example.com/result1',
          description: 'This is the description for Result 1.'
        },
        {
          title: 'Search Result 2',
          url: 'https://www.example.com/result2',
          description: 'This is the description for Result 2.'
        },
        {
          title: 'Search Result 3',
          url: 'https://www.example.com/result3',
          description: 'This is the description for Result 3.'
        }
      ];

      for (var i = 0; i < results.length; i++) {
        var result = results[i];
        var resultDiv = document.createElement('div');
        resultDiv.className = 'result';

        var link = document.createElement('a');
        link.href = result.url;
        link.innerHTML = '<h3>' + result.title + '</h3>';

        var description = document.createElement('p');
        description.textContent = result.description;

        resultDiv.appendChild(link);
        resultDiv.appendChild(description);
        resultsDiv.appendChild(resultDiv);
      }
    }
  </script>
</body>
</html>
