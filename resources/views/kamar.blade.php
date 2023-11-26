@extends('layouts.tamu', ['title' => 'Kamar'])
@section('content')
    <div class="container content">

        <h1 class="text-center my-4">Kamar</h1>
        <hr>
        <div class="row kamar mb-3">
            <div class="col-md-4">
                <img src="images/kamar_standar.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md">
                <h2><a href="#"> Standar Room </a></h2>
                <p>"Kamar standar ini menyediakan fasilitas dasar dengan ukuran yang
                    nyaman, cocok untuk tamu yang mencari akomodasi dengan harga yang terjangkau."
                </p>
                <p>
                    Rp. 300. 000 / malam
                </p>
            </div>
        </div>
        <hr>
        <div class="row kamar mb-3">
            <div class="col-md-4">
                <img src="images/kamar_suite.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md">
                <h2><a href="#"> Suite Room </a></h2>
                <p> "Suite mewah ini menawarkan ruang yang luas dengan fasilitas lengkap, menciptakan
                    pengalaman menginap yang istimewa untuk tamu yang menginginkan kenyamanan dan privasi ekstra."
                </p>
                <p>
                    Rp. 400. 000 / malam
                </p>
            </div>
        </div>
        <hr>
        <div class="row kamar mb-3">
            <div class="col-md-4">
                <img src="images/superior-twin-bed.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md">
                <h2><a href="#"> Superior Room </a></h2>
                <p> "Kamar superior kami menawarkan kombinasi yang sempurna antara kenyamanan dan nilai tambah, dengan
                    fasilitas yang lebih baik dan perhatian ekstra terhadap detail untuk memenuhi kebutuhan tamu yang
                    mencari pengalaman menginap yang istimewa."
                </p>
                <p>
                    Rp. 800. 000 / malam
                </p>
            </div>
        </div>
        <hr>
        <div class="row kamar mb-3">
            <div class="col-md-4">
                <img src="images/kamar_deluxe.jpg" class="img-fluid rounded img-thumbnail" />
            </div>
            <div class="col-md">
                <h2><a href="#"> Deluxe Room </a></h2>
                <p>"Nikmati kenyamanan ekstra dalam kamar deluxe kami, dengan fasilitas yang ditingkatkan dan mungkin
                    pemandangan menakjubkan, menciptakan suasana istimewa untuk masa menginap Anda."
                </p>
                <p>
                    Rp. 700. 000 / malam
                </p>
            </div>
        </div>
    </div>
@endsection
