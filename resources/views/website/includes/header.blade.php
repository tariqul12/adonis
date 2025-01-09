  <!-- Header Menu Start -->
  <style>
      /* Adjust container width */
      .input-field {
          position: relative;
          width: 550px !important;
          /* Adjust as needed */
      }

      @media screen {
          .input-field {
              width: 300px !important;
              /* Adjust as needed */
          }
      }

      /* Dropdown styling */
      .dropdown-content {
          position: absolute;
          top: 100%;
          left: 0;
          right: 0;
          background-color: #fff;
          border: 1px solid #ddd;
          box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
          z-index: 10;
          max-height: 400px;
          /* Adjust height */
          overflow-y: auto;
      }

      ul#results-list {
          list-style: none;
          margin: 0;
          padding: 0;
      }

      /* Individual result styling */
      .result-item {
          display: flex;
          align-items: center;
          /* Center image and text vertically */
          padding: 10px 15px;
          /* Add spacing around items */
          border-bottom: 1px solid #f0f0f0;
          transition: background-color 0.3s;
      }

      .result-item:hover {
          background-color: #f9f9f9;
      }

      .result-img {
          width: 100px;
          /* Larger image width */
          height: 100px;
          /* Larger image height */
          object-fit: cover;
          margin-right: 10px;
          /* Reduce spacing between image and text */
          border-radius: 6px;
          border: 1px solid #ddd;
      }

      .result-details {
          margin-left: 25px;
      }

      .result-title {
          font-size: 16px;
          /* Slightly larger font */
          font-weight: 500;
          margin: 0 0 5px 0;
          color: #333;
          line-height: 1.4;
          /* Improved readability */
      }

      .result-price {
          font-size: 14px;
          /* Larger price font */
          color: #555;
          margin: 0;
      }
  </style>
  <header>
      <div class="header-section">
          <div class="header-top bg-color-primary">
              <div class="header-start d-lg-block d-none">

                  <a href="{{ route('contact') }}"
                      class="top-bar-links d-sm-flex d-none text-dark align-items-center gap-2">
                      <i class="fa-solid fa-location-dot"></i>
                      <div>

                          <p class="fw-500 text-dark">{{ $companyInfo->company_address }}</p>
                      </div>
                  </a>
              </div>
              <div class="header-end">
                  <i class="fas fa-envelope"></i>
                  <p class="fw-500 dark">{{ $companyInfo->contact_email }}</p>
                  <a href="#" class="top-bar-links d-flex align-items-center text-dark gap-2">
                      <i class="fas fa-phone-alt"></i>
                      <p class="fw-500 text-dark">{{ $companyInfo->contact_phone }}</p>
                  </a>
                  <!-- <div class="vr-line d-sm-block d-none"></div> -->
                  {{-- <div class="drop-container">
                      <div class="wrapper-dropdown text-dark" id="dropdown">
                          <span class="selected-display" id="destination">English</span>
                          <svg id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                              <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                          </svg>
                          <ul class="topbar-dropdown bg-lightest-gray">
                              <li class="item dark-black">English</li>
                              <li class="item dark-black">Spanish</li>
                              <li class="item dark-black">Italian</li>
                              <li class="item dark-black">Arabic</li>
                          </ul>
                      </div>
                  </div> --}}
              </div>
          </div>
          <div class="container-fluid">
              <div class="header-center">
                  <a href="{{ route('home') }}" class="header-logo">
                      <img width="120" src="{{ asset('/') }}website/assets/media/logo-2.png" alt="" />
                  </a>
                  <div class="mixin-container d-xl-flex d-none">
                      <div class="drop-container">
                          <div class="wrapper-dropdown" id="dropdown3">
                              <span class="selected-display black fw-500" id="destination3">All Categories</span>
                              <svg id="drp-arrow3" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                                  <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <ul class="topbar-dropdown bg-lightest-gray box-shadow-1">
                                  @foreach ($categories as $category)
                                  <li class="item dark-gray"><a
                                          href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                  </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                      <div class="vr-line vr-line-2"></div>
                      <form action="#" method="post">
                          <div class="input-field search-container">
                              <input type="text" name="search" id="searchInput" class="form-control"
                                  placeholder="Search for products..." />
                              <!-- <button type="submit" class="cus-btn">Search</button> -->
                              <div id="search-results" class="dropdown-content" style="display: none;">
                                  <ul id="results-list"></ul>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="header-buttons">
                      @if (Session::has('customer_id'))
                      <a href="{{ route('customer.dashboard') }}"
                          class="button-block align-items-sm-unset align-items-end">
                          <img src="{{ asset('/') }}website/assets/media/users/user-3.png" alt=""
                              class="user" />
                          <div>
                              <p>{{ Session('customer_name') }}</p>
                              <h6>Account</h6>
                          </div>
                      </a>
                      @else
                      <a href="{{ route('customer.login') }}"
                          class="button-block align-items-sm-unset align-items-end">
                          <img src="{{ asset('/') }}website/assets/media/users/user-3.png" alt=""
                              class="user" />
                          <div>
                              <p>Login</p>
                              <h6>Account</h6>
                          </div>
                      </a>
                      @endif
                      <a href="#" class="button-block d-sm-flex wishlist-button">
                          <i class="fa-regular fa-heart" style="font-size: 24px;"></i>
                          <span class="badge">2</span>
                      </a>
                      <a href="#" class="button-block d-sm-flex cart-button">
                          <i class="fa-regular fa-cart-shopping" style="font-size: 24px;"></i>
                          <span class="badge">{{ count(Cart::content()) }}</span>
                      </a>
                  </div>
              </div>
              <!-- <div class="mixin-container d-xl-none d-flex">
                  <div class="drop-container">
                      <div class="wrapper-dropdown" id="dropdown4">
                          <span class="selected-display black fw-500" id="destination4">All Categories</span>
                          <svg id="drp-arrow4" width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                              <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                          </svg>
                          <ul class="topbar-dropdown bg-lightest-gray box-shadow-1">
                              @foreach ($categories as $category)
                              <li class="item dark-black"><a
                                      href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                              </li>
                              @endforeach
                          </ul>
                      </div>
                  </div> -->
              <!-- <div class="vr-line vr-line-2"></div>
                  <div class="input-field">
                      <input type="text" name="search" id="searchInput2" class="form-control"
                          placeholder="Search for products..." />
                      <button type="submit" class="cus-btn">Search</button>
                  </div> -->
              <!-- </div> -->

              <div class="header-bottom-area">
                  <nav class="navigation d-flex align-items-center justify-content-between">
                      <!-- Categories Dropdown -->
                      <div class="nav-container">
                          <nav class="all-category-nav">
                              <label class="open-menu-all" for="open-menu-all">
                                  <input class="input-menu-all" id="open-menu-all" type="checkbox"
                                      name="menu-open" />
                                  <span class="all-navigator"><i class="fas fa-bars" aria-hidden="true"></i>
                                      <span>Browse All Categories</span>
                                  </span>
                                  <span class="all-category-list list-unstyled">
                                      @foreach ($categories as $category)
                                      <span class="all-category-list-item position-relative">
                                          <a href="{{ route('category', $category->id) }}"
                                              class="all-category-list-link">
                                              {{ $category->name }}
                                          </a>
                                          @if ($category->subCategories && $category->subCategories->count())
                                          <span class="dropdown-menu">
                                              @foreach ($category->subCategories as $subCategory)
                                              <a href="{{ route('sub-category', $subCategory->id) }}"
                                                  class="dropdown-item">
                                                  {{ $subCategory->name }}
                                              </a>
                                              @endforeach
                                          </span>
                                          @endif
                                      </span>
                                      @endforeach
                                  </span>
                              </label>
                          </nav>
                      </div>
                      <!-- Categories Dropdown -->
                      <div class="menu-button-right">
                          <div class="main-menu__nav">
                              <ul class="main-menu__list">
                                  <li>
                                      <a href="{{ route('home') }}"
                                          class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home
                                          Page</a>
                                  </li>
                                  <li>
                                      <a href="{{ route('about') }}"
                                          class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About
                                          Us</a>
                                  </li>
                                  <li>
                                      <a href="{{ route('shop') }}"
                                          class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}">Shop</a>
                                  </li>
                                  <!-- <li>
                                      <a href="{{ route('blog') }}"
                                          class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">Blogs</a>
                                  </li> -->
                                  <li>
                                      <a href="{{ route('contact') }}"
                                          class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact
                                          Us</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="main-menu__right">
                          <div class="d-sm-flex d-none gap-2">
                              <p class="black fw-500">Sale $20 off Your First Order</p>
                          </div>
                          <a href="#" class="main-menu__toggler mobile-nav__toggler">
                              <i class="fa-regular fa-bars-sort"></i>
                              Menu
                          </a>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- Header Menu End -->