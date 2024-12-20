<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gridiron Central</title>
	   
    </style>
    <link rel="stylesheet" href="navbar_style1.css">
    <link rel="stylesheet" href="container image3.css">
    
</head>

<body>
  <div id="top"></div> <!-- Anchor point at the top -->

  <div class="container">
    <div class="background-image"></div>
    <div class="text-overlay">
      <h1>gridiron central</h1>
    </div>
  </div>

  <div class="box">
    <!-- Dropdown Menu -->
    <div class="dropdown">
        <span class="left-icon"></span>
        <span class="right-icon"></span>
        <div class="items">
            <a href="#" style="--i:1;"><span></span>Home</a>
            <a href="#video-container" style="--i:2;"><span></span>Content</a>
            <a href="#field-text" style="--i:4;"><span></span>About</a>
            <a href="index.php" style="--i:3;"><span></span>Logout</a>
        </div>
    </div>

    <!-- New Button with Image Icon beside the Dropdown -->
    <button class="icon-button" onclick="window.location.href='#positions-links-containerh2';">
        <img src="goat.png" alt="Goat Icon" class="icon-img"> 
        G.O.A.T! <!-- Button with Image Icon -->
    </button>
  </div>

  <div class="container-wrapper">
    <div class="container-1"></div>
    <div class="container-2"></div>
    <div class="container-3"></div>
    <div class="container-4"></div>
    <div class="container-5"></div>
  </div>
  
  <!-- About Section with the ID "field-text" -->
  <div class="field-text" id="field-text">
    <h3> all things 'bout football.</h3>
    <h1 class="about-title">about</h1>
    <p>gridirion central is a dynamic sports website dedicated to American football. It offers in-depth coverage of the sport.</p>
  </div>

  <div class="video-container" id="video-container">
    <video controls poster="thumbnail.png" width="800" height="450">
        <source src="howtonfl.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="description">
        <p> let's dive in to the basics of the game.</p>
    </div>
  </div>
	<div class="positions-links-containerh2" id="positions-links-containerh2">
	<h2>Football Positions</h2>
	</div>
  <div class="positions-links-container">
        <ul>
            <li><a href="#" class="position-link" data-target="qb-content">QB</a></li>
            <li><a href="#" class="position-link" data-target="rb-content">RB</a></li>
            <li><a href="#" class="position-link" data-target="wr-content">WR</a></li>
            <li><a href="#" class="position-link" data-target="te-content">TE</a></li>
        </ul>

        <div class="position-content-container">
            <!-- QB Content -->
            <div id="qb-content" class="position-content">
               
                <div class="content-wrapper">
                    <div class="image-container">
                        <img src="qb1.png" alt="QB Image 1">
                        <div class="description1">Jared Goff</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="qb2.png" alt="QB Image 2">
                        <div class="description1">Joe Burrow</div>
							<p></p>
                    </div>
                    <div class="image-container">
                        <img src="qb3.png" alt="QB Image 3">
                        <div class="description1">Josh Allen</div>
						<p></p>
                    </div>
                </div>
            </div>

            <!-- RB Content -->
            <div id="rb-content" class="position-content">
                
                <div class="content-wrapper">
                    <div class="image-container">
                        <img src="rb1.png" alt="RB Image 1">
                        <div class="description1">Saquon Barkley</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="rb2.png" alt="RB Image 2">
                        <div class="description1">Kyren Williams</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="rb3.png" alt="RB Image 3">
                        <div class="description1">Ezekiel Elliot</div>
						<p></p>
                    </div>
                </div>
            </div>

            <!-- WR Content -->
            <div id="wr-content" class="position-content">
                
                <div class="content-wrapper">
                    <div class="image-container">
                        <img src="wr1.png" alt="WR Image 1">
                        <div class="description1">Andrei Iosivas</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="wr2.png" alt="WR Image 2">
                        <div class="description1">Odell Beckham Jr</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="wr3.png" alt="WR Image 3">
                        <div class="description1">Justin Jefferson</div>
						<p></p>
                    </div>
                </div>
            </div>

            <!-- TE Content -->
            <div id="te-content" class="position-content">
              
                <div class="content-wrapper">
                    <div class="image-container">
                        <img src="te1.png" alt="TE Image 1">
                        <div class="description1">Rob Gronkowski</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="te2.png" alt="TE Image 2">
                        <div class="description1">George Kittle	</div>
						<p></p>
                    </div>
                    <div class="image-container">
                        <img src="te3.png" alt="TE Image 3">
                        <div class="description1">Travis Kelce</div>
						<p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <!-- Back to Top Button -->
  <a href="memberpage.php#" id="backToTopBtn">^</a>
  <script src="actionstar.js"></script>
  <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Gridiron Central. All rights reserved.Kyle Vincent Aro </p>
        </div>
</body>
    </div>
</footer>
</html>
