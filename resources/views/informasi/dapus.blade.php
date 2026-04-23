@extends('layouts.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Daftar Pustaka</h5>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Daftar Pustaka Yang Digunakan:</h4>
                    </div>
                    <div class="dapus-container">
                        
                        <style>
                            .dapus-item {
                                padding-left: 30px;
                                text-indent: -30px;
                                margin-bottom: 15px;
                                text-align: justify;
                                line-height: 1.6;
                            }
                            .dapus-item a {
                                word-wrap: break-word;
                            }
                        </style>

                        <div class="dapus-item">
                            Augustin, N., Purba, H. S., & Sari, A. (2021). Pengembangan Media Pembelajaran Interaktif Berbasis Web Pada Materi Statistika Dengan Metode Tutorial Untuk Siswa Kelas VIII. <i>Computer Science Education Journal (CSEJ)</i>, 1(1), 23–34. <a href="https://ppjp.ulm.ac.id/journals/index.php/csej" target="_blank">https://ppjp.ulm.ac.id/journals/index.php/csej</a>
                        </div>

                        <div class="dapus-item">
                            Hamidah, N., Afidah, I. N., & Setyowati, L. W. (2020). Pengaruh Media Pembelajaran Geogebra Pada Materi Fungsi Kuadrat Terhadap Motivasi dan Hasil Belajar Peserta Didik. <i>Journal of Education and Learning Mathematics Research (JELMaR)</i>, 1(1), 15. <a href="http://jelmar.wisnuwardhana.ac.id/index.php/jelmar/article/view/2/2" target="_blank">http://jelmar.wisnuwardhana.ac.id/index.php/jelmar/article/view/2/2</a>
                        </div>

                        <div class="dapus-item">
                            Purba, H. S., Drajad, M., & Mahardika, A. I. (2021). Pengembangan Media Pembelajaran Interaktif Berbasis Web pada Materi Fungsi Kuadrat dengan Metode Drill and Practice. <i>EDU-MAT: Jurnal Pendidikan Matematika</i>, 9(2), 131. <a href="https://doi.org/10.20527/edumat.v9i2.11785" target="_blank">https://doi.org/10.20527/edumat.v9i2.11785</a>
                        </div>

                        <div class="dapus-item">
                            Wahyuni, Y., Edrizon, & Fauziah. (2022). Pengembangan Bahan Ajar Matematika dengan Pemanfaatan Geogebra. <i>Jurnal Pendidikan Matematika</i>, 06(01), 1105–1119. <a href="https://j-cup.org/index.php/cendekia/article/view/1139/608" target="_blank">https://j-cup.org/index.php/cendekia/article/view/1139/608</a>
                        </div>

                        <div class="dapus-item">
                            Susanto, dkk. (2021). <i>Matematika untuk SMA/SMK Kelas X</i>. <a href="https://buku.kemdikbud.go.id/katalog/matematika-untuk-smasmk-kelas-x" target="_blank">https://buku.kemdikbud.go.id/katalog/matematika-untuk-smasmk-kelas-x</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection