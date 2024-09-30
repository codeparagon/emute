<?php
include './header.php';
?>

<main class="main" >
    
 <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="mp-container">
  <div class="box">
   
    <div class="my-box-card">
      <input type="radio" name="tab" checked id="home">
      <input type="radio" name="tab" id="blog">
      <input type="radio" name="tab" id="help">
      <input type="radio" name="tab" id="code">
      <input type="radio" name="tab" id="about">
      <div class="list">
        <label for="home" class="home">
          <i class="fas fa-home"></i>
          <span class="topic">Home</span>
        </label>
        <label for="blog" class="blog">
          <i class="fas fa-blog"></i>
          <span class="topic">Blog</span>
        </label>
        <label for="help" class="help">
          <i class="fas fa-envelope"></i>
          <span class="topic">Help</span>
        </label>
        <label for="code" class="code">
          <i class="fas fa-code"></i>
          <span class="topic">Code</span>
        </label>
        <label for="about" class="about">
          <i class="fas fa-user"></i>
          <span class="topic">About</span>
        </label>
        <div class="indicator"></div>
      </div>
      <div class="content">
        <div class="home">
          <div class="sub-title">
            Home Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="blog">
          <div class="sub-title">
            Blog Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="help">
          <div class="sub-title">
            Help Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="code">
          <div class="sub-title">
            Code Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
        <div class="about">
          <div class="sub-title">
            About Content
          </div>
          <hr>
          <div class="txt">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates consequuntur rem.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<?php
include './footer.php';
?>