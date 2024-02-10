<x-admin>

      <x-slot name="navbarAdmin"></x-slot>
  
      <div class="container" style="padding: 6rem 0; max-width: 60rem">
          <h4 class="mb-4 fw-semibold text-pink">Add New Message</h4>
  
          <form method="POST" action="{{ route('messages.store') }}" enctype="multipart/form-data">
              @csrf
  
              <div class="card card-custom mb-3">
                  <div class="card-body">
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Name</label>
                        <input type="text" class="col form-control" name="name" required>
                    </div>
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Position</label>
                        <input type="text" class="col form-control" name="position">
                    </div>
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Message</label>
                        <textarea type="text" class="col form-control" name="message" required></textarea>
                    </div>
                    <div class="row g-0 mb-3 input-group">
                        <label class="col-3 col-form-label">Picture</label>
                        <input type="file" class="col rounded form-control" name="picture" id="inputPicture" aria-describedby="inputPicture" aria-label="Upload">
                    </div>
                  </div>
              </div>
  
              <div class="d-grid gap-2 d-flex justify-content-end">
                  <a href="{{ route('messages.index') }}" class="btn-outline-pink px-5">Cancel</a>
                  <button type="submit" class="btn-pink px-5">Add</button>
              </div>
          </form>
      </div>
</x-admin>