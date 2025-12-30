<?php
// Start or resume the current session to access stored user data
session_start();

// Include the database connection file
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Welcome</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        /* Main Container */
        .welcome-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            animation: fadeIn 0.8s ease-out;
        }
        
        /* Header Section */
        .header {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: float 20s linear infinite;
            opacity: 0.3;
        }
        
        .header h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }
        
        /* Content Section */
        .content {
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .welcome-message {
            background: linear-gradient(to right, #f8f9ff, #f0f4ff);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 40px;
            width: 100%;
            border-left: 5px solid #4776E6;
            box-shadow: 0 5px 15px rgba(71, 118, 230, 0.1);
            transition: transform 0.3s ease;
        }
        
        .welcome-message:hover {
            transform: translateY(-5px);
        }
        
        .welcome-text {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .user-name {
            color: #4776E6;
            font-weight: 700;
            font-size: 2.2rem;
            display: inline-block;
            padding: 0 8px;
            position: relative;
        }
        
        .user-name::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 8px;
            width: calc(100% - 16px);
            height: 3px;
            background-color: #8E54E9;
            border-radius: 2px;
        }
        
        .user-email {
            color: #666;
            font-size: 1.1rem;
            margin-top: 10px;
            font-style: italic;
        }
        
        /* Decorative Elements */
        .decoration {
            display: flex;
            justify-content: center;
            margin: 30px 0;
            gap: 15px;
        }
        
        .circle {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #4776E6;
            animation: bounce 2s infinite;
        }
        
        .circle:nth-child(2) {
            background-color: #8E54E9;
            animation-delay: 0.2s;
        }
        
        .circle:nth-child(3) {
            background-color: #ff6b6b;
            animation-delay: 0.4s;
        }
        
        .circle:nth-child(4) {
            background-color: #4ecdc4;
            animation-delay: 0.6s;
        }
        
        /* Logout Button */
        .logout-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #ff6b6b, #ff8e8e);
            color: white;
            border: none;
            padding: 16px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
            margin-top: 20px;
        }
        
        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
            background: linear-gradient(to right, #ff5252, #ff7b7b);
        }
        
        .logout-btn:active {
            transform: translateY(0);
        }
        
        .logout-btn i {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            color: #777;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            background-color: #f9f9f9;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(-30px, -30px) rotate(360deg); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            
            .welcome-text {
                font-size: 1.5rem;
            }
            
            .user-name {
                font-size: 1.8rem;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .header {
                padding: 30px 20px;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
            }
            
            .welcome-text {
                font-size: 1.3rem;
            }
            
            .user-name {
                font-size: 1.5rem;
            }
            
            .logout-btn {
                padding: 14px 30px;
                font-size: 1.1rem;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="welcome-container">
        <div class="header">
            <h1>Welcome!</h1>
            <p>Account created successfully</p>
        </div>
        
        <div class="content">
            <div class="welcome-message">
                <p class="welcome-text">
                    <span class="wave">👋</span>
            </div>
            
            <div class="decoration">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
        
        <div class="footer">
            <p>© <?php echo date("Y"); ?> Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>