<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: log.php"); // Redirect to login page if not logged in
    exit();

    
}

if (isset($_SESSION['username'])) {
    // If the user is logged in, display the logout button
  
} else {
    // If the user is not logged in, display the login/signup button
    echo '<a href="log.php" class="login_singup_btn">Login/Signup</a>';
}

?>


<html>
  <head>
    <title>Codopedia.com:</title>
    <link rel="stylesheet" href="css\page.css" />
    <link rel="stylesheet" href="css/font/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/m1.css" />

  </head>
  <body id="body">
    <div class="menubar">
      <div id="mheading">
        <h1>
          Codo
          <span>pedia</span>
          .com
        </h1>
      </div>
      <a href="contact.html">Contact</a>

      <a href="m5.html">About</a>

      <a href="m4.html">News</a>

      <a href="m3.html">Plus Members</a>
      <a href="index.html" class="active">Home</a>
    </div>
    <!--1 card-->
    <div class="home_page_content">
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/python_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">Python</p>
            </div>
            <div class="flip-card-back">
              <p class="card_name">Python Tutorial</p>
              <p></p>
              <ul class="back_side_points">
                <li><a href="pythonlanguage/py1.html">Introduction</a></li>
                <li><a href="pythonlanguage/py4.html">Basics</a></li>
                <li><a href="pythonlanguage/py8.html">Control Flow</a></li>
                <li><a href="pythonlanguage/py11.html">Functions</a></li>
                <li><a href="pythonlanguage/py13.html">Data Collections</a></li>
                <li><a href="pythonlanguage/py17.html">Strings</a></li>
                <li>
                  <a href="pythonlanguage/py19.html">File Input and Output</a>
                </li>
                <li>
                  <a href="pythonlanguage/py21.html">Exception Handling</a>
                </li>
                <li><a href="pythonlanguage/py23.html">Modules</a></li>
                <li><a href="pythonlanguage/py24.html">Libraries</a></li>
              </ul>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--2 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/c_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">C Language</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">C Language Tutorial</p>
                <p></p>
                <ul class="back_side_points">
                  <li><a href="clanguage/c1.html">Introduction</a></li>
                  <li><a href="clanguage/c2.html">Structure</a></li>
                  <li><a href="clanguage/c3.html">Variable</a></li>
                  <li><a href="clanguage/c10.html">Functions</a></li>
                  <li><a href="clanguage/c12.html">Header Files</a></li>
                  <li><a href="clanguage/c7.html">Loops</a></li>
                  <li><a href="clanguage/c16.html">Arrays</a></li>
                  <li><a href="clanguage/c17.html">Pointers</a></li>
                  <li><a href="clanguage/c18.html">Strings</a></li>
                  <li><a href="clanguage/c22.html">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="c1.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--3 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/c_plus_plus.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">C++ Language</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">C++ Language Tutorial</p>
                <ul class="back_side_points">
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Structure</a></li>
                  <li><a href="#">Variable</a></li>
                  <li><a href="#">Functions</a></li>
                  <li><a href="#">Header Files</a></li>
                  <li><a href="#">Loops</a></li>
                  <li><a href="#">Arrays</a></li>
                  <li><a href="#">Pointers</a></li>
                  <li><a href="#">Strings</a></li>
                  <li><a href="#">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--4 card-->
<div class="card">
	<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
				<img src="css/logo/html_logo.png" alt="Avatar" style="width:300px;height:300px;">
				<p class="card_name">HTML</p>
			</div>
			<div class="flip-card-back">
				<p class="card_name">HTML Tutorial</p>
					<p></p>
					<ul class="back_side_points">
						<li> <a href="HTML/ht1.html">Introduction </a></li>
						<li> <a href="HTML/ht3.html">HTML Syntax and structure </a></li>
						<li> <a href="HTML/ht4.html">Text and Formatting </a></li>
						<li> <a href="HTML/ht9.html">HTML Forms </a></li>
						<li> <a href="HTML/ht13.html">HTML Lists </a></li>
						<li> <a href="HTML/ht16.html">HTML Media</a></li>
						<li> <a href="HTML/ht21.html">HTML API's</a></li>
						<li> <a href="HTML/ht24.html">HTML Character Sets </a></li>
						<li> <a href="HTML/ht25.html">HTML Styles - CSS</a></li>
						<li> <a href="HTML/ht26.html">HTML Computer Code</a></li>
						<li> <a href="HTML/ht27.html">HTML vs. XHTML</a></li>
					</ul>
			</div>
		</div>
</div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--5 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/css_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">CSS</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">CSS Tutorial</p>
                <p></p>
                <ul class="back_side_points">
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Structure</a></li>
                  <li><a href="#">Scope</a></li>
                  <li><a href="#">Functions</a></li>
                  <li><a href="#">Feactures</a></li>
                  <li><a href="#">Importance</a></li>
                  <li><a href="#">Objective</a></li>
                  <li><a href="#">Syntax</a></li>
                  <li><a href="#">Conponant</a></li>
                  <li><a href="#">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--6 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/java_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">JAVA</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">JAVA Tutorial</p>
                <p></p>
                <ul class="back_side_points">
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Structure</a></li>
                  <li><a href="#">Scope</a></li>
                  <li><a href="#">Functions</a></li>
                  <li><a href="#">Feactures</a></li>
                  <li><a href="#">Importance</a></li>
                  <li><a href="#">Objective</a></li>
                  <li><a href="#">Syntax</a></li>
                  <li><a href="#">Conponant</a></li>
                  <li><a href="#">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--7 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/JavaScript_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">JavaScript</p>
            </div>
            <div class="flip-card-back">
              <p class="card_name">Python 3 Tutorial</p>
              <p></p>
              <ul class="back_side_points">
                <li><a href="#">Introduction</a></li>
                <li><a href="#">Structure</a></li>
                <li><a href="#">Scope</a></li>
                <li><a href="#">Functions</a></li>
                <li><a href="#">Feactures</a></li>
                <li><a href="#">Importance</a></li>
                <li><a href="#">Objective</a></li>
                <li><a href="#">Syntax</a></li>
                <li><a href="#">Conponant</a></li>
                <li><a href="#">Example</a></li>
              </ul>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--8 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/php_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">PHP</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">PHP Tutorial</p>
                <p></p>
                <ul class="back_side_points">
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Structure</a></li>
                  <li><a href="#">Scope</a></li>
                  <li><a href="#">Functions</a></li>
                  <li><a href="#">Feactures</a></li>
                  <li><a href="#">Importance</a></li>
                  <li><a href="#">Objective</a></li>
                  <li><a href="#">Syntax</a></li>
                  <li><a href="#">Conponant</a></li>
                  <li><a href="#">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!--9 card-->
      <div class="card">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img
                src="css/logo/c_3_logo.png"
                alt="Avatar"
                style="width: 300px; height: 300px;"
              />
              <p class="card_name">C# Language</p>
            </div>
            <div class="flip-card-back">
              <div>
                <p class="card_name">C Language Tutorial</p>
                <p></p>
                <ul class="back_side_points">
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Structure</a></li>
                  <li><a href="#">Scope</a></li>
                  <li><a href="#">Functions</a></li>
                  <li><a href="#">Feactures</a></li>
                  <li><a href="#">Importance</a></li>
                  <li><a href="#">Objective</a></li>
                  <li><a href="#">Syntax</a></li>
                  <li><a href="#">Conponant</a></li>
                  <li><a href="#">Example</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <a href="#.html">
          <i class="far fa-play-circle"></i>
        </a>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left">
 <a href="index.html">	<h3>Codo<span>pedia</span>.com</h3></a> <br>
        <br />
        <a href="log.html">
<form action="../logout.php" method="post"><button type="submit" class="login_singup_btn" name="logout">Logout</button></form>   </a>
        <br />
        <a href="https://www.facebook.com/codopedia1/" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://twitter.com/Codopedia1" target="_blank">
          <i class="fab fa-twitter-square"></i>
        </a>
        <a href="https://www.instagram.com/codopedia1/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
		
		<div class="copyright">© 2023 Codopedia.com</div>
      </div>

      <div class="footer-center">
		<div class="newsletter-container">
			<h1>Subscribe to Our Newsletter</h1>
			<p>Stay updated with our latest courses and news.</p>
			<form id="newsletter-form">
				<input type="email" id="email" placeholder="Your Email" required>
				<button type="submit">Subscribe</button>
			</form>
		</div>
      </div>

      <div class="footer-right">
        <p class="footer-right-heading">
          <span>Feedback</span>
        </p>
        <form class="footer-input-box" action="comment.php" method="post">
          <input
            class="ebox"
            type="text"
            placeholder="Enter E-mail ID..."
            name="cusername"
          />
          <br />
          <input class="cbox" type="text" placeholder="Comment..." />
          <a href="submit.html">
            <input class="button" type="button" value="Submit" name="comment" />
          </a>
        </form>
      </div>
    </footer>
  </body>
</html>
