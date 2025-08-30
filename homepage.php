<?php
/**
 * Template Name: Homepage
 */

get_header();

$opts = get_option('ct_theme_settings', []);
?>

<div>
    <div style="margin: 20px;">
        <nav class="ct-breadcrumb" aria-label="Breadcrumb">
            <ol>
                <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
                <li><a href="#">Who We are</a></li>
                <li><a  class="current" href="#">Contact</a></li>
            </ol>
        </nav>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum. Cum sociis natoque
        penatibus et magnis dis parturient rnontes, nascetur ridiculus mus. Maecenas eu placerat metus, ege: placerat libero.</p>
    </div>
    
    <div class="contact-container">
        <div class="contact-form">
            <h2 class="section-title">CONTACT US</h2>
            <span class="title-rule"></span>

            <form action="#" method="POST" class="contact-grid">
                <!-- Name (full width) -->
                <label class="sr-only" for="name">Name *</label>
                <input type="text" id="name" name="name" placeholder="Name *" required>

                <div style="display: flex;">
                    <!-- Phone (left half) -->
                    <label class="sr-only" for="phone">Phone *</label>
                    <input type="text" id="phone" name="phone" placeholder="Phone *" class="half left" required>

                    <!-- Email (right half) -->
                    <label class="sr-only" for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Email *" class="half right" required>
                </div>

                <!-- Message (full width, tall) -->
                <label class="sr-only" for="message">Message *</label>
                <textarea id="message" name="message" placeholder="Message *" class="message" required></textarea>

                <!-- Submit -->
                <button type="submit" class="btn-submit">SUBMIT</button>
            </form>
        </div>

        <div class="contact-info">
            <h2 class="section-title">REACH US</h2>
            <span class="title-rule"></span>

            <div class="company">
                <p class="org">Coalition Skills Test</p>
                <p><?php echo $opts['address'] ?></p>

                <p class="tel"><strong>Phone:</strong> <?php echo $opts['phone'] ?></p>
                <p class="fax"><strong>Fax:</strong> <?php echo $opts['fax'] ?></p>
            </div>

            <div class="social-media social-reach">
                <a href="<?php echo $opts['social']['facebook'] ?>" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo $opts['social']['twitter'] ?>" target="_blank" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
                </a>
                <a href="<?php echo $opts['social']['linkedin'] ?>" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="<?php echo $opts['social']['pinterest'] ?>" target="_blank" aria-label="Pinterest">
                <i class="fab fa-pinterest-p"></i>
                </a>
            </div>
        </div>
    </div>
</div>
