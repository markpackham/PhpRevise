$(document).ready(
    function () {
        var nav, content, fetchAndInsert;

        nav = $('nav#main');
        content = $('section#content');

        //Fetches and inserts content into the container
        fetchAndInsert = function (href) {
            //pop the last element off
            $.ajax({
                url: 'http://localhost/PhpRevise/JavaScriptHistoryAPI/content/' + href.split('/').pop(),
                method: 'GET',
                cache: false,
                success: function (data) {
                    content.html(data);
                }
            });
        };

        //User goes backwards or forwards
        $(window).on('popstate', function () {
                //Get full path
                fetchAndInsert(location.pathname);
            }
        );

        nav.find('a').on('click', function (e) {
                var href = $(this).attr('href');

                //Mainpulate history
                history.pushState(null, null, href);

                //Fetch and inset content
                fetchAndInsert(href);

                /*Stop page reloads*/
                e.preventDefault();
            }
        );
    }
);