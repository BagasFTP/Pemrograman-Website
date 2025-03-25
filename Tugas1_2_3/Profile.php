<?php
include 'skills.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="Profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <nav>
        <div class="left">
            <a href="/">Profile</a>
        </div>
        <div class="right">
            <a href="http://github.com" target="_blank">
                <i class="fa-brands fa-github"></i>
                <span>Github</span>
            </a>
            <a href="http://linkedin.com" target="_blank">
                <i class="fa-brands fa-linkedin"></i>`
                <span>Linkedin</span>
            </a>
            <a href="mailto:23081010161@student.upnjatim.ac.id">
                <i class="fa-regular fa-envelope"></i>
                <span>Email</span>
            </a>
        </div>
    </nav>

    <main>
        <section class="Awalan">
            <div class="content">
                <div class="Text">
                    <h2>Hello, Saya Bagas ✌️</h2>
                    <p>Halo! Saya Bagas Firdaus Triputra, mahasiswa Informatika angkatan 2023 di UPN "Veteran" Jawa Timur. Saya memiliki NPM 2308101010161 dan saat ini tinggal di kos yang berada di Tambak Medokan Ayu. Sebagai mahasiswa informatika, saya tertarik dalam dunia teknologi, pemrograman, dan pengembangan perangkat lunak. Saya selalu berusaha untuk belajar hal-hal baru dan mengasah keterampilan saya di bidang coding. Senang bisa berkenalan dengan kalian semua! 🚀.</p>
                </div>
                <div class="Links">
                    <a href="#Skills">
                        <i class="fa-solid fa-code"></i>
                        <span>Skills</span>
                    </a>
                    <a href="#Contact">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Contact</span>
                    </a>
                </div>
            </div>
            <div class="Gambardiri">
                <img src="foto_profile.jpg" alt="Bagas">
            </div>
        </section>

        <section id="Skills" class="Skills">
            <h2>Skills</h2>
            <div class="Text">
                <p>Selama perjalanan saya di dunia informatika, saya telah mempelajari dan mengembangkan berbagai keterampilan yang mendukung saya dalam pemrograman dan teknologi. Berikut adalah beberapa keahlian yang saya miliki:</p>
            </div>
            <div class="cells">
                <?php foreach ($skills as $skill) { ?>
                    <a href="<?= $skill['link'] ?>">
                        <div class="cell">
                            <img src="<?= $skill['image'] ?>" alt="<?= $skill['name'] ?>">
                            <span><?= $skill['name'] ?></span>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </section>

        <section id="Contact" class="Contact">
            <h2>Contact</h2>
            <div class="grup">
                <div class="Text">
                    <p>Jangan ragu untuk menghubungi saya jika ada pertanyaan, peluang kerja sama, atau sekadar berdiskusi seputar teknologi. Saya siap berdiskusi dan belajar bersama!</p>
                </div>
                <form action="proses.php" method="POST">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="message">Pesan</label>
                    <textarea name="message" id="message" required></textarea>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>