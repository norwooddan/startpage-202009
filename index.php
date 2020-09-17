<?php
include 'code.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Start Page</title>
</head>

<body>
    <div class="container clearfix">
        <div class="row justify-content-md-center">
            <div class="col-12 col-sm-4 w-100 datetime">
                <h4>
                    <span id="myCal2" class="no-wrap"></span>
                    <span id="myTime" class="no-wrap"></span>
                </h4>
            </div>
            <div class="col-12 col-sm-4 d-none d-md-block"></div>
            <div class="col-12 col-sm-4 sm-12 weather">
                <img src="<?=$iconurl?>" alt="<?php echo $description; ?>" title="<?php echo $description; ?>" />
                <span class="lowTemp"><?php echo floor($templow); ?>&deg;F</span>
                <span class="currentTemp"><?php echo floor($tempnow); ?>&deg;F</span>
                <span class="highTemp"><?php echo floor($temphigh); ?>&deg;F</span>
            </div>
        </div>
        <div id="links" class="row justify-content-center">
            <div class="col-4 col-sm">
                <h5>Work</h5>
                <div>
                    <a class="text-secondary" href="https://nexus.aspirei.com">Nexus</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://zeetogroup.looker.com">Looker</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://sheets.google.com">Google Sheets</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://admocks.adparlor.com/#facebook/website_clicks/image">Ad
                        Parlor</a>
                </div>
            </div>
            <div class="col-4 col-sm">
                <h5>Media</h5>
                <div>
                    <a class="text-secondary" href="https://reddit.com">Reddit</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://twitter.com">Twitter</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://youtube.com">Youtube</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://espn.com">ESPN</a>
                </div>
            </div>
            <div class="col-4 col-sm">
                <h5>Crypto</h5>
                <div>
                    <a class="text-secondary" href="https://coinbase.com">Coinbase</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://3commas.io/">3Commas</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://binance.us">Binance</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://coinhodler.io/">Coin Hodler</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://www.coingecko.com/en">Coin Gecko</a>
                </div>
            </div>
            <div class="col-4 col-sm">
                <h5>Learn</h5>
                <div>
                    <a class="text-secondary" href="https://www.edx.org/">EDX</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://www.udemy.com/">Udemy</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://www.freecodecamp.org/learn/">FreeCodeCamp</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://www.codecademy.com/">Codeacademy</a>
                </div>
            </div>
            <div class="col-4 col-sm">
                <h5>Home</h5>
                <div>
                    <a class="text-secondary" href="https://unifi.ui.com/">Unifi</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://stewl.com">Nextcloud</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://github.com">GitHub</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://pimylifeup.com/">Pi My Life Up</a>
                </div>
                <div>
                    <a class="text-secondary" href="https://www.thingiverse.com/">Thingiverse</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"
        integrity="sha512-qSnlnyh7EcD3vTqRoSP4LYsy2yVuqqmnkM9tW4dWo6xvAoxuVXyM36qZK54fyCmHoY1iKi9FJAUZrlPqmGNXFw=="
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
