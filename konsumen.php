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
                <h2>Register Konsumen</h2>
                <p>Isi data dengan benar</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Get in Touch Area =================-->
    <section class="get_in_touch_area p_100" style="margin-top: -10%;">
        <div class="container" id="app">
            <div class="row get_touch_inner">
                <div class="col-lg-6" style="margin-left: 25%;">
                    <form @submit.prevent="simpan" class="contact_us_form row">
                        <div class="form-group col-lg-12">
                            <input v-model="nama_konsumen" type="text" class="form-control" id="nama_konsumen" name="nama_konsumen" placeholder="Full Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <input v-model="email" type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <select v-model="jk" class="form-control">
                                <option >Jenis Kelamin</option>
                                <option >L</option>
                                <option >P</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <input v-model="no_telp" type="number" class="form-control" name="no_telp" id="no_telp" placeholder="No. Telepon"></input>
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea v-model="alamat" class="form-control" name="alamat" rows="1" id="alamat" placeholder="Alamat"></textarea>
                        </div>
                        
                        <div class="form-group col-lg-12">
                            <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Get in Touch Area =================-->

    <?php
    require 'footer/footer.php';
    ?>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vue.js"></script>
    <script src="js/axios.min.js"></script>
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

    <script src="js/theme.js"></script>

    <script>
        // var example1 = new Vue({
        //     el: '#app',
        //     // data adalah model (state) dari vue.js
        //     data: {
        //         nama_konsumen : '',
        //         email : '',
        //         jk: '',
        //         no_telp: '',
        //         alamat: '',
        //         password: '',
        //         form: false,
        //     },
        //     methods: {
        //         simpan() {
        //             var self = this
        //             if (!self.edit) {
        //                 //post data (menggunakan method post resource)
        //                 axios.post("http://localhost:8000/api/post-konsumen",{
        //                     nama_konsumen: this.nama_konsumen,
        //                     email: this.email,
        //                     jk: this.jk,
        //                     no_telp: this.no_telp,
        //                     alamat: this.alamat,
        //                     password: "coba12345",
        //                 })
        //                 .then(function (response) {
        //                     console.log(response);
        //                     if (response.data.status == true) {
        //                         self.reset();
        //                     }else{
        //                         alert("data gagal disimpan");
        //                     }
        //                 })
        //                 .catch(function(error) {
        //                     console.log(error)
        //                 })
        //             }
        //         },
        //         reset(){
        //             this.form = false;
        //             this.id = '';
        //             this.nama_konsumen = '';
        //             this.email = '';
        //             this.jk = '';
        //             this.no_telp = '';
        //             this.alamat = '';
        //         }

        //     }
        // })

        new Vue({
            el: '#app',
            data() {
                return { 
                    nama_konsumen: '',
                    email: '',
                    jk: '',
                    no_telp: '', 
                    alamat: '', 
                    password: '',
                    // form : true, 
                }
            },
            // mounted(){
            //     this.fetchKonsumen();
            // },
            methods: {
                simpan: function(){
                    var data = new FormData();
                    data.append('nama_konsumen', this.nama_konsumen)
                    data.append('email', this.email)
                    data.append('jk', this.jk)
                    data.append('no_telp', this.no_telp)
                    data.append('alamat', this.alamat)
                    data.append('password', 'dunia12345')

                    axios.post('http://localhost:8000/api/post-konsumen', data)
                    .then((response)=>{
                        const data = response.data;
                        alert("Silahkan Hubungi Kontak Dunia Elektronik Untuk Melanjutkan Pemesanan!!!")
                        // self.form = !self.form
                        // this.form = false;
                        this.id = '';
                        this.nama_konsumen = '';
                        this.email = '';
                        this.jk = '';
                        this.no_telp = '';
                        this.alamat = '';

                    });
                }
            }
        })
    </script>
    <!-- // simpan() {
                //     var self = this
                //     if (!self.edit) {
                //         //post data (menggunakan method post resource)
                //         axios.post("http://localhost:8000/api/post-konsumen",{
                //             nama_konsumen: this.nama_konsumen,
                //             email: this.email,
                //             jk: this.jk,
                //             no_telp: this.no_telp,
                //             alamat: this.alamat,
                //             password: bcrypt("duniaelektronik"),
                //         })
                //         .then(function (response) {
                //             console.log(response);
                //             if (response.data.status == true) {
                //                 self.batal()
                //             }else{
                //                 alert("data gagal disimpan")
                //             }
                //         })
                //         .catch(function(error) {
                //             console.log(error)
                //         })
                //     }
                // } -->
            </body>
            </html>