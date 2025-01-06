<!-- All CSS files -->
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/font-awesome.css" />
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/slick-theme.css" />
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/slick-slider.css" />
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/country-code.css" />
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/classic.css">
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/classic.date.css">
<link rel="stylesheet" href="{{ asset('/') }}website/assets/css/app.css" />
<style>
    .all-category-list-item {
        display: inline-block;
        position: relative;
        margin-right: 10px;
    }

    .all-category-list-link {
        text-decoration: none;
        padding: 5px 10px;
        display: inline-block;
        color: #333;
        /* Adjust as needed */
        font-weight: 500;
    }

    .all-category-list-item .dropdown-menu {
        display: none;
        position: absolute;
        top: 0;
        /* Aligns the top of the dropdown with the category */
        left: 100%;
        /* Places the dropdown to the right of the category */
        background: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 10;
        padding: 10px;
        border-radius: 4px;
        min-width: 150px;
    }

    .all-category-list-item:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: #555;
        /* Adjust as needed */
        white-space: nowrap;
    }

    .dropdown-item:hover {
        background-color: #f8f8f8;
        /* Adjust hover effect */
        color: #000;
        /* Adjust as needed */
    }

    .custom-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        font-size: 16px;
        color: #141516;
    }

    .custom-select:focus {
        border-color: #141516;
        outline: none;
    }

    .custom-select option {
        background-color: #fff;
        color: #141516;
    }

    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .cart-table th,
    .cart-table td {
        padding: 10px;
        text-align: left;
    }

    .product-detail-box {
        display: flex;
        align-items: center;
    }

    .cus-checkBox input {
        margin-right: 10px;
    }

    .cus-checkBox label {
        display: none;
    }

    .quantity-controller input {
        width: 35px;
        text-align: center;
    }

    .quantity-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .number {
        width: 50px;
        text-align: center;
    }

    .cart-item-block {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .cart-item-block .img-block img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .checkout-box {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .checkout-title h5 {
        font-size: 24px;
        font-weight: 600;
    }
</style>
