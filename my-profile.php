<?php
include './header.php';
?>

<main class="main">
        <div class="mp-back">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
        <div class="mp-menubar ">
        <i class="fa-solid fa-bars"></i>
        </div>

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
    integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <div class="mp-container">
    <div class="box">

      <div class="my-box-card">
        
        <input type="radio" name="tab" id="home">
        <input type="radio" name="tab" checked id="blog">
        <input type="radio" name="tab" id="help">
        <input type="radio" name="tab" id="code">
        <input type="radio" name="tab" id="about">
        <div class="list">
          <label for="home" class="home">
            <i class="fa-regular fa-square-check"></i>
            <span class="topic">Order History</span>
          </label>
          <label for="blog" class="blog">
            <i class="fa-regular fa-user"></i>
            <span class="topic">Profile</span>
          </label>
          <label for="help" class="help">

            <i class="fa-solid fa-gear"></i>
            <span class="topic">Setting</span>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur
                nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates
                consequuntur rem.
              </p>
            </div>
          </div>
          <div class="blog">
            <div class="container id-001 account-details id-002">
              <h2>Account Details</h2>
              <hr class="divider id-003">
              <div class="profile-section id-004">
                <img src="https://via.placeholder.com/200" alt="Profile Picture" class="profile-pic id-005">
                <div class="email-section id-006">
                  <p class="email-text id-007">Email: <span>email@gmail.com</span></p>
                  <button class="change-button id-008">CHANGE</button>
                </div>
              </div>

              <form class="form-section id-009">
                <div class="form-group id-010">
                  <input type="text" class="form-input id-011" placeholder="FIRST NAME">
                  <input type="text" class="form-input id-012" placeholder="LAST NAME">
                </div>
                <div class="form-group id-013">
                  <input type="date" class="form-input id-014" placeholder="DATE OF BIRTH">
                  <input type="text" class="form-input id-015" placeholder="ZIP CODE">
                </div>
                <div class="form-group id-016">
                  <input type="tel" class="form-input id-017" placeholder="PHONE NUMBER">
                </div>
              </form>
            </div>

          </div>
          <div class="help">
            <div class="sub-title">
              Help Content
            </div>
            <hr>
            <div class="txt">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In commodi animi vitae vel, et ratione tenetur
                nemo voluptatem, laboriosam culpa architecto ut minima deleniti. Earum perspiciatis ullam voluptates
                consequuntur rem.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  document.querySelector('.mp-menubar').addEventListener('click', function () {
  // Toggle the left property of the list
  const list = document.querySelector('.my-box-card .list');
  if (list.style.left === '0px') {
    list.style.left = '-100%';  // Slide out
  } else {
    list.style.left = '0';      // Slide in
  }

  // Toggle the icon between the bars and "x"
  const icon = document.querySelector('.mp-menubar i');
  if (icon.classList.contains('fa-bars')) {
    icon.classList.remove('fa-bars');
    // icon.textContent = 'x';  // Change to 'x'
    icon.classList.add('fa-xmark');
  } else {
    icon.classList.add('fa-solid', 'fa-bars'); // Restore bars icon
    
    icon.classList.remove('fa-xmark');
  }
});

</script>

<?php
include './footer.php';
?>