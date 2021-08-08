$(".spoiler_link").on( "click", function() {
    let text = $(this).data("spoiler");
    $(this).replaceWith(function() {
        return '<span class="spoiler_text">' + text + '</span>';
    });
});