document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('searchForm');
    const input = document.getElementById('searchInput');
    const resultDiv = document.getElementById('result');
  
    form.addEventListener('submit', function(event) {
      event.preventDefault(); 
  
      const query = input.value.trim();
      if (query === "") {
        resultDiv.innerHTML = "<p>Please enter a product type to search.</p>";
        return;
      }
  
      fetch(`index.php?action=search&q=${encodeURIComponent(query)}`)
        .then(response => response.json())      
        .then(data => {
          resultDiv.innerHTML = "";
  
          if (data.length === 0) {
            resultDiv.innerHTML = "<p>No products found.</p>";
            return;
          }
  
          let table = "<table>";
          table += "<tr><th>ID</th><th>Name</th><th>Type</th><th>Price</th></tr>";
          data.forEach(product => {
            table += `
              <tr>
                <td>${product.id}</td>
                <td>${product.name}</td>
                <td>${product.type}</td>
                <td>${product.price}</td>
              </tr>`;
          });
          table += "</table>";
  
          resultDiv.innerHTML = table;
        })
        .catch(error => {
          console.error("Error fetching search results:", error);
          resultDiv.innerHTML = "<p class='error'>An error occurred while fetching results.</p>";
        });
    });
  });
  