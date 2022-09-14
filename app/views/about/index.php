<style>
  /* body{
    background: #dbeeee;
    background: -webkit-linear-gradient(to right, #dbeeee, #279dc5);
    background: linear-gradient(to right, #dbeeee, #279dc5);
    min-height: 100vh;
} */

.card{
    border:none;
    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#dbeeee;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#279dc5;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
</style>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="img/opahkece.jpg" width="100" class="rounded-circle">
                </div>

                <div class="text-center mt-3">
                    <h5 class="mt-2 mb-0">
                        Muh. Zaitun Rohmat Sanjaya
                    </h5>
                    <!-- <span>kelas:XII RPL C , umur:15 , Alamat Rumah:Sumbergedong</span> -->
                    <p>
                    Alamat Rumah:Sumbergedong <br>
                    kelas:XII RPL C <br>
                    umur:15
                    </p>
                    <div>
                        <a href="http://localhost/phpmyadmin/" class="btn btn-info">localhost</a>
                    </div>
                    <!-- <div class="buttons">
                        <button class="btn btn-outline-primary px-4">
                            <a href="https://www.youtube.com/channel/UCH2TajnxCwlfbDlVYwZO7IA">youtube</a>
                        </button>
                        <button class="btn btn-primary px-4">
                            <a href="https://www.instagram.com/sandrinna_11/?hl=id">instagram</a>
                        </button>
                    </div> -->
                </div>
            </div>
            
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</div>
