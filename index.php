<?php
require_once __DIR__ . '/config/config.php';
include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/navbar.php';
?>

<div class="max-w-3xl mx-auto mt-10 px-4">

    <h1 class="text-3xl font-bold mb-3">Selamat datang di ItemLend 👋</h1>

    <?php if (empty($_SESSION['user_id'])): ?>

        <p class="text-gray-700 mb-3">
            Silakan login atau daftar untuk mulai menyewa / menyewakan barang.
        </p>

        <a href="/itemlend/auth/login.php" class="text-blue-600 underline">Login</a> |
        <a href="/itemlend/auth/register.php" class="text-blue-600 underline">Register</a>

    <?php else: ?>

        <p class="text-gray-700 mb-3">Halo, <?= htmlspecialchars($_SESSION['username']) ?>!</p>

        <?php if ($_SESSION['role'] === 'pemilik'): ?>
            <a href="/itemlend/owner/dashboard.php" class="text-blue-600 underline">
                Pergi ke Dashboard Pemilik
            </a>
        <?php else: ?>
            <a href="/itemlend/renter/home.php" class="text-blue-600 underline">
                Pergi ke Beranda Penyewa
            </a>
        <?php endif; ?>

    <?php endif; ?>

</div>

<?php include __DIR__ . '/partials/footer.php'; ?>
