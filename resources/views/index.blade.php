    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Text to Image</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link
      href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

  </head>

  <body>
    <header class="header" class="d-flex align-items-center">
      <div class="container d-flex flex-column align-items-center">
        <h1 class="h-3">Text to Image with AI Image Generator</h1>
        <h2 class="h-4">
          Convert words to images in seconds with Fotor's free AI image
          generator.Input the text prompts and transfer your imagination into
          arts now.
        </h2>
      </div>
      <form action="{{ route('imagegen') }}" method="post">
        @csrf
        <div class="form-1">
          <textarea name= "text" placeholder="Enter your text"></textarea><br />
          <button type="submit">Generate</button>
          <!-- <a class="a" href="">Generate</a> -->
        </div>
      </form>
    </header>

    <main id="main">
      <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6">
              <h2>A text-to-image model is a machine learning model</h2>
              <h3>
                Text-to-image models are trained on large datasets of (text,
                image) pairs.
              </h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                This is an AI Image Generator. It creates an image from scratch
                from a text description.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check"></i> Text-to-image models have been
                  built using a variety of architectures.
                </li>
                <li>
                  <i class="bi bi-check"></i> Text-to-image models have been
                  built using a variety of architectures.
                </li>
                <li>
                  <i class="bi bi-check"></i> Text-to-image models have been
                  built using a variety of architectures.
                </li>
              </ul>
              <p class="fst-italic">
                Training a text-to-image model requires a dataset of images
                paired with text captions.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <p>Designed by Dev</p>
        </div>
      </div>
    </footer>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
