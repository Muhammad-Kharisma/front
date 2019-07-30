<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/DE.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dunia Elektronik</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <?php
    require 'navbar/navbar.php';
    ?>

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>Produks</h2>
                <p>Dunia Elektronik PC dan Latop</p>
            </div>
        </div>
    </section>

    <section  class="service_feature">
        <div  class="container">
            <div id="app" class="row feature_inner">
                <div class="col-lg-4 col-sm-6" v-for="item in items">
                    <div class="feature_item">
                        <div class="f_icon">
                            <img v-bind:src="'http://localhost:8000/css_admin/img/'+item.gambar" height="200" width="200" alt="">
                        </div>
                        <h4>{{item.nama_produks}}</h4>
                        <p>{{item.deskripsi}} </p>
                        <a class="more_btn" href="konsumen.php" >Register dan Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require 'footer/footer.php';
    ?>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/axios.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Extra plugin css -->
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script> 
    <script src="vendors/counterup/apear.js"></script>
    <script src="vendors/counterup/countto.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="vendors/circle-bar/circle-progress.min.js"></script>
    <script src="vendors/circle-bar/plugins.js"></script>

    <script src="js/circle-active.js"></script>
    <script src="js/theme.js"></script>

    <script>
        var app = new Vue({
            el: '#app',
            data: { 
                items: [], 
                form: false, 
            },
            mounted(){
                this.fetchProduks();
            },
            methods: {
                fetchProduks() {
                    var self = this;
                    axios.get('http://localhost:8000/api/get-produks')
                    .then(function(response) {
                        console.log(response.data);
                        self.items = response.data;
                    })
                    .catch(function(error) {
                        console.log(error)
                    })

                }

            }
        })
    </script>
</body>
</html>