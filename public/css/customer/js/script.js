// Login module
$(window).on('load', function() {
    if (sessionStorage.getItem('logged')) {
        let loged = JSON.parse(sessionStorage.getItem('logged'));
        $('.openG').before('<div class="login animate__animated animate__fadeInDown">' +
            '<span style="margin-right: 3px;"> ' + loged.userName + '  </span>' +
            '<a href="logout.html" id="logout" class="text-primary"> - Logout</a>' +
            '</div>');
    } else {
        $('.openG').before('<div class="login animate__animated animate__fadeInDown">' +
            '<i class="fas fa-user fa-lg" style="margin-right: 3px;"></i>' +
            '<a href="login.html" id="logout" class="text-primary"> - Login</a>' +
            '</div>');
    }
});
(function($) {
    "use strict";
    // Preloader
    $(window).on("load", function() {

        // todo like function
        $(".preview-meta ul li:nth-child(2) ").on("click", "a", function(event) {
            event.preventDefault();
            $(this).children().toggleClass("red");
        });

        $("#preloader").fadeOut("slow", function() {
            $(this).remove();
        });
        // $('.top-header').slideDown('slow');
        // $('.menu').slideDown('slow');
        // $('.mobile-nav').slideDown('slow');
    });

    // e-commerce touchspin
    $('input[name="quantity"]').TouchSpin();

    // Video Lightbox
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    // Count Down JS
    $("#simple-timer").syotimer({
        year: 2019,
        month: 5,
        day: 9,
        hour: 20,
        minute: 30,
    });

    /* --------------------------- navbar fixed scroll -------------------------- */
    var height = $(".top-header").height();
    var heightScroll = height;
    $(window).scroll(function() {
        if ($(this).scrollTop() > heightScroll) {
            $(".menu").addClass("navbar-fixed-top");
            $(".menu").css("background-color", "white");
            $(".menu").css("box-shadow", "1px 1px 10px gray");
            $(".mobile-nav").addClass("navbar-fixed-top");
            $(".mobile-nav").css("box-shadow", "1px 1px 10px gray");
            $(".mobile-nav-brand").show();
            $(".navbar-brand").show();
        } else {
            $(".menu").removeClass("navbar-fixed-top");
            $(".menu").css("box-shadow", "none");
            $(".mobile-nav").css("box-shadow", "none");
            $(".mobile-nav").removeClass("navbar-fixed-top");
            $(".mobile-nav-brand").hide();
            $(".navbar-brand").hide();
        }
    });

    /* ---------------------------- navbar for mobile --------------------------- */
    $(".vg-nav").vegasMenu();

    /* -------------------------------- carousel -------------------------------- */
    $('#myCarousel').carousel({
        interval: 4000
    });


    // Revolution Slider Init
    var tpj = jQuery;
    var revapi26;
    tpj(document).ready(function() {
        if (tpj("#home_slider").revolution === undefined) {
            revslider_showDoubleJqueryError("#home_slider");
        } else {
            revapi26 = tpj("#home_slider")
                .show()
                .revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 4000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false,
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_under: 778,
                            hide_onleave: false,
                            tmp: "<div class='tp-arr-allwrapper'><div class='tp-arr-imgholder'></div></div>",
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "bullet-bar",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: "",
                        },
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 220],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [
                            5,
                            10,
                            15,
                            20,
                            25,
                            30,
                            35,
                            40,
                            45,
                            46,
                            47,
                            48,
                            49,
                            50,
                            51,
                            55,
                        ],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    },
                });
        }
    }); /*ready*/

    /* ---------------------------- shopping cart js ---------------------------- */
    $(document).ready(function() {
        $(".add-to-cart").click(function(e) {
            $(".cart-count").hide();
            $(".cart-count").show(200);
        });
        var shoppingCart = (function() {
            // =============================
            // Private methods and propeties
            // =============================
            var cart = [];

            // Constructor
            function Item(name, price, count, img) {
                this.name = name;
                this.price = price;
                this.count = count;
                this.img = img;
            }

            // Save cart
            function saveCart() {
                sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
            }

            // Load cart
            function loadCart() {
                cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
            }
            if (sessionStorage.getItem("shoppingCart") != null) {
                loadCart();
            }

            // =============================
            // Public methods and propeties
            // =============================
            var obj = {};

            // Add to cart
            obj.addItemToCart = function(name, price, count, img) {
                for (var item in cart) {
                    if (cart[item].name === name) {
                        cart[item].count++;
                        saveCart();
                        return;
                    }
                }
                var item = new Item(name, price, count, img);
                cart.push(item);
                saveCart();
            };
            // Set count from item
            obj.setCountForItem = function(name, count) {
                for (var i in cart) {
                    if (cart[i].name === name) {
                        cart[i].count = count;
                        break;
                    }
                }
            };
            // Remove item from cart
            obj.removeItemFromCart = function(name) {
                for (var item in cart) {
                    if (cart[item].name === name) {
                        cart[item].count--;
                        if (cart[item].count === 0) {
                            cart.splice(item, 1);
                        }
                        break;
                    }
                }
                saveCart();
            };

            // Remove all items from cart
            obj.removeItemFromCartAll = function(name) {
                for (var item in cart) {
                    if (cart[item].name === name) {
                        cart.splice(item, 1);
                        break;
                    }
                }
                saveCart();
            };

            // Clear cart
            obj.clearCart = function() {
                cart = [];
                saveCart();
            };

            // Count cart
            obj.totalCount = function() {
                var totalCount = 0;
                for (var item in cart) {
                    totalCount += cart[item].count;
                }
                return totalCount;
            };

            // Total cart
            obj.totalCart = function() {
                var totalCart = 0;
                for (var item in cart) {
                    totalCart += cart[item].price * cart[item].count;
                }
                return Number(+totalCart.toFixed(2));
            };

            // List cart
            obj.listCart = function() {
                var cartCopy = [];
                for (var i in cart) {
                    var item = cart[i];
                    var itemCopy = {};
                    for (var p in item) {
                        itemCopy[p] = item[p];
                    }
                    itemCopy.total = Number(item.price * item.count).toFixed(0);
                    cartCopy.push(itemCopy);
                }
                return cartCopy;
            };

            // cart : Array
            // Item : Object/Class
            // addItemToCart : Function
            // removeItemFromCart : Function
            // removeItemFromCartAll : Function
            // clearCart : Function
            // countCart : Function
            // totalCart : Function
            // listCart : Function
            // saveCart : Function
            // loadCart : Function
            return obj;
        })();

        // *****************************************
        // Triggers / Events
        // *****************************************
        // Add item
        $(".add-to-cart").click(function(event) {
            event.preventDefault();
            var name = $(this).data("name");
            var price = Number($(this).data("price"));
            var img = $(this).data("img");
            shoppingCart.addItemToCart(name, price, 1, img);
            displayCart();
        });

        // Clear items
        $(".clear-cart").click(function() {
            shoppingCart.clearCart();
            displayCart();
        });

        function displayCart() {
            var cartArray = shoppingCart.listCart();
            var output = "";
            var viewCart = "";
            var orderSumary = "";
            var emptyCart =
                "<div class='container'>" +
                "<div class='row'>" +
                "<div class='col-md-6 col-md-offset-3'>" +
                "<div class='block text-center'>" +
                "<i class='tf-ion-ios-cart-outline'></i>" +
                "<h2 class='text-center'>Your cart is currently empty.</h2>" +
                "<a href='all-products.html' class='btn btn-main mt-20'>Return to shop</a>" +
                "</div>" +
                "</div>" +
                "</div>";
            for (var i in cartArray) {
                output +=
                    "<div class='cart-list'>" +
                    "<div style='flex: 4;'>" +
                    "<a class='pull-left' href='#'>" +
                    "<img class='media-object-cart' src='" +
                    cartArray[i].img +
                    "' alt='product image' />" +
                    "</a>" +
                    "</div>" +
                    "<div class='media-body-cart'>" +
                    "<h4 class='media-heading'><a href=''>" +
                    cartArray[i].name +
                    "</a></h4>" +
                    "<div class='cart-price'>" +
                    "<div class='price-products btn btn-info'>$" +
                    cartArray[i].price +
                    "</div>" +
                    "<div class='input-group quantity-products'>" +
                    "<span class='input-group-btn'><button class='minus-item btn btn-primary' data-name='" +
                    cartArray[i].name +
                    "'>-</button></span>" +
                    "<input type='number' min='0' class='item-count form-control' data-name='" +
                    cartArray[i].name +
                    "' value='" +
                    cartArray[i].count +
                    "'>" +
                    "<span class='input-group-btn'><button class='plus-item btn btn-primary' data-name='" +
                    cartArray[i].name +
                    "' /,2ơpp>+</button></span>" +
                    "</div>" +
                    "<div class='total-products btn btn-success'>$" +
                    cartArray[i].total +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "<div class='text-center' style='flex: 1;'>" +
                    "<a href='#' class='delete-item remove' data-name='" +
                    cartArray[i].name +
                    "'><i class='tf-ion-close'></i></a>" +
                    "</div>" +
                    "</div>";
                viewCart +=
                    "<div class='cart-list'>" +
                    "<div style='flex: 2;'>" +
                    "<a class='pull-left' href='#'>" +
                    "<img class='media-object-cart' src='" +
                    cartArray[i].img +
                    "' alt='product image' />" +
                    "</a>" +
                    "</div>" +
                    "<div class='media-body-cart'>" +
                    "<h4 class='media-heading'><a href=''>" +
                    cartArray[i].name +
                    "</a></h4>" +
                    "<div class='cart-price'>" +
                    "<div class='price-products btn btn-info'>$" +
                    cartArray[i].price +
                    "</div>" +
                    "<div class='input-group quantity-products'>" +
                    "<span class='input-group-btn'><button class='minus-item btn btn-primary' data-name='" +
                    cartArray[i].name +
                    "'>-</button></span>" +
                    "<input type='number' min='0' class='item-count form-control' data-name='" +
                    cartArray[i].name +
                    "' value='" +
                    cartArray[i].count +
                    "'>" +
                    "<span class='input-group-btn'><button class='plus-item btn btn-primary' data-name='" +
                    cartArray[i].name +
                    "' /,2ơpp>+</button></span>" +
                    "</div>" +
                    "<div class='total-products btn btn-success'>$" +
                    cartArray[i].total +
                    "</div>" +
                    "<div class='btn btn-danger delete-item remove' data-name='" +
                    cartArray[i].name +
                    "'><i class='tf-ion-close'></i></div>" +
                    "</div>" +
                    "</div>" +
                    "</div>";
                orderSumary +=
                    "<div class='media product-card '>" +
                    "<a class='pull-left' href='product-single.html'>" +
                    "<img class='media-object' src='" +
                    cartArray[i].img +
                    "' alt='Image' />" +
                    "</a>" +
                    "<div class='media-body'>" +
                    "<h4 class='media-heading'><a href='product-single.html'>" +
                    cartArray[i].name +
                    "</a></h4>" +
                    "<p class='price'>" +
                    cartArray[i].count +
                    " x $" +
                    cartArray[i].price +
                    " = $" +
                    cartArray[i].total +
                    "</p>" +
                    "<span class='remove delete-item' data-name='" +
                    cartArray[i].name +
                    "'>Remove</span>" +
                    "</div></div>";
            }
            if (cartArray.length > 0) {
                $(".show-cart-list").html(output);
                $(".block-cart").show();
                $(".view-cart").html(viewCart);
                $(".cart-count").show();
                $(".cart-count").html(shoppingCart.totalCount());
                $(".checkOut-list").html(orderSumary);
            } else {
                $(".cart-count").hide();
                $(".block-cart").hide();
                $(".view-cart").hide();
                $(".show-cart-list").html(
                    '<h4 class="text-center">Your cart is currently empty.</h4>'
                );
                $(".checkOut-list").html(
                    '<h4 class="text-center">Your cart is currently empty.</h4>'
                );
            }
            $(".total-price").html("$" + shoppingCart.totalCart());
        }

        // Delete item button

        $(".show-cart-list").on("click", ".delete-item", function(event) {
            event.preventDefault();
            var name = $(this).data("name");
            shoppingCart.removeItemFromCartAll(name);
            displayCart();
        });

        // -1
        $(".show-cart-list").on("click", ".minus-item", function(event) {
            var name = $(this).data("name");
            shoppingCart.removeItemFromCart(name);
            displayCart();
        });
        // +1
        $(".show-cart-list").on("click", ".plus-item", function(event) {
            var name = $(this).data("name");
            shoppingCart.addItemToCart(name);
            displayCart();
        });

        // Item count input
        $(".show-cart-list").on("change", ".item-count", function(event) {
            var name = $(this).data("name");
            var count = Number($(this).val());
            shoppingCart.setCountForItem(name, count);
            displayCart();
        });

        /* ----------------------------- view cart page ----------------------------- */

        $(".view-cart").on("click", ".delete-item", function(event) {
            event.preventDefault();
            var name = $(this).data("name");
            shoppingCart.removeItemFromCartAll(name);
            displayCart();
        });

        // -1
        $(".view-cart").on("click", ".minus-item", function(event) {
            var name = $(this).data("name");
            shoppingCart.removeItemFromCart(name);
            displayCart();
        });
        // +1
        $(".view-cart").on("click", ".plus-item", function(event) {
            var name = $(this).data("name");
            shoppingCart.addItemToCart(name);
            displayCart();
        });

        // Item count input
        $(".view-cart").on("change", ".item-count", function(event) {
            var name = $(this).data("name");
            var count = Number($(this).val());
            shoppingCart.setCountForItem(name, count);
            displayCart();
        });
        /* ------------------------------ checkOut page ----------------------------- */
        $(".checkOut-list").on("click", ".delete-item", function(event) {
            var name = $(this).data("name");
            shoppingCart.removeItemFromCartAll(name);
            displayCart();
        });

        displayCart();
    });

    /* -------------------------- end shopping cart js -------------------------- */

})(jQuery);
$(document).ready(function() {
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000,
        anchorPlacement: 'top-bottom',
        once: true
    });
})