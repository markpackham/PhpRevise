$(document).ready(
    function () {
        var nav, content, fetchAndInsert;

        nav = $('nav#main');
        content = $('section#content');

        //Fetches and inserts content into the container
        fetchAndInsert = function (href) {
            $.ajax({
                url: 'http://localhost/PhpRevise/JavaScriptHistoryAPI/content/' + href,
                method: 'GET',
                cache: false,
                success: function (data) {
                    content.html(data);
                }
            });
        };

        nav.find('a').on('click', function (e) {
                var href = $(this).attr('href');

                //Mainpulate history
                history.pushState(null, null, href);

                //Fetch and inset content
                fetchAndInset(href);

                /*Stop page reloads*/
                e.preventDefault();
            }
        );
    }
);