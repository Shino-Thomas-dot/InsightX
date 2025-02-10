<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful - InsightX</title>
    
    <!-- Bootstrap & Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            flex-direction: column;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .check-icon {
            font-size: 50px;
            color: #4CAF50;
            animation: pop 0.5s ease-out;
        }
        @keyframes pop {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .btn-home {
            margin-top: 20px;
            background-color: white;
            color: black;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px 20px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }
        .btn-home:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fa-solid fa-check-circle check-icon"></i>
        <h2 class="mt-3">Submission Successful!</h2>
        <p>Thank you for reaching out to InsightX. Your details have been recorded, and we will get back to you soon.</p>
        <a href="landing_page.html" class="btn btn-home">Return to Home</a>
    </div>
</body>
</html>
