<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bryan Gwynn - Experienced project manager based in Kansas City. Explore my portfolio, project management expertise, and tools for better project execution.">
    <meta name="author" content="Bryan Gwynn">
    <meta name="keywords" content="Bryan Gwynn, Construction Project Management in Kansas City, Project Manager, Kansas City, Project Coordinator, tools">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>Bryan Gwynn - Professional Project Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Header */
        header {
            border-bottom: 2px solid #eaeaea;
        }

        header .nav-link:hover {
            color: #007bff;
        }

        .nav-link.active {
            color: blue; 

        }

        a:hover {
            text-decoration: underline;
        }

        /* Shadow box styling */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Image styling */
        .form-image {
            width: 100%;
            height: auto;
            background: url('images/office\ hero\ one.png') no-repeat center left;
            background-size: cover;
            border-radius: 10px;
            flex: 1 1 40%;
        }

        /* Form styling */
        .form-content {
            flex: 1 1 60%;
            padding: 30px;
            background-color: #fff;
        }

        /* Button pulse hover effect */
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-submit:hover {
            animation: pulse 1s infinite;
            background-color: blue;
            color: white;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-image {
                display: none;
            }
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #aaa;
            text-align: center;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            color: blue;
            text-decoration: underline;
        }

        footer p {
            padding-top: 25px;
        }

    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <header class="d-flex justify-content-between align-items-center py-3">
            <div class="head-logo">
            <a href="index.html"><img id="head-img" src="images/pmLogoHead.png" alt="Bryan Gwynn Logo" width="50" height="50"></a>
            </div>
            <nav>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="projects.html" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="cv.html" class="nav-link">CV</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active" aria-current="page">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container contact-section mt-5">
        <!-- Side Image -->
        <div class="form-image"></div>
        
        <!-- Contact Form -->
        <div class="form-content">
            <h2 class="text-center mb-4">Contact Me</h2>
            <form action="submit_contact.php" method="POST">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-3">
        <div id="social-icons" class="d-flex justify-content-center">
            <!-- LinkedIn -->
            <div id="email-social" class="mx-2">
                <a href="contact.php" target="_blank" aria-label="Email">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                    </svg>
                </a>
            </div>
      
            <!-- GitHub -->
            <div id="github-social" class="mx-2">
                <a href="https://github.com/BryanGwynn" target="_blank" aria-label="GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                </a>
            </div>
      
            <!-- Twitter / X -->
            <div id="x-social" class="mx-2">
                <a href="https://x.com/AbgwynndeV" aria-label="X">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <p>&copy; <span id="year"></span> Bryan Gwynn. All rights reserved.</p>
        <a href="policy.html" class="text-white">Privacy Policy</a>
    </footer>
    
    <script>
        // JavaScript to dynamically set the current year
        const yearSpan = document.getElementById('year'); 
        const currentYear = new Date().getFullYear(); 
        yearSpan.textContent = currentYear;
    </script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    