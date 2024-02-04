jQuery(document).ready(function () {
  jQuery('.likedProductSlider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});

jQuery(document).ready(function () {
  const { registerCheckoutFilters } = window.wc.blocksCheckout;

  const isOrderSummaryContext = (args) => args?.context === 'summary';

  const modifyCartItemClass = (defaultValue, extensions, args) => {
    if (isOrderSummaryContext(args)) {
      return 'my-custom-class';
    }
    return defaultValue;
  };

  const modifyCartItemPrice = (defaultValue, extensions, args) => {
    if (isOrderSummaryContext(args)) {
      return '<price/> for all items';
    }
    return defaultValue;
  };

  const modifyItemName = (defaultValue, extensions, args) => {
    if (isOrderSummaryContext(args)) {
      return `🪴 ${defaultValue} 🪴`;
    }
    return defaultValue;
  };

  const modifySubtotalPriceFormat = (defaultValue, extensions, args) => {
    if (isOrderSummaryContext(args)) {
      return '<price/> per item';
    }
    return defaultValue;
  };

  registerCheckoutFilters('example-extension', {
    cartItemClass: modifyCartItemClass,
    cartItemPrice: modifyCartItemPrice,
    itemName: modifyItemName,
    subtotalPriceFormat: modifySubtotalPriceFormat,
  });
})

