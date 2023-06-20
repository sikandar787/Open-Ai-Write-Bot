<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/63e8927567.js"
      crossorigin="anonymous"
    ></script>
    <title>Generate image</title>
    <style>
      .d-flex {
        display: flex;
      }
      .container {
        text-align: center;
        padding-left: 32px;
        position: relative;
        width: 19%;
      }

      .image {
        padding-top: 2rem;
        display: flex;
        min-width: 16rem;
        height: 15rem;
        margin-left: 52px;
      }

      .overlay {
        margin-left: 84px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgb(89, 89, 89);
        overflow: hidden;
        width: 95%;
        height: 0;
        transition: 0.5s ease;
      }

      .container:hover .overlay {
        height: 88.5%;
      }

      .btn {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      }
      .btn a {
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="d-flex">
        @foreach ($response as $user)
      <div class="container">
        <img src="{{$user['url']}}" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      @endforeach
      {{-- <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div> --}}
    </div>
    {{-- <div class="d-flex">
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <img src="./assets/img/5.jpg" class="image" />
        <div class="overlay">
          <div class="btn">
            <a href=""><i class="fa-solid fa-circle-down"></i></a>
          </div>
        </div>
      </div>
    </div> --}}
  </body>
</html>
