<form method="post" action="{{ route('location2') }}" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">latitude</label>
      <input name="lat" class="form-control" >
    </div>
    <div class="mb-3">
      <label  class="form-label">Longitude</label>
      <input  name="long" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
