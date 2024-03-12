<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphic Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-…" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="glass-container">
        <header class="glassmorphic-header">
            <div class="macbook-title">My Website</div>
            <nav class="macbook-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="main-content">
            <h2>Welcome to Our Website</h2>
            <p>This is a simple glassmorphic website template.</p>
        </section>

        <h1>Glassmorphic DataTable</h1>
        <div class="search-container">
            <input type="text" id="searchInput" class="glass-input" placeholder="Search...">
        </div>
        <table id="dataTable" class="glass-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>30</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>30</td>
                    <td>john@example.com</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div id="paginationContainer" class="pagination-container"></div>

        <h1>Glassmorphic Buttons</h1>
        <center>
            <button class="glass-button">Click me</button>
            <button class="glass-button glass-button-secondary">Click me too</button>
            <button class="glass-button"><i class="fas fa-search"></i> Search</button>
            <button class="glass-button glass-button-secondary"><i class="fas fa-plus"></i> Add</button>
        </center>
        
        <h1>Glassmorphic Form</h1>
        <form class="glass-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message"></textarea>
            </div>
            <button class="glass-button" type="submit">Submit</button>
        </form>

        <h1>Glassmorphic Image</h1>
        <div class="image-container">
            <img src="https://4kwallpapers.com/images/wallpapers/macos-big-sur-apple-layers-fluidic-colorful-dark-wwdc-2020-3840x2160-1432.jpg" alt="Example Image" class="glass-image">
        </div>

        <h1>Glassmorphic Carousel</h1>
        <div id="carouselExampleControls" class="carousel slide glass-carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://4kwallpapers.com/images/wallpapers/macos-big-sur-apple-layers-fluidic-colorful-dark-wwdc-2020-3840x2160-1432.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="https://4kwallpapers.com/images/wallpapers/macos-big-sur-apple-layers-fluidic-colorful-dark-wwdc-2020-3840x2160-1432.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="https://4kwallpapers.com/images/wallpapers/macos-big-sur-apple-layers-fluidic-colorful-dark-wwdc-2020-3840x2160-1432.jpg" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <footer>
            <p>&copy; 2024 Glassmorphic Website. All rights reserved.</p>
        </footer>
    </div>
    <script src="script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
