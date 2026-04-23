@extends('layouts.dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Alur Tujuan Pembelajaran (ATP)</h5>
                <hr class="my-0" />
                <div class="card-body">
                    
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Tujuan Pembelajaran</h4>
                    </div>

                    <div class="px-2">
                        <p style="text-align: justify; line-height: 1.8;">
                            Tujuan pembelajaran pada media <strong>QuadraLearn</strong> disusun secara sistematis menggunakan metode tutorial untuk memastikan peserta didik dapat menguasai konsep fungsi kuadrat secara mendalam dan mandiri. Berikut adalah alur tujuan pembelajaran yang diharapkan:
                        </p>

                        <div class="mt-4">
                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">1</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Menganalisis Karakteristik</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu menentukan dan menganalisis karakteristik fungsi kuadrat, termasuk titik puncak, sumbu simetri, serta arah pembukaan grafik berdasarkan nilai koefisiennya.</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">2</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Konstruksi dan Transformasi</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu mengkonstruksi atau membentuk persamaan fungsi kuadrat dari data yang tersedia dan terampil mengubah bentuk persamaan dari satu model ke bentuk model lainnya secara akurat.</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">3</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Penyelesaian Masalah Kontekstual</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu mengaplikasikan konsep fungsi kuadrat untuk menyelesaikan berbagai masalah nyata (kontekstual) melalui pemodelan matematika yang tepat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection