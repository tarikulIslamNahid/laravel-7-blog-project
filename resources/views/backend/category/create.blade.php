@extends('backend.layouts.app')

@section('title','Category Create')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Create</span></li>
@endsection

@section('style')

@endsection
@section('content')



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing ">
{{-- content --}}



<div id="custom_styles" class="col-lg-12 mt-4 layout-spacing col-md-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Create Category</h4>
                </div>
            </div>
        </div>
        <hr>
        <div class=" ">

<form class="needs-validation" novalidate action="{{route('admin.category.store')}}" method="post" enctype='multipart/form-data' >
@csrf

<div class="form-row">
<div class="col-md-12">

        <label for="validationCustom0disc">Category Discription</label>
        <textarea class="form-control" name='disc' id="validationCustom0disc" rows="3"></textarea>

</div>

</div>


<div class="form-row mt-4">
<div class="col-md-6">
    <label for="validationCustom02">Category Name</label>
    <input type="text" class="form-control" id="validationCustom02"   name="name"  required>
    <div class="invalid-feedback">
        Please provide a Category Name.
    </div>
    <div class="valid-feedback">
        Looks good!
    </div>
</div>
<div class="col-md-6">
    <label for="address">Category Image</label>
    <input type="file" id='image' class="form-control" name="image">

    .<div class="form-group">
  <img id='showImg' src="{{url('admin/assets/img/boy.png')}}" width="100px" height="100px" alt="">
    </div>

</div>
</div>


<button class="btn btn-primary mt-3" type="submit">Create Category</button>
</form>


</div>
</div>
</div>


{{-- content --}}
    </div>

</div>
<!--  END CONTENT AREA  -->


@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
        let reader = new FileReader();
        reader.onload = function(e){
            $('#showImg').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });
});
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
</script>
@endsection
