<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!--css-->
    <link rel="stylesheet" href="css/style.css">

      <!--javascript-->
      <script>
          var img;
          function action_qrcode() {

            img= document.all.qr_base.value + document.all.qr_add.value;
            qr_img.src=img;
            qr_ii.href = img;
          }
          function download() {
            local.href=img;
          }
      </script>
  </head>
<body>
  <!--nav-->
  <nav class="navbar navbar-expand-lg navbar-light nav-distance">
    <a class="navbar-brand" href="#">Qr Code</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://intunknown.tistory.com/428">QR코드 생성기 만들기.</a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li-->
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">사진QR코드 스캔(예정)</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--nav끝-->
  <!--Section1-->
  <section class="section1">
    <h1 class="title">Qr코드 생성기</h1><br/>
    <h2 class="subtitle">무엇이든 QR코드로 만들어드립니다.</h2>
  </section>
  <!--Section2-->
  <section class="blog">
    <div class="container mt-5 blog_cover d-flex flex-row-reverse">
      <img src="image/blog.png" alt=""class="blog-icon">
      <a href="https://intunknown.tistory.com/" class="blog-link">느긋한 주인장</a>
    </div>
  </section>
<div class="container file-upload" align="center">
  <input name="qr_base" type="hidden" value="http://chart.apis.google.com/chart?cht=qr&chs=100x100&choe=UTF-8&chld=H|0&chl=">
  <input name="qr_add" type="text" style="width:400px;" value="https://intunknown.tistory.com/">
  <button class="file-upload-btn" type="button" onclick="action_qrcode()">QR코드 생성</button>

  <div class="image-upload-wrap">

      <img name="qr_img" class="mt-5 pt-5 file-upload-image" src="image/qr.png" alt="your image" />
    </br>
    <div class="drag-text">
      <h3>QR코드</h3>
    </div>
  </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
<!--Copyright (c) 2020 by Aaron Vanston (https://codepen.io/aaronvanston/pen/yNYOXR)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

-->

</html>
