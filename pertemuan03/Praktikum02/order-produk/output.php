<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $dsc = htmlspecialchars($_POST['dsc']);
    $number = htmlspecialchars($_POST['number']);
    $holder = htmlspecialchars($_POST['holder']);
    $transaction = htmlspecialchars($_POST['transaction']);
    $bank = htmlspecialchars($_POST['bank']);
    $bukti_pembayaran = isset($_POST['bukti_pembayaran']) ? $_POST['bukti_pembayaran'] : [];
    $grup = htmlspecialchars($_POST['grup']);
    $email = htmlspecialchars($_POST['email']);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Produk Telah Berhasil</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <main class="main-content">
            <div class="form-container">
                <!-- Bagian kiri: upload gambar -->
                <div class="image-section">
                    <div class="image-box">
                        <p>Upload Picture</p>
                    </div>
                    <div>
                        <button class="upload-btn">Upload Picture</button>
                    </div>
                </div>

                <!-- Bagian kanan: hasil -->
                <div class="form-section">
                    <div class="form-group">
                        <label>Title Here:</label> <?= $title ?>
                    </div>

                    <div class="form-group">
                        <label>Description:</label> <?= nl2br($dsc) ?>
                    </div>

                    <div class="form-group">
                        <label>Account Number:</label> <?= $number ?>
                    </div>

                    <div class="form-group">
                        <label>Bank:</label> <?= $bank ?>
                    </div>

                    <div class="form-group">
                        <label>Account Holder:</label> <?= $holder ?>
                    </div>

                    <div class="form-group">
                        <label>Transaction:</label> <?= $transaction ?>
                    </div>

                    <p class="note">* if the transaction is for 3 persons, choose 3 from the drop-down list</p>

                    <div class="checkbox-group">
                        <label>Send via: <?= implode(", ", $bukti_pembayaran) ?></label>
                    </div>

                    <div class="form-group">
                        <label>Send to Mobile Phone:</label> <?= $grup ?>
                    </div>

                    <div class="form-group">
                        <label>Send to Email:</label> <?= $email ?>
                    </div>

                    <div class="button-center">
                        <button onclick="window.location.href='index.html'" class="generate-btn">Kembali</button>
                    </div>
                </div>
            </div>
        </main>
    </body>

    </html>
    <?php
} else {
    echo "<script>alert('Please fill out the form first.'); window.history.back();</script>";
    exit();
}
?>