@include('partials.header')
<main id="main">
    <!-- Services Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Generate an image</h1>
                        <p class="mb-0">
                            Text-to-image models have been built using a variety of
                            architectures.Text-to-image models have been built using a
                            variety of architectures.Training a text-to-image model
                            requires a dataset of images paired with text captions.
                        </p>
                        <!-- generate image -->

                        <div class="d-flex align-items-center justify-content-center mt-4">
                            <div class="search-box">
                                <input type="text" placeholder="Type to search.." />
                                <div class="search-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="cancel-icon">
                                    <i class="fas fa-times"></i>
                                </div>
                                <div class="search-data"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
</main>
<!-- cards -->

<div class="container">
    <div class="card-deck row" id="image-results">
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@section('js')
<script>
   // searchbar
const searchBox = document.querySelector(".search-box");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const searchInput = document.querySelector("input");
const searchData = document.querySelector(".search-data");
    searchBtn.onclick = () => {
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if (searchInput.value != "") {
            $("#image-results").empty();
            $.ajax({
            type: "POST",
            url: "{{route('imagegen')}}",
            data: {
                "text": searchInput.value,
                "_token": "{{ csrf_token() }}",
            },
            success: function (result) {
                if (result.status === "success") {
                    let html = "";
                    $(result.data).each(function(i, v){
                        html += `<div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="card">
                                        <div class="view overlay">
                                            <img class="card-img-top" src="${v.url}" alt="Card image cap" />
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>`;
                    });
                    $("#image-results").removeClass('d-none');
                    $("#image-results").empty().append(html);

                } else {
                    // Display an error toast, with a title
                    toastr.error(result.message, 'Error!');
                }
            },
            error : function () {
                // $("#loginModal").modal('show');
            },
            dataType: "json"
            });
            // var values = searchInput.value;
            // searchData.classList.remove("active");
            // searchData.innerHTML =
            // "You just typed " +
            // "<span style='color: black; font-weight: 500;'>" +
            // values +
            // "</span>";

            // OPENAI API CALL

            // Get Response

            // Reddirect to new Page
        } else {
            searchData.textContent = "";
        }
    };
    cancelBtn.onclick = () => {
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
    };
</script>
@endsection
@include('partials.footer')

