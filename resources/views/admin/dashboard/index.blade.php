@extends('layouts.app')

@section('content')


    <div class="pagetitle">
      <h1>Dashboard Admin</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pelanggan <span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $total_pelanggan}}</h6>
                      <span class="text-success small pt-1 fw-bold">Total Pelanggan</span> 
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp. {{ $total_pemasukan}}</h6>
                      <span class="text-success small pt-1 fw-bold">Seluruh Pemasukan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->          

            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp. {{ $total_pengeluaran}}</h6>
                      <span class="text-success small pt-1 fw-bold">Seluruh Pengeluaran</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->  

            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp. {{ $saldo}}</h6>
                      <span class="text-success small pt-1 fw-bold">Keseluruhan Saldo</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->          



          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Agenda <span></h5>
              @foreach($agenda as $dt)
              <div class="">
                <div class="post-item clearfix">
                  <h4><a href="#">{{ $dt->nama_agenda}}</a></h4>
                  <p>{{ $dt->tanggal_agenda}}</p>
                </div>
              </div><!-- End sidebar recent posts-->
             @endforeach
            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>
@endsection

