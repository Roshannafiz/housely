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

    /* HOUSE FEATURE YES OR NO */
    $(".toggle-class-house-feature").change(function () {
        var it_feature = $(this).prop("checked") == true ? 1 : 0;
        var house_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/house-feature",
            data: {
                it_feature: it_feature,
                house_id: house_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 6. END CHANGE HOUSE STATUS ========*/

    /*======== 7. START CHANGE AGENT STATUS ========*/
    $(".toggle-class-agent").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var agent_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/agent-status",
            data: {
                status: status,
                agent_id: agent_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 7. END CHANGE AGENT STATUS ========*/

    /*======== 8. START CHANGE SOCIAL STATUS ========*/
    $(".toggle-class-social").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var social_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/social-status",
            data: {
                status: status,
                social_id: social_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 8. END CHANGE SOCIAL STATUS ========*/

    /*======== 8. START CHANGE CONTACT STATUS ========*/
    $(".toggle-class-contact").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var contact_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/contact-status",
            data: {
                status: status,
                contact_id: contact_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 8. END CHANGE CONTACT STATUS ========*/
})(jQuery);
