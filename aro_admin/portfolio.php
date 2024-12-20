<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Your Name - Portfolio</title>
  <link rel="stylesheet" href="port.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>Your Name</h1>
      </div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="intro" class="hero">
    <h1>Welcome to My Portfolio!</h1>
    <p>I'm a passionate developer, always exploring new technologies.</p>
  </section>

  <section id="about" class="about">
    <h2>About Me</h2>
    <p>I'm a developer with experience in web development, specializing in front-end technologies such as HTML, CSS, and JavaScript. I love creating clean, user-friendly websites and learning new skills.</p>
  </section>

  <section id="projects" class="projects">
    <h2>My Projects</h2>
    <div class="project-card">
      <h3>Project 1</h3>
      <p>A brief description of the project goes here. It's something I built with a specific tech stack.</p>
    </div>
    <div class="project-card">
      <h3>Project 2</h3>
      <p>A brief description of the project goes here. It's something I built with a specific tech stack.</p>
    </div>
    <div class="project-card">
      <h3>Project 3</h3>
      <p>A brief description of the project goes here. It's something I built with a specific tech stack.</p>
    </div>
  </section>

  <section id="contact" class="contact">
    <h2>Contact</h2>
    <form action="#" method="POST">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="message">Your Message</label>
      <textarea id="message" name="message" placeholder="Your Message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2024 Your Name. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
