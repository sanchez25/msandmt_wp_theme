<?php
/*Template Name: Main*/
?>

<?php get_header()?>

<section class="main-content">
    <div class="container">
        <div class="main-text">
            <span class="text-top">Mobile solutions & marketing technologies</span>
            <h1>Digital marketing experts</h1>
            <button onclick="document.location='#'" class="btn-content">Become a partner</button>
        </div>
        <div class="cards">
            <div class="card fb">
                <img width="45" height="91" src="<?php echo get_template_directory_uri() ?>/img/fb.png" alt="facebook">
                <span>Facebook</span>
                <div class="ellipse"></div>
            </div>
            <div class="card google">
                <img width="69" height="71" src="<?php echo get_template_directory_uri() ?>/img/google.png" alt="google">
                <span>Google ads</span>
                <div class="ellipse"></div>
            </div>
        </div>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <h2>What we doing</h2>
            <p>
                MS&MT is a digital marketing agency cooperating with businesses and brands in many countries of the world. 
                We create innovative campaigns and strategies and we are constantly looking for new approaches in digital marketing.
            </p>
        </div>
    </div>
</section>
<section class="traffic-block">
    <div class="container">
        <div class="row">
            <h2>Our traffic sources</h2>
            <div class="columns">
                <div class="column-item">
                    <div class="column-img"></div>
                    <div class="column-right">
                        <span class="column-title">Google ads</span>
                        <p>We help your business to buy ads in the most popular traffic source.</p>
                    </div>
                </div>
                <div class="column-item">
                    <div class="column-img"></div>
                    <div class="column-right">
                        <span class="column-title">Facebook</span>
                        <p>The easiest way to reach the audiences.</p>
                    </div>
                </div>
                <div class="column-item">
                    <div class="column-img"></div>
                    <div class="column-right">
                        <span class="column-title">SEO</span>
                        <p>Attract more of the right customers to your site!</p>
                    </div>
                </div>
                <div class="column-item">
                    <div class="column-img"></div>
                    <div class="column-right">
                        <span class="column-title">ASO</span>
                        <p>We help to increase app visibility and conversion rate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners-block">
    <div class="container">
        <div class="row">
            <h2>Our partners</h2>
            <div class="columns partners">
                <a href="https://eu.iqoption.com/en" rel="nofloow noopener" target="_blank" aria-label="iq option" class="img-item">
                    <img class="option" width="253" height="69" src="<?php echo get_template_directory_uri() ?>/img/partners/iq-option.png" alt="iq option">        
                </a>
                <a href="https://digido.ph/" rel="nofloow noopener" target="_blank" aria-label="digido" class="img-item">
                    <img class="digido" width="216" height="62" src="<?php echo get_template_directory_uri() ?>/img/partners/digido.png" alt="digido">
                </a>
                <a href="https://moneycat.ph/" rel="nofloow noopener" target="_blank" aria-label="money cat" class="img-item">
                    <img class="money" width="239" height="56" src="<?php echo get_template_directory_uri() ?>/img/partners/money-cat.png" alt="money cat">
                </a>
                <a href="https://mpokket.in/" rel="nofloow noopener" target="_blank" aria-label="mpokket" class="img-item">
                    <img class="mpokket" width="211" height="86" src="<?php echo get_template_directory_uri() ?>/img/partners/mpokket.png" alt="mpokket">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="btn-block">
    <div class="container">
        <div class="row">
            <h2>Connect with the marketing experts today</h2>
            <div class="connect-block">
                <button onclick="document.location='#'" class="btn-content connect">Connect us</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>
