$(function () {
    $('#typeSwitcher').change(function () {
        $('.productType').hide();
        $('#' + $(this).val()).show();
    });
});

$(document).ready(function() {
    $("#productForm").validate({
        rules: {
            sku : {
                required: true,
            },
            name: {
                required: true,
            },
            price: {
                required: true,
                number: true
            },
            size: {
                required: true,
                number: true
            },
            weight: {
                required: true,
                number: true
            },
            height: {
                required: true,
                number: true
            },
            width: {
                required: true,
                number: true
            },
            length: {
                required: true,
                number: true
            }
        },
        messages : {
            name: {
                required: "Please, submit required data"
            },
            sku: {
                required: "Please, submit required data"
            },
            price: {
                required: "Please, submit required data",
                number: "Please enter price as a numerical value"
            },
            size: {
                required: "Please, submit required data",
                number: "Please enter size as a numerical value"
            },
            weight: {
                required: "Please, submit required data",
                number: "Please enter weight as a numerical value"
            },
            height: {
                required: "Please, submit required data",
                number: "Please enter height as a numerical value"
            },
            width: {
                required: "Please, submit required data",
                number: "Please enter width as a numerical value"
            },
            length: {
                required: "Please, submit required data",
                number: "Please enter length as a numerical value"
            }
        }
    });
});