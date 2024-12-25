<?php
    $page_title = "Contact Us - Salam Telco";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <!-- Instana EUM Script -->
    <script>
        (function(s,t,a,n){s[t]||(s[t]=a,n=s[a]=function(){n.q.push(arguments)},
        n.q=[],n.v=2,n.l=1*new Date)})(window,"InstanaEumObject","ineum");
        
        ineum('reportingUrl', 'https://eum-green-saas.instana.io');
        ineum('key', 'zzAgvYa1QYOgyT4W2xlqXg');
        ineum('trackSessions');
    </script>
    <script defer crossorigin="anonymous" src="https://eum.instana.io/1.7.3/eum.min.js" 
    integrity="sha384-pYPTSdvwsCsJubrLEHxrtlG8F/RCwPOMs1zjJA+IcMNFy3sbID3uZoYSXtxS+frI"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Salam Telco</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5">
        <h1>Contact Us</h1>
        <p>For inquiries, please reach us at:</p>
        <ul>
            <li>Email: support@salamtelco.com</li>
            <li>Phone: +123 456 7890</li>
        </ul>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
