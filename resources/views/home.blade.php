<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
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

    </style>
</head>
</head>
<body>
<div class="n2">
                    @if (Route::has('login'))
                            <center>
                                @auth
                                    <a
                                        href="{{ route('dashboard') }}"
                                        class="btn" 
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}" class="btn">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </center>
                    @endif
                </div>
    <div class="d1">
        <hr>
        <div>
            <center><marquee behavior="" direction="">Welcome to our Blog Web Plartform</marquee></center>
        </div>
        <hr>
    </div>
    <center>
        
            <table>
                <tr>
                    <td>Sl.</td>
                    <td>title</td>
                    <td>short Description</td>
                    <td>long Description</td>
                    <td>Action</td>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->shortdes}}</td>
                    <td>{{$data->longdes}}</td>
                    <td>
                        <a href="#">ViewMore</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </center>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Welcome to our blog! We provide insightful articles on a variety of topics. Our goal is to inform and inspire our readers with engaging content.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: contact@yourblog.com</p>
                <p>Phone: +1 234 567 890</p>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y") ?> Your Blog Name. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>