   $(".open .avatar-dropdown-menu-items ul li").css("list-style", "none");
    $(function() {
    var $dropDownMenu = $(".avatar-dropdown-menu");

    $dropDownMenu.click(function(e) {
        $(".open .avatar-dropdown-menu-items ul li").css("list-style", "none");
        e.stopPropagation();

        $(document).on("click", menuCloseListener);

        toggleMenu();
    });

    var toggleMenu = function() {
        $dropDownMenu.toggleClass("open");
    }

    var menuCloseListener = function() {
        toggleMenu();
        $(document).off("click", menuCloseListener);
        $(".open .avatar-dropdown-menu-items ul li").css("list-style", "none");
    }
});