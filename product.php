<?php
include './header.php';
?>

<main class="main">
  <div class="product-container">
    <!-- Sidebar for menu -->
    <div class="filter-sidebar" id="filterSidebar">
      <div class="sidebar">
        <div class="titlebar">
          <h3>Filters</h3>
          <span class="clear-all">Clear All</span>
          <span class="close-btn" id="filter-close-btn">x</span>
        </div>
        <!-- Celebrity Filter -->
        <div class="filter-category">
          <h4 class="toggle-icon">Celebrity
            <i class="fa-solid fa-angle-up"></i>
            <i class="fa-solid fa-angle-down"></i>
          </h4>
          <ul>
            <li>
              <label>
                Celebrity 1
                <input type="radio" name="celebrity" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Celebrity 2
                <input type="radio" name="celebrity" />
                <span></span>
              </label>
            </li>
          </ul>
        </div>

        <!-- Category Filter -->
        <div class="filter-category active">
          <h4 class="toggle-icon">Category
            <i class="fa-solid fa-angle-up"></i>
            <i class="fa-solid fa-angle-down"></i>
          </h4>
          <ul>
            <li>
              <label>
                Accessories
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Activewear
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Bags & Handbags
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Blazers
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Costumes
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Dresses
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Jackets
                <input type="radio" name="category" />
                <span></span>
              </label>
            </li>
          </ul>
        </div>

        <!-- Rent or Buy It Filter -->
        <div class="filter-category">
          <h4 class="toggle-icon">Rent It or Buy It
            <i class="fa-solid fa-angle-up"></i>
            <i class="fa-solid fa-angle-down"></i>
          </h4>
          <ul>
            <li>
              <label>
                Rent
                <input type="radio" name="rent" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                Buy
                <input type="radio" name="rent" />
                <span></span>
              </label>
            </li>
          </ul>
        </div>

        <!-- Price Filter -->
        <div class="filter-category">
          <h4 class="toggle-icon">Price
            <i class="fa-solid fa-angle-up"></i>
            <i class="fa-solid fa-angle-down"></i>
          </h4>
          <ul>
            <li>
              <label>
                $0 - $50
                <input type="radio" name="price" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                $51 - $100
                <input type="radio" name="price" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                $101 - $200
                <input type="radio" name="price" />
                <span></span>
              </label>
            </li>
            <li>
              <label>
                $201+
                <input type="radio" name="price" />
                <span></span>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="product-cards-container" id="productCards">
      <div class="filter-bar">
        <button class="open-filterbar"><i class="fa-solid fa-arrow-down-wide-short"></i></button>
        <div class="search-input">
          <input type="text" id="customSearchInput" class="search-bar" placeholder="Search..">


        </div>
        <div class="result-count">
          162 results
        </div>

      </div>
      <div class="selected-filters">
        <button class="filter-tag">Activewear <span class="remove-filter">x</span></button>
        <button class="filter-tag">Blazers <span class="remove-filter">x</span></button>
        <button class="filter-tag">Costumes <span class="remove-filter">x</span></button>
      </div>
      <div class="product-cards" id="productCards">
        <div class="product-flex" id="uniqueProductflex">
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 1" class="product-image">
            <p class="product-name">Arcina Ori</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <div class="product-item">
            <img src="https://via.placeholder.com/200" alt="Product 2" class="product-image">
            <p class="product-name">Miu Miu Wander wicker</p>
            <p class="product-price">Rent: $68</p>
          </div>
          <!-- Add more product items as needed -->
        </div>
      </div>

    </div>

  </div>
</main>

<script>
  // Toggle the collapse/expand feature
  const filterCategories = document.querySelectorAll(".filter-category h4");

  filterCategories.forEach((header) => {
    header.addEventListener("click", () => {
      const category = header.parentElement;
      category.classList.toggle("active");
    });
  });

  // Open filtersidebar and show overlay when cart button is clicked
  openFilterbar.addEventListener("click", () => {
    filterSidebar.style.right = "0";
    overlay.style.display = "block";
  });
  closeFilterbar.addEventListener("click", () => {
    filterSidebar.style.right = "-100%";
    overlay.style.display = "none";
  });

  //search
  document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector('.search-bar');
    const selectedFiltersContainer = document.querySelector('.selected-filters');

    // Event listener for pressing "Enter" in the search input
    searchInput.addEventListener('keypress', function (e) {
      if (e.key === 'Enter' && searchInput.value.trim() !== '') {
        addFilter(searchInput.value.trim());
        searchInput.value = ''; // Clear the search input after adding the filter
      }
    });

    // Function to add a filter tag
    function addFilter(keyword) {
      const filterTag = document.createElement('button');
      filterTag.classList.add('filter-tag');
      filterTag.innerHTML = `${keyword} <span class="remove-filter">x</span>`;

      // Append the filter tag to the container
      selectedFiltersContainer.appendChild(filterTag);

      // Add event listener for removing the filter
      filterTag.querySelector('.remove-filter').addEventListener('click', function () {
        filterTag.remove(); // Remove the filter tag
      });
    }
  });

</script>

<?php
include './footer.php';
?>