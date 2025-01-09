 <!-- Jquery Js -->
 <script src="{{ asset('/') }}website/assets/js/vendor/bootstrap.min.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/jquery-3.6.3.min.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/slick.min.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/jquery-validator.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/jquery.countdown.min.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/countryCode.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/picker.js"></script>
 <script src="{{ asset('/') }}website/assets/js/vendor/picker.date.js"></script>
 <script src="{{ asset('/') }}website/assets/js/date.js"></script>
 <script src="{{ asset('/') }}website/assets/js/app.js"></script>

 <script>
     $(document).ready(function() {
         $('#searchInput').on('keyup', function() { // #product-search = product name input field it
             var query = $(this).val();
             if (query.length > 0) {
                 $.ajax({
                     url: "{{ route('ajax-search') }}", // URL to the search route
                     method: 'GET',
                     data: {
                         query: query
                     },
                     success: function(data) {
                         var resultsList = $('#results-list'); // #results-list = ul id
                         resultsList.empty(); // Clear previous results

                         if (data.length > 0) {
                             data.forEach(function(product) {
                                 resultsList.append(`
                                    <a href="/product-detail/${product.id}">
                                        <li class="result-item">
                                            <img src="${product.image}"
                                                 alt="${product.name}"
                                                 style="width: 50px; height: 50px;">
                                            <div class="result-details">
                                                <span class="product-name">${product.name}</span>
                                                <span class="product-price">TK. ${product.selling_price}</span>
                                            </div>
                                        </li>
                                    </a>
                                `);
                             });
                             $('#search-results').show(); // Show the dropdown with results // #search-results =div above of ul and it contains the result
                         } else {
                             resultsList.append('<li>No products found</li>');
                             $('#search-results').show();
                         }
                     }
                 });
             } else {
                 $('#search-results').hide(); // Hide the dropdown if query is too short
             }
         });

         // Hide the search results if clicking outside the search box or dropdown
         $(document).click(function(e) {
             if (!$(e.target).closest('.search-container').length) { // .search-container = main full search container
                 $('#search-results').hide();
             }
         });
     });
 </script>