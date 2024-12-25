  <!-- Header Menu Start -->
  <header>
      <div class="header-section">
          <div class="header-top bg-color-primary">
              <div class="header-start d-lg-block d-none">
                  <p class="fw-500 dark">Welcome to Worldwide Adonis</p>
              </div>
              <div class="header-end">
                  <a href="contact.html" class="top-bar-links d-sm-flex d-none text-dark align-items-center gap-2">
                      <i class="fa-solid fa-location-dot"></i>
                      <div>
                          <p class="fw-500 text-dark">Store Locator</p>
                      </div>
                  </a>
                  <a href="tracking.html" class="top-bar-links d-flex align-items-center text-dark gap-2">
                      <i class="fa-solid fa-truck-fast"></i>
                      <p class="fw-500 text-dark">Order Tracking</p>
                  </a>
                  <div class="d-sm-block d-none">
                      <a href="about.html"><span class="fw-500 top-bar-links text-dark">FAQs</span></a>
                  </div>
                  <!-- <div class="vr-line d-sm-block d-none"></div> -->
                  <div class="drop-container">
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
                  </div>
                  <div class="drop-container">
                      <div class="wrapper-dropdown Text-dark" id="dropdown2">
                          <span class="selected-display" id="destination2">USD</span>
                          <svg id="drp-arrow2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                              <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                          </svg>
                          <ul class="topbar-dropdown bg-lightest-gray">
                              <li class="item dark-black">USD</li>
                              <li class="item dark-black">AED</li>
                              <li class="item dark-black">EUR</li>
                              <li class="item dark-black">GBP</li>
                          </ul>
                      </div>
                  </div>
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
                                  <li class="item dark-gray">Digital & Electronics</li>
                                  <li class="item dark-gray">Camera & Photo</li>
                                  <li class="item dark-gray">Computer Hardware</li>
                                  <li class="item dark-gray">Gamepad & Console</li>
                                  <li class="item dark-gray">Headphone & Speaker</li>
                                  <li class="item dark-gray">Laptop & Computer</li>
                                  <li class="item dark-gray">Smartphone & Tablet</li>
                                  <li class="item dark-gray">TV & Audio</li>
                                  <li class="item dark-gray">Watches & Eyewear</li>
                                  <li class="item dark-gray">Fan & AC</li>
                              </ul>
                          </div>
                      </div>
                      <div class="vr-line vr-line-2"></div>
                      <form action="https://uiparadox.co.uk/templates/gadgetize/index.html" method="post">
                          <div class="input-field">
                              <input type="text" name="search" id="searchInput" class="form-control"
                                  placeholder="Search for products..." />
                              <button type="submit" class="cus-btn">Search</button>
                          </div>
                      </form>
                  </div>
                  <div class="header-buttons">
                      <a href="register.html" class="button-block align-items-sm-unset align-items-end">
                          <img src="{{ asset('/') }}website/assets/media/users/user-3.png" alt=""
                              class="user" />
                          <div>
                              <p>Login</p>
                              <h6>Account</h6>
                          </div>
                      </a>
                      <a href="wishlist.html" class="button-block d-sm-flex d-none">
                          <img src="{{ asset('/') }}website/assets/media/icons/wishlist.png" alt="" />
                      </a>
                      <a href="#" class="button-block d-sm-flex d-none cart-button">
                          <img src="{{ asset('/') }}website/assets/media/icons/cart.png" alt="" />
                          <div>
                              <p>Your Cart</p>
                              <h6>$120.00</h6>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="mixin-container d-xl-none d-flex">
                  <div class="drop-container">
                      <div class="wrapper-dropdown" id="dropdown4">
                          <span class="selected-display black fw-500" id="destination4">All Categories</span>
                          <svg id="drp-arrow4" width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg" class="arrow transition-all ml-auto rotate-180">
                              <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <ul class="topbar-dropdown bg-lightest-gray box-shadow-1">
                              <li class="item dark-black">Digital & Electronics</li>
                              <li class="item dark-black">Camera & Photo</li>
                              <li class="item dark-black">Computer Hardware</li>
                              <li class="item dark-black">Gamepad & Console</li>
                              <li class="item dark-black">Headphone & Speaker</li>
                              <li class="item dark-black">Laptop & Computer</li>
                              <li class="item dark-black">Smartphone & Tablet</li>
                              <li class="item dark-black">TV & Audio</li>
                              <li class="item dark-black">Watches & Eyewear</li>
                              <li class="item dark-black">Fan & AC</li>
                          </ul>
                      </div>
                  </div>
                  <div class="vr-line vr-line-2"></div>
                  <div class="input-field">
                      <input type="text" name="search" id="searchInput2" class="form-control"
                          placeholder="Search for products..." />
                      <button type="submit" class="cus-btn">Search</button>
                  </div>
              </div>

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

                                      <span class="all-category-list-item"><a href="javascript:;"
                                              class="all-category-list-link d-flex align-items-center justify-content-between">Laptop
                                              & Computer<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                          <span class="category-second-list">
                                              <span class="sub-menu-main-wrapper">
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Brands</span>
                                                          <span class="category-second-item"><a href="#">Apple
                                                              </a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Dell</a></span>
                                                          <span class="category-second-item"><a href="#">Asus
                                                              </a></span>
                                                          <span class="category-second-item"><a href="#">Acer
                                                              </a></span>
                                                          <span class="category-second-item"><a href="#">MSI
                                                              </a></span>
                                                          <span class="category-second-item"><a href="#">Lenovo
                                                              </a></span>
                                                      </span>
                                                  </span>
                                              </span>
                                          </span>
                                      </span>
                                      <span class="all-category-list-item"><a href="javascript:;"
                                              class="all-category-list-link d-flex align-items-center justify-content-between">Computer
                                              Hardware<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                          <span class="category-second-list">
                                              <span class="sub-menu-main-wrapper">
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Hardware</span>
                                                          <span class="category-second-item"><a href="#">CPU,
                                                                  Processor </a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Motherboard</a></span>
                                                          <span class="category-second-item"><a href="#">RAM,
                                                                  Memory</a></span>
                                                          <span class="category-second-item"><a href="#">VGA,
                                                                  Graphic Card </a></span>
                                                          <span class="category-second-item"><a href="#">PSU,
                                                                  Power Supply</a></span>
                                                          <span class="category-second-item"><a href="#">Cooling
                                                                  Systems</a></span>
                                                      </span>
                                                      <span class="category-second-list-ul list-unstyled">
                                                          <span class="dark-black fw-500 mb-16">Others</span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Security</a></span>
                                                          <span class="category-second-item"><a href="#">Barcode
                                                                  Scanner</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Attendence Machines</a></span>
                                                          <span class="category-second-item"><a href="#">Bill
                                                                  Counters</a></span>
                                                      </span>
                                                  </span>
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Peripherals</span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Mointer</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Mouse</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Keyboard</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Microphone</a></span>
                                                      </span>
                                                  </span>
                                              </span>
                                              <span class="img-product-menu v-2">
                                                  <span class="image-content">
                                                      <span class="d-block h6 fw-400 white mb-4p">LAPTOP</span>
                                                      <span class="d-block h6 fw-500 white mb-24">MACBOOK
                                                          M1</span>
                                                      <span class="d-block text-16 white mb-4p">Just from:</span>
                                                      <span class="d-block h4 color-ter mb-32">$340.99</span>
                                                      <a href="shop-list-1.html" class="cus-btn-3 sec">Shop
                                                          Now</a>
                                                  </span>
                                              </span>
                                          </span>
                                      </span>
                                      <span class="all-category-list-item"><a href="shop-grid-2.html"
                                              class="all-category-list-link">Camera & Photo</a></span>
                                      <span class="all-category-list-item"><a href="javascript:;"
                                              class="all-category-list-link d-flex align-items-center justify-content-between">Smartphone
                                              & Tablets<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                          <span class="category-second-list">
                                              <span class="sub-menu-main-wrapper">
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Brands</span>
                                                          <span class="category-second-item"><a href="#">Apple
                                                              </a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Samsung</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Xiaomi</a></span>
                                                          <span class="category-second-item"><a href="#">Oppo
                                                              </a></span>
                                                          <span class="category-second-item"><a href="#">
                                                                  Huawei</a></span>
                                                          <span class="category-second-item"><a href="#">Nokia
                                                              </a></span>
                                                          <span class="category-second-item"><a href="#">Vivo
                                                              </a></span>
                                                      </span>

                                                      <span class="category-second-list-ul list-unstyled">
                                                          <span class="dark-black fw-500 mb-16">Display
                                                              Sizes</span>
                                                          <span class="category-second-item"><a href="#">Up to 6
                                                                  Inches</a></span>
                                                          <span class="category-second-item"><a href="#">6
                                                                  Inch - 8 Inch</a></span>
                                                          <span class="category-second-item"><a href="#">8
                                                                  Inch - 10 Inch</a></span>
                                                      </span>
                                                  </span>
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Conditions</span>
                                                          <span class="category-second-item"><a href="#">All
                                                                  New</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Renewed</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Refurbished</a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Used</a></span>
                                                      </span>
                                                      <span class="category-second-list-ul list-unstyled">
                                                          <span class="dark-black fw-500 mb-16">Prices</span>
                                                          <span class="category-second-item"><a href="#">Up to
                                                                  $200</a></span>
                                                          <span class="category-second-item"><a href="#">$500 to
                                                                  $1000</a></span>
                                                          <span class="category-second-item"><a href="#">$1000
                                                                  to $2000</a></span>
                                                          <span class="category-second-item"><a href="#">$2000
                                                                  to $3000</a></span>
                                                          <span class="category-second-item"><a href="#">$3000
                                                                  to $4000</a></span>
                                                          <span class="category-second-item"><a href="#">$4000
                                                                  to $5000</a></span>
                                                      </span>
                                                  </span>
                                              </span>
                                              <span class="img-product-menu v-3">
                                                  <span class="image-content">
                                                      <span class="d-block h6 fw-400 white mb-4p">MOBIME</span>
                                                      <span class="d-block h6 fw-500 white mb-24">Mobile
                                                          Phone</span>
                                                      <span class="text-16 white mb-4p">Just from:</span>
                                                      <span class="d-block h4 color-ter mb-32">$500.99</span>
                                                      <a href="shop-list-1.html" class="cus-btn-3 sec">Shop
                                                          Now</a>
                                                  </span>
                                              </span>
                                          </span>
                                      </span>
                                      <span class="all-category-list-item"><a href="javascript:;"
                                              class="all-category-list-link d-flex align-items-center justify-content-between">TV
                                              & Audio<i class="fas fa-angle-right" aria-hidden="true"></i></a>
                                          <span class="category-second-list">
                                              <span class="sub-menu-main-wrapper">
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled mb-40">
                                                          <span class="dark-black fw-500 mb-16">Brands</span>
                                                          <span class="category-second-item"><a href="#">Sony
                                                              </a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">LG</a></span>
                                                          <span class="category-second-item"><a href="#">Samsung
                                                              </a></span>
                                                          <span class="category-second-item"><a
                                                                  href="#">Panasonic</a></span>
                                                          <span class="category-second-item"><a href="#">Toshiba
                                                              </a></span>
                                                      </span>
                                                      <span class="category-second-list-ul list-unstyled">
                                                          <span class="dark-black fw-500 mb-16">Department</span>
                                                          <span class="category-second-item"><a href="#">Smart
                                                                  TVs</a></span>
                                                          <span class="category-second-item"><a href="#">LED
                                                                  TVs</a></span>
                                                          <span class="category-second-item"><a href="#">Curved
                                                                  TVs</a></span>
                                                          <span class="category-second-item"><a href="#">OLED
                                                                  TVs</a></span>
                                                          <span class="category-second-item"><a href="#">Plasma
                                                                  TVs</a></span>
                                                          <span class="category-second-item"><a href="#">Smart
                                                                  TVs 4K</a></span>
                                                      </span>
                                                  </span>
                                                  <span class="wrapper-1">
                                                      <span class="category-second-list-ul list-unstyled">
                                                          <span class="dark-black fw-500 mb-16">Prices</span>
                                                          <span class="category-second-item"><a href="#">Up to
                                                                  $200</a></span>
                                                          <span class="category-second-item"><a href="#">$500 to
                                                                  $1000</a></span>
                                                          <span class="category-second-item"><a href="#">$1000
                                                                  to $2000</a></span>
                                                          <span class="category-second-item"><a href="#">$2000
                                                                  to $3000</a></span>
                                                          <span class="category-second-item"><a href="#">$3000
                                                                  to $4000</a></span>
                                                          <span class="category-second-item"><a href="#">$4000
                                                                  to $5000</a></span>
                                                          <span class="category-second-item"><a href="#">$5000
                                                                  to $6000</a></span>
                                                      </span>
                                                  </span>
                                              </span>
                                              <span class="img-product-menu v-4">
                                                  <span class="image-content">
                                                      <span class="d-block h6 fw-400 white mb-4p">HEADPHONE</span>
                                                      <span class="d-block h6 fw-500 white mb-24">Bass
                                                          Headphones</span>
                                                      <span class="text-16 white mb-4p">Just from:</span>
                                                      <span class="d-block h4 color-ter mb-32">$180.00</span>
                                                      <a href="shop-list-1.html" class="cus-btn-3 sec">Shop
                                                          Now</a>
                                                  </span>
                                              </span>
                                          </span>
                                      </span>
                                      <span class="all-category-list-item"><a href="shop-grid-3.html"
                                              class="all-category-list-link">Home & Electronic</a></span>
                                      <span class="all-category-list-item"><a href="shop-grid-4.html"
                                              class="all-category-list-link">Headphone & Speakers</a>
                                      </span>
                                      <span class="all-category-list-item"><a href="shop-grid-sidebar-1.html"
                                              class="all-category-list-link">Watches & Eyewear</a></span>
                                      <span class="all-category-list-item"><a href="shop-grid-sidebar-2.html"
                                              class="all-category-list-link">Gamepad & Console</a></span>
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
                                  <li>
                                      <a href="{{ route('blog') }}"
                                          class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">Blogs</a>
                                  </li>
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
