<?php include("header_member.php") ?>

<main class="main-content border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder mb-0">Stats</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Top Artiste</p>
                                    <h4 class="mb-0">Ayra Starr</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Ayra Starr - Rush</p>
                            </div>
                        </div>

                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Top Track</p>
                                    <h4 class="mb-0">Rush</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Ayra Starr - Rush</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Top Album</p>
                                    <h4 class="mb-0 ">This Is What I Mean</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">Dave - This Is What I Mean</p>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Top Collaboration</p>
                                    <h4 class="mb-0 ">Burna Boy featuring Ed Sheeran</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">For My Hand - Burna Boy ft. Ed Sheeran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
                    <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>


<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>