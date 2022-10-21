(function ($) {
    /*======== 1. START CHANGE BANNER STATUS ========*/
    $(".toggle-class-banner").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var banner_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/banner-status",
            data: {
                status: status,
                banner_id: banner_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 1. END CHANGE BANNER STATUS ========*/

    /*======== 2. START CHANGE FEATURE STATUS ========*/
    $(".toggle-class-feature").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var feature_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/feature-status",
            data: {
                status: status,
                feature_id: feature_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 2. END CHANGE FEATURE STATUS ========*/

    /*======== 3. START CHANGE BRAND STATUS ========*/
    $(".toggle-class-brand").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var brand_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/brand-status",
            data: {
                status: status,
                brand_id: brand_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 3. END CHANGE BRAND STATUS ========*/

    /*======== 4. START CHANGE CATEGORY STATUS ========*/
    $(".toggle-class-category").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var category_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/category-status",
            data: {
                status: status,
                category_id: category_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 4. END CHANGE CATEGORY STATUS ========*/

    /*======== 5. START CHANGE NAVBAR STATUS ========*/
    $(".toggle-class-navbar").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var navbar_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/navbar-status",
            data: {
                status: status,
                navbar_id: navbar_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 5. END CHANGE NAVBAR STATUS ========*/

    /*======== 6. START CHANGE HOUSE STATUS ========*/
    $(".toggle-class-house").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var house_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/house-status",
            data: {
                status: status,
                house_id: house_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 6. END CHANGE HOUSE STATUS ========*/
})(jQuery);
