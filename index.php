<?php include 'function.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylephp.css">
    <link rel="stylesheet" href="style2php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Alex's Page</title>
</head>

<body>
    <header>
        <div class="navbar">
            <nav class="navbar-list">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                </ul>
                <img src="assets/images/moon.png" id="icon">
            </nav>
        </div>
        <section id="home" class="home-page">
            <div class="home-container">
                <div class="title-container">
                    <h1>Greetings!</h1>
                    <h3>Saya Alexandrio Maleteng, Mahasiswa Universitas Sam Ratulangi, Teknik Informatika</h3>
                </div>
                <div class="greetings-image">
                    <img src="assets/images/alex.jpg" alt="">
                </div>
            </div>
        </section>  
    </header>

    <main>
        <section id="gallery" class="gallery-page">
            <div class="gallery-text">
                <h1>Gallery</h1>
            </div>
            <div class="photo-container">
                <div class="gallery-item">
                    <div>
                        <img src="assets/images/download.jpeg" alt="Lewis Hamilton">
                        <p>Lewis Hamilton</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div>
                        <img src="assets/images/seb.jpeg" alt="Lewis Hamilton">
                        <p>Sebastian Vettel</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div>
                        <img src="assets/images/michael schumacher.jpeg" alt="Lewis Hamilton">
                        <p>Michael schumacher</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="blog" class="blog_page">
            <article class="blog_card">
            <?php if ($image1 !== null): ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($image1); ?>" alt="Image 1">
            <?php else: ?>
                <p>No image found for ID 1</p>
            <?php endif; ?>
                <div class="blog_text">
                    <h2><?php echo $title1; ?></h2>
                    <p><?php echo $desc1; ?></p>
                    <a href="<?php echo $url1; ?>">Informasi                        Selengkapnya</a>
                </div>
            </article>
            <article class="blog_card">
            <?php if ($image2 !== null): ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($image2); ?>" alt="Image 1">
            <?php else: ?>
                <p>No image found for ID 1</p>
            <?php endif; ?>
                <div class="blog_text">
                    <h2><?php echo $title2; ?></h2>
                    <p><?php echo $desc2; ?></p>
                    <a href="<?php echo $url2; ?>">Informasi
                        Selengkapnya</a>
                </div>
            </article>
            <article class="blog_card">
            <?php if ($image3 !== null): ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($image3); ?>" alt="Image 1">
            <?php else: ?>
                <p>No image found for ID 1</p>
            <?php endif; ?>
                <div class="blog_text">
                <h2><?php echo $title3; ?></h2>
                <p><?php echo $desc3; ?></p>
                <a href="<?php echo $url3; ?>">Informasi
                    Selengkapnya</a>
                </div>
            </article>
        </section>

        <section id="contact" class="contact-page">
            <div class="contact-title">
                <h1>Contact</h1>
                <p>Email: andrmltng@gmail.com</p>
            </div>
        </section>

    </main>

    <footer>
    </footer>

<script src="script.js"></script>

</body>

</html>