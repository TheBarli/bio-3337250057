<?php
$mahasiswa = [
    'nama' => 'Barliano Gigari Setiawan',
    'nim' => '3337250057',
    'prodi' => 'Informatika',
    'angkatan' => 2025,
    'ipk' => 3.85,
    'email' => 'barligsetiawan@gmail.com',
    'github' => 'https://github.com/TheBarli',
    'hobi' => 'Mempelajari Hal Baru',
    'bio' => 'Saya adalah mahasiswa Informatika UNTIRTA yang bersemangat belajar teknologi web.',
    'skills' => ['C++', 'C#', 'Java'],
    'targets' => ['Freelance', 'Game Development'],
    'education' => [
        ['tahun' => '2025 - sekarang', 'jenjang' => 'S1 Informatika, UNTIRTA'],
        ['tahun' => '2022 - 2025', 'jenjang' => 'SMK Negeri 1 Cilegon'],
    ],
];

function badgeStatus($ipk)
{
    if ($ipk >= 3.75) {
        return 'Cumlaude 🌟';
    }

    if ($ipk >= 3.0) {
        return 'Sangat Memuaskan';
    }

    return 'Memuaskan';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Profil - <?= htmlspecialchars($mahasiswa['nama']) ?></title>
</head>

<body>
    <header class="header">
        <section class="header-content">
            <h1 class="title"><?= htmlspecialchars($mahasiswa['nama']) ?></h1>
            <p class="subtitle"><?= htmlspecialchars($mahasiswa['prodi']) ?>, UNTIRTA</p>
        </section>
        <button class="btn" id="toggleButton">Light Mode</button>
    </header>

    <main class="container">
        <section id="random-fact" class="section card">
            <h2 class="section-title">Fakta Hari Ini</h2>
            <ul id="random-fact-list" class="value">
                <li>Memuat fakta...</li>
            </ul>
            <section id="button-container">
                <button class="btn" id="newFactButton">Fakta Baru</button>
                <button class="btn" id="resetFactButton">Reset Fakta</button>
            </section>
        </section>

        <section id="tentang" class="section card">
            <h2 class="section-title">Tentang Saya</h2>
            <div class="info-item">
                <span class="label">NIM:</span>
                <span class="value"><?= htmlspecialchars($mahasiswa['nim']) ?></span>
            </div>
            <div class="info-item">
                <span class="label">Hobi:</span>
                <span class="value"><?= htmlspecialchars($mahasiswa['hobi']) ?></span>
            </div>
            <div class="info-item">
                <span class="label">IPK:</span>
                <span class="value"><?= htmlspecialchars($mahasiswa['ipk']) ?></span>
            </div>
            <div class="info-item">
                <span class="label">Status:</span>
                <span class="value"><?= htmlspecialchars(badgeStatus($mahasiswa['ipk'])) ?></span>
            </div>
            <div class="info-item">
                <span class="label">Bio:</span>
                <span class="value"><?= htmlspecialchars($mahasiswa['bio']) ?></span>
            </div>
        </section>

        <section id="skill-n-target" class="split-section">
            <section id="skill" class="section card">
                <h2 class="section-title">Bahasa Pemrograman Favorit</h2>
                <ul class="skill-list">
                    <?php foreach ($mahasiswa['skills'] as $skill): ?>
                        <li class="skill-item"><?= htmlspecialchars($skill) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section id="target" class="section card">
                <h2 class="section-title">Target Setelah Lulus</h2>
                <ul class="target-list">
                    <?php foreach ($mahasiswa['targets'] as $target): ?>
                        <li class="target-item"><?= htmlspecialchars($target) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </section>

        <section id="riwayat" class="section card">
            <h2 class="section-title">Riwayat Pendidikan</h2>
            <table class="education-table">
                <thead>
                    <tr>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jenjang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa['education'] as $edu): ?>
                        <tr>
                            <td><?= htmlspecialchars($edu['tahun']) ?></td>
                            <td><?= htmlspecialchars($edu['jenjang']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="footer">
        <p class="contact">
            Hubungi saya:
            <a class="link-opacity-100 link-opacity-75-hover text-decoration-none"
                href="mailto:<?= htmlspecialchars($mahasiswa['email']) ?>">
                <?= htmlspecialchars($mahasiswa['email']) ?>
            </a>
        </p>
    </footer>

    <script src="script.js"></script>
</body>

</html>