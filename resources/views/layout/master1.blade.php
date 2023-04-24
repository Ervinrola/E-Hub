<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="css/button.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <title>eHub</title>
</head>

<body>
    <nav class="border-bottom" style="background-color:rgb(100, 152, 229 );">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="home"
                        class="nav-link link-dark px-2 active fa-brands fa-hubspot fa-2xl px-2 p-2 text-white"
                        aria-current="page">eHub</a></li>
                <li class="nav-item"><a href="home" class="nav-link link-dark px-2 p-1 text-white">Home</a></li>
                <li class="nav-item"><a href="community" class="nav-link link-dark px-2 p-1 text-white">Content Hive</a>
                </li>
                <li class="nav-item"><a href="about" class="nav-link link-dark px-2 p-1 text-white">About</a></li>
            </ul>
            <div class="search-bar">
                <button class="fa fa-search border-0 bg-transparent" id="searchbar" type="submit"></button>
                <input type="search" placeholder="Search Here...." aria-label="Search" list="datalistOptions"
                    id="options">
                <datalist id="datalistOptions">
                    <option value="Rinrin">
                    <option value="Caballero">
                    <option value="Pogi">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
            </div>
        </div>
    </nav>
    <a href="#" class="back-to-top-btn"><i class="fa-solid fa-angle-up"></i></a>
    @yield('bot')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/js.js"></script>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector('.back-to-top-btn').style.display = "block";
            } else {
                document.querySelector('.back-to-top-btn').style.display = "none";
            }
        }

        document.querySelector('.back-to-top-btn').addEventListener('click', function(e) {
            e.preventDefault();
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        /*searchbar*/
        const options = document.querySelector('#options');
        options.addEventListener('change', () => {
            const selectedOption = options.value;
            switch (selectedOption) {
                case 'Rinrin':
                    window.location.href = 'search';
                    break;
                case 'Caballero':
                    window.location.href = 'search';
                    break;
                case 'Pogi':
                    window.location.href = 'search';
                    break;
                case 'San Francisco':
                    window.location.href = 'search';
                    break;
                case 'New York':
                    window.location.href = 'search';
                    break;
                case 'Seattle':
                    window.location.href = 'search';
                    break;
                case 'Los Angeles':
                    window.location.href = 'search';
                    break;
                case 'Chicago':
                    window.location.href = 'search';
                    break;
                default:
                    // do nothing
                    break;
            }
        });
        const searchbar = document.querySelector('#searchbar');
        const searchInput = document.querySelector('#searchInput');

        searchbar.addEventListener('click', (event) => {
            event.preventDefault(); // prevent the form from submitting
            const query = searchInput.value.trim().toLowerCase();
            if (query !== '') {
                window.location.href = `search?q=${query}`; // change to the correct URL of your search page
            }
        });

        searchInput.addEventListener('input', () => {
            if (searchInput.value.trim() === '') {
                searchbar.disabled = true;
            } else {
                searchbar.disabled = false;
            }
        });
    </script>
        <!-- Start of ChatBot (www.chatbot.com) code -->
    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "643cb35e2587fe0007a8e611";
        (function() {
            var be = document.createElement('script');
            be.type = 'text/javascript';
            be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(be, s);
        })();
    </script>
    <!-- End of ChatBot code -->

</body>
</html>
