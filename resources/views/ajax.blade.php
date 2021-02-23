@extends('layouts.medecin')
@section('content')

<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
<br><br><br><br><br><br><br>
<form method="GET" action="/upload" enctype="multipart/form-data">
    
  <input type="file" name="file">
  
  <a href="#" onclick="upl()">Upload File</button>

    <button type="submit" >Upload File</button>
    </form>


</div>

<script>
function maladie() {
  var xhttp = new XMLHttpRequest();
  var str = document.getElementById("maladie").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "/set/maladie/13/{{Auth::user()->id}}/"+str, true);
  xhttp.send();
  document.getElementById("dsm").click();
}

</script>
<script>
const url = "/upload";
const form = document.querySelector('form');

// add event listener
    // collect files
    function upl(){

    const files = document.querySelector('[name=file]').files;
    const formData = new FormData();
    formData.append('file', files[0]);
      formData.append('_token',document.getElementsByName('_token'.value));
    // post form data
    const xhr = new XMLHttpRequest();
    // log response
    xhr.onload = () => {
        console.log(xhr.responseText);
    };

    // create and send the reqeust
    xhr.open('POST', url);
    xhr.send(formData);
    }
</script>

<!-- Maladie Model-->
    <div class="modal fade" id="newMaladie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle Maladie : </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><input type="text" id="maladie"/> </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" id="dsm" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" onclick="maladie()">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Maladie model --->
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#newMaladie">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Ajouter Maladie
  </a>


@endsection