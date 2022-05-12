<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Loker</title>
  </head>
  <body>
    <main>
        <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom">Job Applicant</h2>
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
              <a href="#" data-bs-toggle="modal" data-bs-target="#gambar1">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-1.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pelaut</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="{{ asset('images/gambar-1.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Indonesia</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Pelaut" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>

            <div class="modal fade" id="gambar1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelaut</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="{{ asset('images/gambar-1.jpg')}}" width="410" height="610"/>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="col">
              <a href="#" data-bs-toggle="modal" data-bs-target="#gambar2">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-2.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Duta Besar</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="{{ asset('images/gambar-2.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Prancis</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Duta Besar" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>

              <div class="modal fade" id="gambar2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Duta Besar</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-2.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar3">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Fotografer</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-3.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Indonesia</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Fotografer" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>
        
              <div class="modal fade" id="gambar3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fotografer</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-3.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar4">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-4.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Nelayan</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-4.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Indonesia</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Nelayan" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nelayan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-4.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar5">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-5.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pilot</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-5.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Malaysia</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Pilot" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pilot</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-5.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar6">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-6.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pawang Burung</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-6.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Indonesia</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Pawang Burung" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pawang Burung</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-6.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar7">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-7.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Masinis</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-7.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Jepang</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Masinis" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masinis</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-7.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar8">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-8.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Menteri</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-8.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>India</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Menteri" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Menteri</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-8.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <a href="#" data-bs-toggle="modal" data-bs-target="#gambar9">
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('/images/gambar-9.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                      <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Trader</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                          <img src="{{ asset('images/gambar-9.jpg')}}" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                          <small>Indonesia</small>
                        </li>
                        <li class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary btn-small rounded-pill job" data-job="Trader" data-bs-toggle="modal" data-bs-target="#exampleModal">apply</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </a>
              </div>

              <div class="modal fade" id="gambar9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Trader</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/gambar-9.jpg')}}" width="410" height="610"/>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Form Pendaftaran-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formCreate" method="POST">
                      <div class="modal-body">
                        <div class="form-group row">
                          <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Nama Lengkap</label>
                          <div class="col-sm-8">
                            <input type="text" name="nama_lengkap" class="form-control form-control-sm" id="nama_lengkap" placeholder="masukkan nama lengkap" required>
                            <span class="text-danger small" id="namaerror"></span>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">No Telepon</label>
                          <div class="col-sm-8">
                            <input type="number" name="no_telp" class="form-control form-control-sm" id="no_telp" placeholder="masukkan no telepon" required>
                            <span class="text-danger small" id="teleponerror"></span>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">No Wa</label>
                          <div class="col-sm-8">
                            <input type="number" name="no_wa" class="form-control form-control-sm" id="no_wa" placeholder="masukkan no whatsapp" required>
                            <span class="text-danger small" id="waerror"></span>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Posisi Yang Dilamar</label>
                          <div class="col-sm-8">
                            <input type="text" name="nama_pekerjaan" class="form-control form-control-sm" id="nama_pekerjaan" readonly>
                              <span class="text-danger small" id="pekerjaanerror"></span>
                            </div>
                          </div>  
                      </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btndaftar">Daftar</button>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
    </main>

    <script src="{{ asset('template/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $( ".job" ).click(function() {
                var job = $(this).attr("data-job");  
                $('#nama_pekerjaan').val(job); 
            });

            $(document).on('click', '.btndaftar', function(){  
                var nama_lengkap = $('#nama_lengkap').val();    
                var no_telp = $('#no_telp').val(); 
                var no_wa = $('#no_wa').val(); 
                var nama_pekerjaan = $('#nama_pekerjaan').val();  
                Swal.fire({
                    title: 'Apakah anda yakin untuk mengkonfirmasi data ini ?',
                    html: "nama lengkap = " + nama_lengkap + "<br/>no telepon= " + no_telp + "<br/>no whatsapp= " + no_wa + "<br/>posisi yang dilamar= " + nama_pekerjaan,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#004028',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: "{{ route('pendaftaran.create') }}",
                            cache: false,  
                            method:'POST',  
                            data:  $('#formCreate').serialize(),
                            success: function(data){
                                Swal.fire({
                                    title: 'data berhasil terkirim',
                                    text: "sukses",
                                    icon: 'success',
                                    confirmButtonColor: '#004028',
                                    confirmButtonText: 'Oke',
                                    allowOutsideClick: false
                                });
                                $('#formCreate')[0].reset(); 
                                $('#exampleModal').modal('hide');  
                            },
                            error:function (response) {
                                $("#namaerror").hide().text(response.responseJSON.errors.nama_lengkap).fadeIn('slow').delay(2000).hide(1);
                                $("#teleponerror").hide().text(response.responseJSON.errors.no_telp).fadeIn('slow').delay(2000).hide(1);
                                $("#waerror").hide().text(response.responseJSON.errors.no_wa).fadeIn('slow').delay(2000).hide(1);
                                $("#pekerjaanerror").hide().text(response.responseJSON.errors.nama_pekerjaan).fadeIn('slow').delay(2000).hide(1);
                            }
                        })
                    }
                });
            });  
        });
    </script>
  </body>
</html>