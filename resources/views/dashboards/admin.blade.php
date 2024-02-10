<x-admin title="Dashboard | NEO 2022">

      <x-slot name="navbarAdmin"></x-slot>
      <x-slot name="sidebarAdmin"></x-slot>
  
      <div class="container p-5">
          <section class="mb-4 pt-4">
              <div class="mb-3">
                  <h4 class="fw-semibold text-pink">Social Event 2023</h4>
                  <p class="m-0 text-purple-muted">lorem1000</p>
              </div>
  
              <div class="row g-3">
                  <div class="col-lg-3 col-md-4 col-6">
                      <div class="card border-0 shadow-sm-red rounded-3">
                          <div class="card-body">
                              <small class="text-muted">Media Partner</small>
                              <h3>{{ $media_partner_count }}</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6">
                      <div class="card border-0 shadow-sm-red rounded-3">
                          <div class="card-body">
                              <small class="text-muted">Sponsor</small>
                              <h3>{{ $sponsor_count }}</h3>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
  
          <section class="mb-4">
              <div class="row">
                  <div class="col-8">
                      <div class="card card-custom h-100">
                          <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                  <h4 class="fw-semibold text-pink m-0 col-6">Environments</h4>
                                  <div class="d-flex gap-3">
                                      <small><i class="fa-solid fa-square text-dark"></i> Closed</small>
                                      <small><i class="fa-solid fa-square text-warning"></i> Upcoming</small>
                                      <small><i class="fa-solid fa-square text-success"></i> Ongoing</small>
                                  </div>
                              </div>
  
                              <ul class="list-group">
                                  @foreach ($environments as $environment)
                                      <li class="list-group-item">
                                          <div class="row">
                                              <div class="col">
                                                  {{ $environment->name }}
                                              </div>
                                              <div class="col-1">
                                                  @if (strtotime($environment->start_time) <= time() && strtotime($environment->end_time) >= time())
                                                  <i class="fa-solid fa-square text-success"></i>
                                                  @elseif (strtotime($environment->start_time) > time())
                                                  <i class="fa-solid fa-square text-warning"></i>
                                                  @else
                                                  <i class="fa-solid fa-square text-dark"></i>
                                                  @endif
                                              </div>
                                          </div>
                                      </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
</x-admin>