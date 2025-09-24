<?php
// frontpage.php - Coffee Bliss Static Front Page (PHP version)
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoffee - Welcome</title>
    <link rel="stylesheet" href="coffee.css">
    <style>
        .logo {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 10px;
        }
        .brand {
            font-size: 2.5rem;
            font-weight: bold;
            color: #6f4e37;
            letter-spacing: 2px;
        }
        .about-section, .testimonials-section, .content-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.07);
            margin: 40px auto;
            max-width: 900px;
            padding: 40px 30px;
        }
        .about-section h2, .testimonials-section h2, .content-section h2 {
            color: #a67c52;
            margin-bottom: 20px;
        }
        .testimonials {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }
        .testimonial {
            background: #f7f3ef;
            border-radius: 10px;
            padding: 25px 20px;
            max-width: 320px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            text-align: center;
        }
        .testimonial .author {
            margin-top: 15px;
            font-weight: bold;
            color: #6f4e37;
        }
        .main-content {
            color: #6f4e37;
            font-size: 1.1rem;
            line-height: 1.7;
        }
    </style>
</head>
<body>
    <div class="header" style="padding-bottom:10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" alt="Coffee Bliss Logo" class="logo">
        <div class="brand">Coffee Bliss</div>
        <p>Your Cozy Coffee Shop</p>
    </div>
    <div class="nav">
        <a href="#about">About</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#content">Content</a>
    </div>
    <div class="about-section" id="about">
        <h2>About Coffee Bliss</h2>
        <p>Coffee Bliss is your neighborhood coffee shop, dedicated to serving the finest brews and fresh pastries in a warm, welcoming atmosphere. Our beans are ethically sourced, and our baristas are passionate about crafting the perfect cup for you. Whether you need a quiet place to work, a cozy spot to catch up with friends, or just a delicious treat, Coffee Bliss is your go-to destination.</p>
    </div>
    <div class="testimonials-section" id="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonials">
            <div class="testimonial">
                <p>“The best coffee in town! The ambiance is so relaxing and the staff are always friendly.”</p>
                <div class="author">— Maria S.</div>
            </div>
            <div class="testimonial">
                <p>“I love their pastries and the caramel macchiato is my favorite. Highly recommended!”</p>
                <div class="author">— John D.</div>
            </div>
            <div class="testimonial">
                <p>“A perfect spot for remote work. Great WiFi, great coffee, and great people.”</p>
                <div class="author">— Liza P.</div>
            </div>
        </div>
    </div>
    <div class="content-section" id="content">
        <h2>Our Story & Content</h2>
        <div class="main-content">
            <p>Founded in 2020, Coffee Bliss started as a small family business with a big dream: to bring people together over a cup of exceptional coffee. We believe in quality, community, and sustainability. Our menu features a variety of classic and specialty drinks, as well as fresh-baked goods made daily. Join us for a cup, a chat, or a moment of peace in your busy day!</p>
            <ul>
                <li>Freshly roasted beans, locally sourced</li>
                <li>Wide selection of pastries and snacks</li>
                <li>Comfortable seating and free WiFi</li>
                <li>Friendly, skilled baristas</li>
            </ul>
        </div>
    </div>
    <div class="footer">
        &copy; 2025 Coffee Bliss. All rights reserved.
    </div>
</body>
</html>
