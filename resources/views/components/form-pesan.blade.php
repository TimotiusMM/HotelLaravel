<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Form Title</title>
    <!-- Add your head content here -->
    <!-- Include Bootstrap if not already included -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>

    <form method="POST" action="{{ route('proses_pesan') }}" class="bg-white py-4 px-2 form-pesan border shadow">
        @csrf

        <div class="form-group">
            <label for="nama_pemesan">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control rounded"
                placeholder="Nama Pemesan">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control rounded" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="notelp">Nomor Telepon</label>
            <input type="tel" name="notelp" id="notelp" class="form-control rounded"
                placeholder="Nomor Telepon">
        </div>

        <div class="form-group">
            <label for="nama_tamu">Nama Tamu</label>
            <input type="text" name="nama_tamu" id="nama_tamu" class="form-control rounded" placeholder="Nama Tamu">
        </div>

        <div class="form-group">
            <label for="tipe_kamar">Tipe Kamar</label>
            <select name="tipe_kamar" id="tipe_kamar" class="custom-select rounded">
                <option value="deluxe">Deluxe</option>
                <option value="superior">Superior</option>
                <option value="standart">Standart</option>
                <option value="suite">Suite</option>

                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="cekIn">Check In</label>
            <input type="date" name="cekIn" id="cekIn" class="form-control rounded" placeholder="Check In">
        </div>

        <div class="form-group">
            <label for="cekOut">Check Out</label>
            <input type="date" name="cekOut" id="cekOut" class="form-control rounded" placeholder="Check Out">
        </div>

        <div class="form-group">
            <label for="jumlah_kamar">Jumlah Kamar</label>
            <input type="text" name="jumlah_kamar" id="jumlah_kamar" class="form-control rounded" maxlength="3">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-info">Pesan</button>
        </div>
    </form>

    <!-- Include Bootstrap JS and jQuery if not already included -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script> -->

</body>

</html>
