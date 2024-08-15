<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

footer {
                background-color: #333;
                color: #fff;
                padding: 20px 0;
                text-align: center;
                display:ab
            }

            .footer-content {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }

            .footer-section {
                flex: 1;
                margin: 10px;
            }

            .footer-section h2 {
                border-bottom: 2px solid #f8f9fa;
                padding-bottom: 10px;
                margin-bottom: 15px;
            }

            .footer-section p {
                margin: 0;
            }

            .footer-section ul {
                list-style-type: none;
                padding: 0;
            }

            .footer-section ul li {
                margin: 10px 0;
            }

            .footer-section ul li a {
                color: #f8f9fa;
                text-decoration: none;
            }

            .footer-section ul li a:hover {
                text-decoration: underline;
            }

            .social-icon {
                color: #fff;
                font-size: 20px;
                margin: 0 10px;
                text-decoration: none;
            }

            .social-icon:hover {
                color: #ddd;
            }

            .footer-bottom {
                border-top: 1px solid #444;
                padding: 10px;
            }

            .i1{
                padding:3px;
                border: 0.5px solid #1877F2;
                border-radius: 9px;
                background-color: #1877F2;
                transition: background-color 0.5s; 
            }

            .i1:hover{
                background-color: white;
                color: blue;
            }
            .i2{
                padding:3px;
                border: 0.5px solid #1DA1F2;
                border-radius: 9px;
                background-color: #1DA1F2;
                transition: background-color 0.5s; 
            }
            .i2:hover{
                background-color: white;
                color: 	#1DA1F2;
            }

            .i3{
                padding:3px;
                border: 0.5px solid #E4405F;
                border-radius: 9px;
                background-color: #E4405F;
                transition: background-color 0.5s; 
            }
            .i3:hover{
                background-color: white;
                color: 	#E4405F;
            }
            .i4{
                padding:3px;
                border: 0.5px solid #0077b5 ;
                border-radius: 9px;
                background-color: #0077b5 ;
                transition: background-color 0.5s; 
            }
            .i4:hover{
                background-color: white;
                color: 	#0077b5 ;
            }
            .t1:hover{
                color:#67C6E3;
            }
    </style>
</head>
<body>
<footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Welcome to our blog! We provide insightful articles on a variety of topics. Our goal is to inform and inspire our readers with engaging content.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a class="t1" href="{{route('home')}}">Home</a></li>
                    <li><a class="t1" href="#">Blog</a></li>
                    <li><a class="t1" href="#">About</a></li>
                    <li><a class="t1" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: contact@yourblog.com</p>
                <p>Phone: +1 234 567 890</p>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com" class="social-icon"><i class="fab fa-facebook-f i1"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter i2"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram i3"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in i4"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y") ?> Your Blog Name. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>