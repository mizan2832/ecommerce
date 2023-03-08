<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing website</title>
    <link rel="stylesheet" href="{{ asset('practice/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('practice/slide.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="top-header">
            <div class="left">
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <a href = "mailto: mrahman5037@gmail.com">mrahman5037@gmail.com</a>
                </div>
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <a>01515612832</a>
                </div>
            </div>
            <div class="right">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
        <div class="menu">
            <div class="logo">
                <img src="images/signature.png" alt="my sign">
            </div>
            <div class="menu-list">
                <a href="">Home</a>
                <a href="">Shop</a>
                <a href="">Project</a>
                <a href="">Blog</a>
            </div>
            <div class="auth">
                <a href="">Login</a>
                <a href="">Register</a>
            </div>
        </div>
    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/1.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/2.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/3.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        

    <div class="project">
        <h1>Our Pricing Plan</h1>
        <div class="btn">
            <ul>
                <li ><button>Monthly</button></li>
                <li><button>Yearly</button></li>
                <li><button>Lifetime</button></li>
            </ul>
        </div>
        <div class="card">
            <div class="ca">
                <h2>Basic Monthly</h2>
                <p><span style="font-size:3em;">$50</span>/Monthly</p>
                <p>You can easily create your website by Pica. We will provide all type of digital service for you.</p>
                <div class="avail">
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Page Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    
                </div>
            </div>
            <div class="ca">
                <h2>Basic Yearly</h2>
                <p><span style="font-size:3em;">$50</span>/Monthly</p>
                <p>You can easily create your website by Pica. We will provide all type of digital service for you.</p>
                <div class="avail">
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Page Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    
                </div>

            </div>
            <div class="ca">
                <h2>Lifetime</h2>
                <p><span style="font-size:3em;">$50</span>/Monthly</p>
                <p>You can easily create your website by Pica. We will provide all type of digital service for you.</p>
                <div class="avail">
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Page Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    <div class="blokquote">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Blog Create 20</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="blog"></div>
    <div class="footer"></div>

    <script src="{{ asset('practice/script.js') }}"></script>
</body>
</html>