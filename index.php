<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Licenses and Permits Portal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .logo {
            display: inline-block;
            width: 100px;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
        }

        .logo img {
            width: 100%;
            height: auto;
        }
        nav {
            background-color: #333;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            color: white;
            padding: 1rem;
            display: block;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #4CAF50;
        }

        main {
            padding: 2rem;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .front {
            float: left;
            width: 50%; /* Adjust width as per your design */
            max-width: 400px; /* Example width */
            margin-right: 20px; /* Adjust margin as per your design */
        }

        .centered-text {
            float: left;
            width: 50%; /* Adjust width as per your design */
            padding: 20px; /* Example padding */
            box-sizing: border-box; 
            margin-right: 20px;
        }

        @media (max-width: 768px) {
            .front, .centered-text {
                float: none;
                width: 100%;
                text-align: center;
            }
            .front {
                margin-bottom: 20px; /* Example margin for smaller screens */
            }
        }
                /*for flashcard*/
        .wrapper{
            display: flex;
            flex-wrap: wrap;
        }
        .container{
            width: 300px;
            height: 200px;
            margin-right: 3%;
            margin-bottom: 3%;
            background-color: #a8c1e5;
            border: 1px solid #ebf3ef;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(60, 181, 102, 0.1);
            padding: 20px;
            text-align: center;
        }

        .container:hover {
            box-shadow: 0 8px 16px rgba(57, 158, 111, 0.2);
        }


        .card-body {
            font-size: 18px;
            color: #666;
            font-family:sans-serif;
            
            color: rgb(48, 110, 202);
        }
        .card-body p{
            color: rgb(33, 29, 29);
        }
    </style>
</head>
<body>
    <header>
    <img class="logo" src="businesslogo.png" alt="Business Portal" ALIGN=left>
        <h1>Business Licenses and Permits Portal</h1>
    </header>
     <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="license.html">Business License Fee</a></li>
            <li><a href="submit_application.php">Apply</a></li>
            <li><a href="status_check.php">Check Status</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <img class="front" src="approved.png" alt="photo" ALIGN=right>
            <div class="centered-text">
                <h2>Welcome to Your One-Stop Business Licensing & Permits Portal!</h2>
                <p>Your business journey made easier with the effortless streamlining of online applications for all licenses and permits</p>
                <h2>Business licenses and permits</h2>
                <p>Business licenses are permits granted by government authorities that allow individuals or companies to operate a business within the government's geographical jurisdiction.</p>
                <p>Our Relationship Managers will guide you through each phase of the corporate lifecycle. With Business License, your corporation will have many chances to: </p>  
                  <ul>
                    <li>Enter new markets</li>
                    <li>Seek new opportunities</li>
                    <li>Find new customers</li>
                    <li>Open new facilities</li>
                    <li>Bid for new contracts</li>
                    <li>Legal Right and Brand Reputation</li>
                  </ul>  
            </div>
            
            <h3 ALIGN=center>Our Services</h3>
            <div class="wrapper">
                <div class="container">
                    <div class="card-body">
                            <h3>Liquor Licenses</h3>
                            <p>If you plan to serve or sell alcohol in your business, you must obtain a liquor license.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="card-body">
                            <h3>Professional Licenses, Certification, Permits</h3>
                            <p>Practitioners must obtain special licenses before they are allowed to practice their profession.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="card-body">
                        <h3>Construction License</h3>
                        <p>If you want to start a construction business, you must first hold the credential to perform the scope of work you intend your business to perform.</p>
                    
                    </div>
                </div>
                <div class="container">
                    <div class="card-body">
                        <h3>Environmental Licenses & Permits</h3>
                        <p>Certain types of businesses must obtain specific licenses or permits from the Environment Department.</p>
                        
                    </div>
                </div>
                <div class="container">
                    <div class="card-body">
                        <h3>Financial Industry Professionals</h3>
                        <p>Requires certain financial professionals obtain professional licenses.</p>
			        </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Business Licenses and Permits Portal</p>
    </footer>
    
</body>
</html>
