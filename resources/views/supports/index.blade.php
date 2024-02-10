<x-admin title="Testimonies | NEO 2022">

      <x-slot name="navbarAdmin"></x-slot>
      <x-slot name="sidebarAdmin"></x-slot>
  
      <div class="container p-5">
          <div class="d-flex justify-content-between align-items-center mb-4 pt-4">
              <h4 class="m-0 fw-semibold text-pink">Support List</h4>
              <a type="button" href="{{ route('supports.create') }}" class="btn-outline-pink">
                <i class="fa-solid fa-plus me-2"></i>Add Support
              </a>
          </div>
  
          <div class="card card-custom">
              <div class="card-body">
                  @if ($supports->count() > 0)
                      <table class="table table-general">
                          <thead>
                              <tr class="text-secondary">
                                  <th class="col-5">SUPPORT</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($supports as $support)
                                  <x-modal-confirmation action="destroy" title="Delete Support" name="supports"
                                      :model=$support>
                                      Are you sure want to delete {{ $support->name }}?
                                  </x-modal-confirmation>
  
                                  <tr>
                                      <td class="align-middle">
                                          <div class="row gx-3 my-3">
                                              <div class="col-3">
                                                  <img src="/storage/images/supports/{{ $support->logo }}" width="100%"
                                                      class="rounded-3">
                                              </div>
                                              <div class="col m-auto">
                                                  <h6 class="fw-semibold mb-1">{{ $support->name }}</h6>
                                                  <small>{{ $support->category }}</small>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="align-middle text-end">
                                          <div class="dropdown">
                                            <button class="btn-outline-pink btn-sm" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical d-block p-1"></i>
                                            </button>
                                            <ul class="dropdown-menu p-1 border-0 shadow-sm rounded-3">
                                                <li>
                                                    <a class="dropdown-item p-2 rounded-3"
                                                        href="{{ route('supports.edit', $support) }}">
                                                        <i class="fa-solid col-2 fa-pen-to-square"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <button type="button" class="dropdown-item p-2 rounded-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#destroy{{ $support->id }}">
                                                        <i class="fa-solid col-2 fa-trash"></i>Delete
                                                    </button>
                                                </li>
                                            </ul>
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  @else
                      <div class="text-center">
                          <img src="/storage/images/assets/empty.webp" alt="No testimony Yet" width="20%">
                          <h5 class="fw-semibold">No Support Yet</h5>
                      </div>
                  @endif
              </div>
          </div>
      </div>
</x-admin>