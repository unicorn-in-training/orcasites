jQuery(document).ready(function ($) {

    function showSearchForm() {
        $(".search-icon").click(function () {
            $(".orcasites-search-form").slideToggle();
        });

        $(document).keydown(function (e) {
            if (e.keyCode == 27) {
                $(".orcasites-search-form").hide();
            }
        });
    }

    showSearchForm();
});