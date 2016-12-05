<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Starter_theme
 * @since Starter_theme 1.0
 */

get_header(); ?>

<section class="home-page">
        <div class="full-width">
          <div class="half-width">
            <h1>Jubilee Austen</h1>
          </div>
          <div class="half-width">
            <nav>
              <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <h2><span>Hi,</span> I'm a developer that loves clean & elegant code.</h2>
        </div>
      </header>

      <main>
        <section id="about">
          <div class="full-width">
            <h2>A little bit about me.</h2>
            <div class="half-width">
              <p>I've made my home base in Providence, Rhode Island with my small growing family. My journey into tech started with a degree in journalism. As I started sharing my writing online, I was fascinated with how easily I could get my voice out there. I was hooked and wanted to learn how to build my own site to fit my own specific needs.</p>
            </div>
            <div class="half-width">
              <p>That curiosity then opened a door that could never be shut. When I learned how to build my first website, I realized I found something that gave me the freedom & versatility I was looking for in my work. Now I've made a full switch to front-end development, where I can use my organization skills and eye for detail to write clean, elegant code.</p>
            </div>
          </div>
        </section>
        <section id="work">
          <div class=full-width>
            <div class="third-width">
              <img src="img/html-icon.png" alt="HTML icon" />
              <h3>Hand-Coded HTML</h3>
              <p>My focus is writing clean, well-formatted, semantic HTML5 by hand to make sure that the content is easy to read, easy to collaborate, trouble-shoot and accessible.</p>
            </div>
			</div>
			<div class="full-width">
            <div class="third-width">
              <img src="img/css-icon.png" alt="CSS icon" />
              <h3>Well-Organized CSS</h3>
              <p>I pride myself on writing CSS that is easy to read and build on. I focus on keeping my CSS lean and fast to load, and I make it a habit to stay up to date on current best practices.</p>
            </div>
			</div>
			<div class="full-width">
            <div class="third-width">
              <img src="img/pencil-icon.png" alt="Pencil icon" />
              <h3>Ease Converting Designs into Code</h3>
              <p>You can trust me to take a designer's PSD and quickly & accurately convert it into a webpage that is pixel-perfect match.</p>
            </div>
          </div>
        </section>
        <footer id="contact">
          <div class="full-width">
            <div class="half-width">
              <img src="img/contact-image.png" id="contact-img" alt="Contact image" />
            </div>
            <div class="half-width" id="contact-info">
      
                <li><a href="https://twitter.com/" target="_blank"><img src="img/twitter.png" alt="twitter icon" /></a></li>
                <li><a href="https://www.tumblr.com/" target="_blank"><img src="img/tumblr.png" alt="tumblr icon" /></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png" alt="instagram icon" /></a></li>
                <li><a href="https://www.linkedin.com/skillcrush" target="_blank"><img src="img/linkedin.png" alt="linkedin icon" /></a></li>
                <li><a href="https://github.com/" target="_blank"><img src="img/github.png" alt="github icon" /></a></li>
              </ul>
            </div>
          </div>
        </footer>
      </main>

    </body>

<?php get_footer(); ?>