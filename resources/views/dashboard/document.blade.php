  @extends('dashboard')
  @section('title', 'Dokumen')
  @section('menuDocument', 'active')

  @section('content')
      <div id="services" class="services section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="naccs">
                          <div class="grid">
                              <div class="row">
                                  <div class="col-lg-12 offset-lg-12  wow fadeInDown" data-wow-duration="1s"
                                      data-wow-delay="0.3s">
                                      <div class="section-heading">
                                          <h4>Dokumen</h4>
                                          <div class="line-dec"></div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="card">
                                          <div class="card-body">
                                              <table class='table table-striped' id="table1">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Nama</th>
                                                          <th>Aksi</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach ($documents as $document)
                                                          <tr>
                                                              <td>{{ $loop->iteration }}</td>
                                                              <td>{{ $document->name }}</td>
                                                              <td><a class="btn btn-primary"
                                                                      href="{{ url('storage/upload/document/' . $document->file) }}"
                                                                      role="button" download><i class="fa fa-download"></i>
                                                                      Downloads</a>
                                                              </td>
                                                          </tr>
                                                      @endforeach
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
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

  @push('script')
      <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
      <script src="{{ asset('template/dashboard/js/data-table.js') }}"></script>
  @endpush
