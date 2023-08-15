  @extends('dashboard')
  @section('title', 'Detail Berita')


  @section('content')
      <div id="blog" class="blog">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="section-heading">
                          <h6>Informasi Publik</h6>
                          <h4>Detail Berita</h4>
                          <div class="line-dec"></div>
                      </div>
                  </div>
                  <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                      <div class="container-fluid py-3">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <!-- News Detail Start -->
                                      <div class="position-relative mb-3">
                                          <img class="img-fluid w-100" src="{{ $detailArticles['thumbnail'] }}"
                                              style="object-fit: cover;">
                                          <div class="overlay position-relative bg-light">
                                              <div class="mb-3">
                                                  <p>by {{ $detailArticles['author'] }}</p>
                                                  <a href="">{{ $detailArticles['category'] }}</a>
                                                  <span class="px-1">/</span>
                                                  <span>{{ $detailArticles['published_at'] }}</span>
                                              </div>
                                              <div>
                                                  <h3 class="mb-3">{{ $detailArticles['title'] }}</h3>
                                                  {!! $detailArticles['body'] !!}
                                              </div>
                                          </div>
                                      </div>
                                      <!-- News Detail End -->

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 pt-3 pt-lg-0">
                      <div class="container-fluid py-3">
                          <div class="container">
                              <!-- Popular News Start -->
                              <div class="pb-3">
                                  <div class="bg-light py-2 px-4 mb-3">
                                      <h3 class="m-0">Trending</h3>
                                  </div>
                                  @foreach (array_slice($articles['data'], 0, 5) as $article)
                                      <div class="d-flex mb-3">
                                          <a href="{{ route('detailBerita', $article['slug']) }}"><img
                                                  src="{{ $article['thumbnail'] }}" alt=""
                                                  style="width: 100px; height:
                                    100px; object-fit: cover;"></a>
                                          <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                              style="height: 100px;">
                                              <div class="mb-1" style="font-size: 13px;">
                                                  <a href="">{{ $article['category'] }}</a>
                                                  <span class="px-1">/</span>
                                                  <span>{{ $article['published_at'] }}</span>
                                              </div>
                                              <a class="h6 m-0"
                                                  href="">{{ Str::limit($article['title'], 55, '....') }}</a>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                              <!-- Popular News End -->

                              <div class="pb-3">
                                  <div class="bg-light py-2 px-4 mb-3">
                                      <h3 class="m-0">Tags</h3>
                                  </div>
                                  <div class="d-flex flex-wrap m-n1">
                                      @foreach ($detailArticles['tag'] as $tag)
                                          <a href="#"
                                              class="btn btn-sm btn-outline-secondary m-1">{{ $tag }}</a>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  @endsection
