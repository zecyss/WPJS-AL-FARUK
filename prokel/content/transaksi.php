<?php
    // Mengambil data yang dikirimkan melalui POST
    @ $data1 = $_POST['data1'];
    @ $data2 = $_POST['data2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../assets/css/transaksi.css">
</head>
<body>

    <div>
        

        <div class="con-boxtran">
            <div class="boxtran">
                <div class="boxtran-set">
                    <!-- Form untuk memasukkan detail transaksi -->
                    <label for="transactionNumber">Nama Customer:</label>
                    <input type="text" placeholder="Masukan Nama Anda" name="notransaksi" aria-describedby="basic-addon1"><br>
                    
                    <div class="float-right">
                        <label for="size">Ukuran:</label>
                        <select>
                                <option type="radio" id="tambahan2" name="additionalPackage" value="20000">S - Rp.20000</option>
                                <option type="radio" id="tambahan2" name="additionalPackage" value="20000">M - Rp.20000</option>
                                <option type="radio" id="tambahan2" name="additionalPackage" value="20000">L - Rp.20000</option>
                                <option type="radio" id="tambahan2" name="additionalPackage" value="20000">XL - Rp.20000</option>
                                <option type="radio" id="tambahan2" name="additionalPackage" value="20000">XXL - Rp.20000</option>
                        </select>
                    </div>
                    <div class="float-right">
                        <label for="size">Tipe Kain:</label>
                        <select>
                                <option type="radio" id="tambahan" name="additionalPackage" value="20000">Kain Tenun - Rp.20000</option>
                                <option type="radio" id="tambahan" name="additionalPackage" value="30000">Kain Satin - Rp.30000</option>
                                <option type="radio" id="tambahan" name="additionalPackage" value="40000">Kain katun - Rp.40000</option>
                                <option type="radio" id="tambahan" name="additionalPackage" value="50000">Kain Baby Canvas - Rp.50000</option>
                                <option type="radio" id="tambahan" name="additionalPackage" value="60000">Kain Drill - Rp.60000</option>
                                <option type="radio" id="tambahan" name="additionalPackage" value="70000">Kain Linen - Rp.70000</option>
                        </select>
                    </div>
                    
                    <label for="transactionDate">Alamat Customer:</label>
                    <input type="text" placeholder="Masukan Alamat Anda"  aria-label="Username" aria-describedby="basic-addon1">
                    <br>
                    
                    <label for="customerName">Tanggal Transaksi:</label>
                    <input type="date" placeholder="Masukan Nama Costumer" aria-describedby="basic-addon1">
                    <br>
                    
                    <label for="selectedPackage">Model Pilihan:</label>
                    <input type="text" value="<?php echo $data1?>">
                    <br>
                    
                    <label for="packagePrice">Harga Model:</label>
                    <input type="text" id="harga" value="<?php echo $data2?>" name="harga">
                    <br>
                </div>
                
                <!-- Tombol untuk menghitung total harga -->
                <button type="button" class="float-right btn" onclick="hitungTotalHarga()">Hitung</button>
            </div>
            
            <!-- Bagian tampilan output transaksi -->
            <div class="con-outtran">
                <div class="outtran">
                    <label>Total Harga:</label>
                    <input type="text" id="totalHarga" value="" readonly required>
                    
                    <label>Pembayaran:</label>
                    <input type="text" id="pembayaran"><br>
                    
                    <!-- Tombol untuk menghitung kembalian -->
                    <button type="button" class="btn-set btn-ml btn" onclick="hitungKembalian()">Hitung Kembalian</button>
                    
                    <label for="transactionChange">Kembalian:</label>
                    <input type="text" id="kembalian"><br>
                    
                    <!-- Tombol untuk menyimpan transaksi -->
                    <button type="button" class="btn-set btn-ml btn" onclick="simpan()">Simpan Transaksi</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Memuat skrip JavaScript dari file "transaksi.js" -->
<script src="../transaksi/transaksi.js"></script>
</body>