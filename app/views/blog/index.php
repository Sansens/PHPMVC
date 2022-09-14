<style>
        /*  Helper Styles */
        body {
        font-family: Varela Round;
        background: #f1f1f1;
    }

    a {
        text-decoration: none;
    }

    /* Card Styles */

    .card-sl {
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .card-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .card-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .card-heading {
        font-size: 18px;
        font-weight: bold;
        height : 60px;
        max-height : 60px;
        background: #fff;
        padding: 10px 15px;
    }
    .col-md-3 {
        padding-top : 15px;
    }

    .card-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .card-button {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #1F487E;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }
</style>
<div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/rpl.jpeg" width=100% />
                    </div>
                    <div class="card-heading"> Rekayasa Perangkat Lunak</div>
                    <a href="<?= BASEURL; ?>/blog/detailRPL" class="card-button"> Detail</a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card-s2">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/AKL.jpeg" width=100% />
                    </div>
                    <div class="card-heading text-center"> Akuntansi <br>  </div>
                    <a href="<?= BASEURL; ?>/blog/detailAKL" class="card-button"> Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-s3">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/dpib.jpeg" width=100% />
                    </div>
                    <div class="card-heading text-center"> Desain Pembangunan dan Informasi Bangunan</div>
                    <a href="<?= BASEURL; ?>/blog/detailDPIB" class="card-button"> Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-s4">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/kgsp.jpeg" width=100% />
                    </div>
                    <div class="card-heading text-center"> Teknik Konstruksi dan Perumahan</div>
                    <a href="<?= BASEURL; ?>/blog/detailKGSP" class="card-button"> Detail</a>
                </div>
            </div>




            <div class="col-md-3">
                <div class="card-s5">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/TB.jpeg" width=100% />
                    </div>
                    <div class="card-heading text-center">Tata Boga </div>
                    <a href="<?= BASEURL; ?>/blog/detailTB" class="card-button"> Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-s6">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/TPTU.jpeg" width=100% />
                    </div>
                    <div class="card-heading text-center">Teknik Pendingin dan Tata Udara</div>
                    <a href="<?= BASEURL; ?>/blog/detailTPTU" class="card-button"> Detail</a>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card-s7">
                    <div class="card-image">
                        <img src="<?= BASEURL; ?>/img/tpp.png" width=100% />
                    </div>
                    <div class="card-heading text-center">Teknik Pengelasan</div>
                    <a href="<?= BASEURL; ?>/blog/detailTP" class="card-button"> Detail</a>
                </div>
            </div>
        </div> 
</div>