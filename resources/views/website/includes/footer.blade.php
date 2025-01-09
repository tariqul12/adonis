 <!-- Benefits Start -->
 <footer>
     <div class="container-fluid">
         <div class="benefits">
             <div class="row justify-content-center benefits-wrapper">
                 <div class="col-xxl-10 col-xl-12">
                     <div class="row row-gap-3">
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-1-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Easy Returns</p>
                                     <p class="light-gray">From handpicked sellers</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-2-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Fast Delivery</p>
                                     <p class="light-gray">Delivery in 24 hours max!</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-3-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Safe Payment</p>
                                     <p class="light-gray">100% secure payment</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-4-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Online Discount</p>
                                     <p class="light-gray">Add multi-buy discount</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-5-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Need Help</p>
                                     <p class="light-gray">Dedicated 24/7 Support</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-2 col-md-4 col-6">
                             <div class="benefit-block">
                                 <div class="image-box mb-12">
                                     <img src="{{ asset('/') }}website/assets/media/icons/icon-6-sm.png"
                                         alt="" />
                                 </div>
                                 <div class="content-box">
                                     <p class="fw-500 mb-4p">Curated Items</p>
                                     <p class="light-gray">From handpciked sellers</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="hr-line"></div>
         <div class="footer-wrapper pt-40 mb-32">
             <div class="store-desc">
                 <a href="index.html"><img src="{{ asset('/') }}website/assets/media/logo-2.png" alt=""
                         class="mb-16" /></a>
                 <p class="light-gray mb-xl-32 mb-lg-0 mb-32">
                     Lorem ipsum dolor sit amet consectetur. Eu dolor faucibus
                     <br />
                     sit fames elit ac. Hendrerit ultrices morbi faucibus.
                 </p>
                 <p class="d-xl-none d-lg-block d-none light-gray mb-32">
                     amet consectetur. Eu dolor faucibus <br />
                     sit fames elit ac ultrices morbi faucibus.
                 </p>
                 <a href="tel:123456789" class="d-flex align-items-center gap-3">
                     <div class="icon-box">
                         <i class="fa-solid fa-user-headset"></i>
                     </div>
                     <div>
                         <p class="light-gray mb-4p">Call us 24/7</p>
                         <h5 class="color-primary">{{ $companyInfo->contact_phone }}</h5>
                     </div>
                 </a>
             </div>
             <div class="footer-link-block">
                 <h6 class="fw-600 mb-24">Category</h6>
                 <ul class="list-unstyled m-0">
                     @foreach ($footer_categories as $footer_category)
                         <li class="mb-8">
                             <a href="{{ route('category', ['id' => $footer_category->id]) }}"
                                 class="light-gray">{{ $footer_category->name }}</a>
                         </li>
                     @endforeach
                 </ul>
             </div>
             <div class="footer-link-block">
                 <h6 class="fw-600 mb-24">Quick Link</h6>
                 <ul class="list-unstyled m-0">
                     <li class="mb-8">
                         <a href="{{ route('home') }}" class="light-gray">Home Page</a>
                     </li>
                     <li class="mb-8">
                         <a href="{{ route('about') }}" class="light-gray">About Us</a>
                     </li>
                     <li class="mb-8">
                         <a href="{{ route('shop') }}" class="light-gray">Shop Now</a>
                     </li>
                     <li class="mb-8">
                         <a href="{{ route('customer.login') }}" class="light-gray">Login</a>
                     </li>


                 </ul>
             </div>
             <div class="footer-link-block">
                 <h6 class="fw-600 mb-24">Customer Care</h6>
                 <ul class="list-unstyled m-0">
                     <li class="mb-8">
                         <a href="{{ route('customer.dashboard') }}" class="light-gray">My Account</a>
                     </li>
                     <li class="mb-8">
                         <a href="#" class="light-gray">Track Your Order</a>
                     </li>

                     <li class="mb-8">
                         <a href="{{ route('about') }}" class="light-gray">FAQs</a>
                     </li>
                     <li class="mb-8">
                         <a href="{{ route('customer.register') }}" class="light-gray">Signup</a>
                     </li>

                 </ul>
             </div>
             <div class="footer-link-block">
                 <ul class="list-unstyled mb-16">
                     <li class="mb-12 footer-link">
                         <a href="#" class="d-flex align-items-center gap-2">
                             <div class="img-box">
                                 <i class="fa-regular fa-location-dot"></i>
                             </div>
                             <p class="light-gray">
                                 {{ $companyInfo->company_address }}
                             </p>
                         </a>
                     </li>
                     <li class="mb-12 footer-link">
                         <a href="mailto:info@example.com" class="d-flex align-items-center gap-2">
                             <div class="img-box">
                                 <i class="fa-regular fa-envelope"></i>
                             </div>
                             <p class="color-primary">{{ $companyInfo->contact_email }}</p>
                         </a>
                     </li>
                 </ul>
                 <p class="fw-500 mb-16">Follow Us!</p>
                 <ul class="list-unstyled social-link">
                     <li>
                         <a target="_blank" href="{{ $companyInfo->instagram_link }}">
                             <i class="fa-brands fa-instagram"></i>
                         </a>
                     </li>
                     <li>
                         <a target="_blank" href="{{ $companyInfo->facebook_link }}">
                             <i class="fa-brands fa-facebook-f"></i>
                         </a>
                     </li>
                     <li>
                         <a target="_blank" href="{{ $companyInfo->twitter_link }}">
                             <i class="fa-brands fa-x-twitter"></i>
                         </a>
                     </li>
                     <li>
                         <a target="_blank" href="{{ $companyInfo->linkedin_link }}">
                             <i class="fa-brands fa-linkedin-in"></i>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="hr-line"></div>
         <div class="footer-bottom-bar py-24">
             <p class="light-gray text-sm-left text-center">
                 @2024 All Rights Copyright
                 <a href="https://bsdbd.com/" class="color-primary">BSDBD</a>.
                 <!-- Design & Developed By <span class="color-primary"> </span> -->
             </p>
             <div class="payment-cards d-flex align-items-center gap-16">
                 <p class="fw-500 light-gray d-sm-flex d-none">
                     Payment Mathods:
                 </p>
                 <div class="card-block">
                     <img src="{{ asset('/') }}website/assets/media/icons/card-1.png" alt="" />
                 </div>
                 <div class="card-block">
                     <img src="{{ asset('/') }}website/assets/media/icons/card-4.png" alt="" />
                 </div>
                 <div class="card-block">
                     <img width="30px" src="{{ asset('/') }}website/assets/media/icons/sslcsommerz1.png"
                         alt="" />
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Benefits End -->
