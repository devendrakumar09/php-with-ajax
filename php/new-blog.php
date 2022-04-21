<div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">Add New Blog</h1>
          <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-light">
            <small class="text-success" id="msg"></small>
            <br>
            <div class="form-floating mb-3">
              <input type="title" class="form-control" id="title" placeholder="Title" name="title">
              <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
              <textarea name="description" cols="30" rows="10" class="form-control" id="description" placeholder="Password"></textarea>
              <label for="description">Description</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" onclick="save()">Save</button>

          </form>
        </div>
      </div>
    </div>