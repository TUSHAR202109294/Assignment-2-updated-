<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripSphere</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->

</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
          <a class="navbar-brand" id="logo" href="#">TripSphere</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="mynavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#navbar" onclick="showOriginalPage()">Home</a>
              </li>
              <li class="nav-item" id="btnbook">
                <a class="nav-link" href="#book">Book</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Navbar End -->

    <!-- Text Figure Start -->
    <figure class="text-center mt-3" id="textbook">
      <blockquote class="blockquote">
        <p>Explore Your Favourite Places and Book One.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        TripSphere
      </figcaption>
    </figure>
    <!-- Text Figure End -->

    <!-- Image Card Start -->
     <div class="container mb-5" id="cardbook">

       <div class="card text-bg-dark">
         <img src="images/Canada.jpg" class="card-img" alt="...">
         <div class="card-img-overlay">
            <h2 class="card-title">Canada</h2>
            <p class="card-text">Discover Canada's captivating allure where welcoming metropolises meet sweeping coastlines, embodying a unique blend of wild prairies, fearless adventures, and refreshing perspectives. Whether kayaking off British Columbia, savoring Nova Scotia's lobster feast, or witnessing the mesmerizing northern lights in the Yukon. Canada offers a diverse landscape that promises unforgettable experiences with true Canadian charm.</p>
          </div>
        </div>
      
        <div class="card text-bg-dark">
          <img src="images/India.jpg" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h2 class="card-title">India</h2>
            <p class="card-text">One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich heritage and myriad attractions, the country is among the most popular tourist destinations in the world. It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south. As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p>
          </div>
        </div>
        <div class="card text-bg-dark">
          <img src="images/China.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h2 class="card-title">China</h2>
              <p class="card-text">China has boomed because of its abundant tourist attractions and enhanced tourist environment. More and more foreign tourists are finding China is an ideal travel destination. A continued increase in foreign tourists is expected for the next decade.</p>
            </div>
          </div>
          <div class="card text-bg-dark">
            <img src="images/America.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h2 class="card-title">America</h2>
              <p class="card-text">The great American experience is about so many things: bluegrass and beaches, snow-covered peaks and redwood forests, restaurant-loving cities and big open skies, and that's just for starters.</p>
            </div>
          </div>
      </div>
      <!-- Image Card End -->
            
      <!-- Section Book Start -->
       <div id="sectionbook">

         <section class="book mt-5" id="book">
           <div class="container">
             <div class="main-text">
               <h2>Book Your Destinations Here</h2>
              </div>
                
              <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                  <div class="card">
                    <img src="images/book-img.png" alt="">
                  </div>
                </div>
                
                <div class="col-md-6 py-3 py-md-0">
                  <form id="bookingForm">
                    <input type="text" id="destination" class="form-control" placeholder="Destination" required><br>
                    <input type="number" id="peopleCount" class="form-control" placeholder="No. of People" required><br>
                    <input type="date" id="arrivalDate" class="form-control" title="Arrivals" required><br>
                    <input type="date" id="leavingDate" class="form-control" title="Leaving" required><br>
                    <textarea id="userDetails" class="form-control" rows="5" placeholder="Enter Additional Details"></textarea>
                    <button type="button" class="btn btn-primary mt-2" onclick="submitForm()">Submit</button>
                    <button type="button" class="btn btn-primary mt-2" onclick="viewform()">View Bookings</button>
                  </form>
                </div>
              </div>
      </div>
    </section>
  </div>
    <!-- Section Book Ends -->
    
    
    <!-- Temporary Element -->
    <div id="tempbook" class="d-none">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
              <th scope="col">Destination</th>
              <th scope="col">Persons</th>
              <th scope="col">Trip Start Date</th>
              <th scope="col">Trip End Date</th>
              <th scope="col">Comments</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>
          </tbody>
        </table>
  </div>
    <!-- Temporary Element -->

    <!-- Footer Starts -->
    <footer class="bg-dark text-white text-center py-3" id="footbook">
      <div class="container">
          <p class="mb-0">&copy; Tushar Sharma</p>
      </div>
  </footer>
    <!-- Footer Ends -->

    <!-- Links End -->

    <script>
      function submitForm() {
        const data = {
          destination: document.getElementById('destination').value,
          people_count: document.getElementById('peopleCount').value,
          arrival_date: document.getElementById('arrivalDate').value,
          leaving_date: document.getElementById('leavingDate').value,
          user_details: document.getElementById('userDetails').value,
        };

        fetch('api.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        })
        .then(response => response.json())
        .then(data => {
          alert(data.message);
          location.reload();
        })
        .catch(error => {
          console.error('Error:', error);
        });
      }
      function viewform() {
        document.getElementById('btnbook').classList.add('d-none')
      document.getElementById('sectionbook').style.display='none'
      document.getElementById('textbook').style.display='none'
      document.getElementById('cardbook').style.display='none'
      document.getElementById('footbook').style.display='none'
      document.getElementById('tempbook').classList.remove('d-none')
        const data = {
          destination: document.getElementById('destination').value,
          people_count: document.getElementById('peopleCount').value,
          arrival_date: document.getElementById('arrivalDate').value,
          leaving_date: document.getElementById('leavingDate').value,
          user_details: document.getElementById('userDetails').value,
        };

        fetchTableData();
      }

      function fetchTableData(){
        fetch('fetch_data.php')
        .then(response => response.json())
        .then(data => {
            const tableBodydiv = document.getElementById('tempbook');
            const tableBody = tableBodydiv.querySelector('tbody');
            tableBody.innerHTML = ''; // Clear existing table rows
            data.forEach((row, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <th scope="row">${index + 1}</th>
                    <td>${row.destination}</td>
                    <td>${row.people_count}</td>
                    <td>${row.arrival_date}</td>
                    <td>${row.leaving_date}</td>
                    <td>${row.user_details}</td>
                    <td>
                        <a href="edit.php?id=${row.id}" type="button" class="btn btn-link btn-sm btn-rounded">
                            Edit
                        </a>
                        <button type="button" class="btn btn-link btn-sm btn-rounded" data-id="${row.id}" onclick="deleteRow(this)">
                            Delete
                        </button>
                    </td>
                `;
                tableBody.appendChild(tr);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
      }

      function deleteRow(button) {
        const id = button.getAttribute('data-id');

        fetch('delete.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: id }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Record deleted successfully.');
                fetchTableData(); // Refresh the table data
            } else {
                alert('Error deleting record.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
      }

      function showOriginalPage() {
        document.getElementById('sectionbook').style.display = '';
        document.getElementById('textbook').style.display = '';
        document.getElementById('cardbook').style.display = '';
        document.getElementById('footbook').style.display = '';
        document.getElementById('tempbook').classList.add('d-none');
        location.reload();
      }

    </script>
</body>
</html>