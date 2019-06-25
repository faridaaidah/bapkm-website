@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>

@stop @extends('layouts.app') @section('content')

<div class="ui container">
    <!-- <div class="ui large breadcrumb">
      <a class="section">Home</a>
      <i class="right chevron icon divider"></i>
      <a class="section">Tentang Kami</a>
      <i class="right chevron icon divider"></i>
      <div class="active section">Gallery</div>
    </div> -->
    
    <div class="pusher">
        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="eight wide column">
                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-12 col-md-6 mb-4">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video" data-toggle="modal" data-target="#modal5"></a>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-lg-6">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></a>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-6">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video" data-toggle="modal" data-target="#modal6"></a>
                            </div>
                            <!-- Grid column -->
                        </div>

                        <!-- Grid row -->
                        <div class="row">

                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                    </div>
                    <div class="eight wide right floated column">
                        <h2 class="ui header">Apa itu Administrasi Pembelajaran dan Apa Saja Ranah Kerja AP ?</h2>
                        <p style="font-size: 20px;">AP atau Administrasi Pembelajaran merupakan bagian dari BAPKM yang bergerak dibidang administrasi registrasi data dan juga evaluasi pembelajaran.</p>
                        <h2 class="ui header">Apa Saja Layanan AP ?</h2>
                        <p style="font-size: 20px;">Layanan AP adalah mulai dari informasi penerimaan ptn untuk semua jalur yang digunakan ITS, wisuda, dan juga informasi seputar kalender akademik. </p>
                    </div>
                </div>
                <div class="row">
                  
                </div>
            </div>
        </div>

        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <img class="ui centered small circular image" src="{{ asset('force/img/core-img/test.png') }}">
                        <h3>Registrasi & Data</h3>
                        <p> Penerimaan Jalur PTN ITS </p>
                    </div>
                    <div class="column">
                        <img class="ui centered small circular image" src="{{ asset('force/img/core-img/exam.png') }}">
                        <h3>Pemantauan dan Evaluasi Pembelajaran</h3>
                        <p> IPK dan Nilai </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="eight wide column">
                        <h2 class="ui header">Apa itu Kesejahteraan Mahasiswa dan Apa Saja Ranah Kerja KM ?</h2>
                        <p style="font-size: 20px;">KM atau Kesejahteraan Mahasiswa merupakan bagian dari BAPKM yang bergerak dibidang pengolahan informasi beasiswa dan kegiatan mahasiswa seperti UKM.</p>
                        <h2 class="ui header">Apa Saja Layanan KM ?</h2>
                        <p style="font-size: 20px;">Layanan KM adalah mulai dari informasi beasiswa, layanan mengurus surat beasiswa, SPJ dan LPJ Kegiatan. </p>
                    </div>
                    <div class="eight wide right floated column">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 mb-4">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video" data-toggle="modal" data-target="#modal5"></a>
                            </div>
                            <div class="col-lg-6">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></a>
                            </div>
                            <div class="col-lg-6">
                                <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video" data-toggle="modal" data-target="#modal6"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                </div>
            </div>
        </div>

        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <img class="ui centered small circular image" src="{{ asset('force/img/core-img/book.png') }}">
                        <h3>Pengelolaan Beasiswa</h3>
                        <p>Apapun yang berkaitan dengan beasiswa</p>
                    </div>
                    <div class="column">
                        <img class="ui centered small circular image" src="{{ asset('force/img/core-img/cultural.png') }}">
                        <h3>Pengelolaan Data Kegiatan Mahasiswa</h3>
                        <p>Apapun yang berkaitan dengan kegiatan</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection