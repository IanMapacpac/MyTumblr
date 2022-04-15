<?php
SESSION_START();

if(isset($_SESSION["ses_username"]) === false){

 header("Location: index.php?logfirst");
}else if(isset($_REQUEST["signout"])===true){
    session_destroy();
    header("Location: index.php?signout");
}else if(isset($_REQUEST["showall"])===true){

    header("Location: showall.php");
}
?>


<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Portfolio Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/bg-image.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

body {
    background: #654ea3;
    background: linear-gradient(to bottom, #64CEEB,#1269C7);
    min-height:100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">

                    <div class="profile mr-3"><img src="images/pics.jpg" alt="..." width="200" class="rounded mb-2 img-thumbnail">
                    <a href="?signout" class="btn btn-outline-dark btn-sm btn-block"><b>Sign Out</b></a>
                    </div>

                    <div class="media-body mb-5 text-white">
                        <h3 class="mt-0 mb-0"><?php echo $_SESSION["ses_fullname"]; ?></h3>
                        <p class="medium mb-4"> <i class="fas fa-map-marker-alt mr-"><?php echo $_SESSION["ses_fulladd"]; ?></i>
                         </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">758</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">14,342</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">204</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>

            <div class="px-4 py-3">
                <h4 class="mb-0">Basic Info</h4>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Male</p>
                    <p class="font-italic mb-0">19 years old</p>
                    <p class="font-italic mb-0">In a Relationship</p>
                    <p class="font-italic mb-0">Student at Marinduque State College</p>
                </div>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Captures</h5><a href="?showall" class="btn btn-link text-blue"><u>Show all</u></a>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="images\1.png" alt="" class="img-fluid rounded shadow-sm"></div>              
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="images\2.png" alt="" class="img-fluid rounded shadow-sm"></div>                
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="images\3.png" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class='col-lg-6 pl-lg-1'><img src='images\4.png' alt="" class="img-fluid rounded shadow-sm"></div>
        

                </div> 
            </div>

            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>
                </div>
            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>