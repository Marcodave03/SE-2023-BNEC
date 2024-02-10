<x-admin>
      <x-slot name="navbarAdmin"></x-slot>
      <x-slot name="sidebarAdmin"></x-slot>
  
      <div class="container p-5">
          <div class="d-flex justify-content-between align-items-center mb-4 pt-4">
              <h4 class="m-0 fw-semibold text-pink">Message List</h4>
              <a type="button" href="{{ route('messages.create') }}" class="btn-outline-pink">
                    <i class="fa-solid fa-plus me-2"></i>Add Message
              </a>
          </div>
  
          <div class="card card-custom">
              <div class="card-body">
                  <table class="table">
                      <thead class="bg-light">
                          <tr class="text-muted">
                              <th>NAME</th>
                              <th>POSITION & MESSAGE</th>
                              <th>STATUS</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($messages as $message)
                              <x-modal-confirmation action="destroy" title="Delete Message" name="messages"
                                  :model=$message>
                                  Are you sure want to delete <span class="fw-semibold">{{ $message->name }}</span>?
                              </x-modal-confirmation>
  
                              <tr>
                                  <td class="align-top">{{ $message->name }}</td>
                                  <td class="align-top">
                                      <b>{{ $message->position }}</b>
                                      <br class="py-2">
                                      <p>{{ $message->message }}</p>
                                  </td>
                                  <td class="align-top">
                                      @if ($message->status == true)
                                          <span class="text-success fw-bold">Active</span>
                                      @else
                                          <span class="text-danger fw-bold">Inactive</span>
                                      @endif
                                  </td>
                                  <td class="align-top">
                                    <div class="text-end d-flex gap-2">
                                        <a class="btn-pink btn-sm" type="button" href="{{ url('storage/images/messages/'.$message->picture) }}" target="_blank">
                                            <i class="fa-solid fa-image d-block p-1"></i>
                                        </a>
                                        <div class="dropdown">
                                            <button class="btn-outline-pink btn-sm" type="button"
                                                data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical d-block p-1"></i>
                                            </button>
                                            <ul class="dropdown-menu p-1 border-0 shadow-sm rounded-3">
                                                <li>
                                                    <a class="dropdown-item p-2 rounded-3"
                                                        href="{{ route('messages.edit', $message) }}">
                                                        <i class="fa-solid col-2 fa-pen-to-square"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <button type="button" class="dropdown-item p-2 rounded-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#destroy{{ $message->id }}">
                                                        <i class="fa-solid col-2 fa-trash"></i>Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
</x-admin>