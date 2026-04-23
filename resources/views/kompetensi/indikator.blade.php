@extends('layouts.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Capaian Pembelajaran (CP)</h5>
                <hr class="my-0" />
                <div class="card-body">
                    
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Capaian Pembelajaran Fase E</h4>
                    </div>

                    <div class="px-2">
                        <p style="text-align: justify; line-height: 1.8; font-size: 1.05rem;">
                            Berdasarkan Keputusan Kepala BSKAP Kemendikbudristek, capaian pembelajaran untuk mata pelajaran Matematika di tingkat SMA/MA Kelas X (Fase E) dirancang untuk membekali peserta didik dengan kemampuan berpikir kritis dan logis.
                        </p>

                        <div class="alert alert-outline-primary" role="alert">
                            <p class="mb-0" style="text-align: justify; line-height: 1.8;">
                                <strong>Uraian Capaian:</strong><br>
                                Di akhir Fase E, peserta didik memiliki kemampuan untuk memahami dan menyelesaikan masalah yang berkaitan dengan sistem persamaan linear tiga variabel serta sistem pertidaksamaan linear dua variabel. 
                                Selain itu, peserta didik diharapkan mampu menerapkan konsep-konsep matematika yang lebih kompleks dalam kehidupan sehari-hari, khususnya dalam <strong>menyelesaikan masalah yang berkaitan dengan persamaan dan fungsi kuadrat</strong> (termasuk konsep akar imajiner), serta mampu mengoperasikan persamaan eksponensial (baik yang berbasis sama maupun fungsi eksponensial secara umum).
                            </p>
                        </div>

                        <p class="mt-4" style="text-align: justify; line-height: 1.8;">
                            Melalui media pembelajaran <strong>QuadraLearn</strong> ini, fokus utama pencapaian diarahkan pada materi Fungsi Kuadrat. Peserta didik diharapkan tidak hanya sekadar menghitung, namun juga mampu:
                        </p>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Menganalisis karakteristik grafik fungsi kuadrat berdasarkan koefisien dan diskriminannya.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Merekonstruksi fungsi kuadrat dari berbagai informasi yang diketahui (titik puncak, titik potong, atau titik sembarang).</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Memodelkan dan menyelesaikan masalah nyata yang berbentuk fungsi kuadrat dengan bantuan visualisasi GeoGebra.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection