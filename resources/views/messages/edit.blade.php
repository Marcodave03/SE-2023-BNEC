<x-admin>

      <x-slot name="navbarAdmin"></x-slot>
  
      <div class="container" style="padding: 6rem 0; max-width: 60rem">
          <h4 class="mb-4 fw-semibold text-pink">Edit Message</h4>
  
          <form method="POST" action="{{ route('messages.update', $message) }}" enctype="multipart/form-data">
            @csrf
  
            <div class="card card-custom mb-3">
                <div class="card-body">
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Name</label>
                        <input type="text" value="{{ $message->name }}" class="col form-control" name="name" required>
                    </div>
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Position</label>
                        <input type="text" value="{{ $message->position }}" class="col form-control" name="position" required>
                    </div>
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Message</label>
                        <textarea type="text" value="{{ $message->message }}" class="col form-control" name="message" required>{{ $message->message }}</textarea>
                    </div>
                    <div class="row g-0 mb-3 input-group">
                        <label class="col-3 col-form-label">New Picture</label>
                        <input type="file" class="col rounded form-control" name="picture" id="inputPicture" aria-describedby="inputPicture" aria-label="Upload">
                    </div>
                    <div class="row g-0 mb-3">
                        <label class="col-3 col-form-label">Status</label>
                        <div class="col">
                            <fieldset>
                                <input type="radio" class="btn-check" id="messageActive" name="status" value=1
                                    {{ $message->status == true ? 'checked' : '' }} required>
                                <label for="messageActive" class="label_messageActive rounded-pill">True</label>

                                <input type="radio" class="btn-check" id="messageInactive" name="status"
                                    {{ $message->status == false ? 'checked' : '' }} value=0>
                                <label for="messageInactive" class="label_messageInactive rounded-pill">False</label>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
  
              <div class="d-grid gap-2 d-flex justify-content-end">
                  <a href="{{ route('messages.index') }}" type="button" class="btn-outline-pink px-5">
                      Cancel
                  </a>
                  @method('PUT')
                  <button type="submit" class="btn-pink px-5">Save Changes</button>
              </div>
          </form>
      </div>
</x-admin>

<style>
    input[type="radio"]#messageActive:checked ~ label.label_messageActive{
        color: white;
        background-color: rgb(211, 38, 90);
        border-radius: 8px;
        border: none;
        padding: 6px 10px;
        text-decoration: none;
    }
    input[type="radio"]#messageActive ~ label.label_messageActive{
        color: rgb(255,84,136);
        outline: 1px solid rgb(255,84,136);
        background-color:white;
        border-radius: 8px;
        border: none;
        padding: 6px 10px;
        text-decoration: none;
    }
    input[type="radio"]#messageInactive:checked ~ label.label_messageInactive{
        color: white;
        background-color: rgb(211, 38, 90);
        border-radius: 8px;
        border: none;
        padding: 6px 10px;
        text-decoration: none;
    }
    input[type="radio"]#messageInactive ~ label.label_messageInactive{
        color: rgb(255,84,136);
        outline: 1px solid rgb(255,84,136);
        background-color:white;
        border-radius: 8px;
        border: none;
        padding: 6px 10px;
        text-decoration: none;
    }
</style>