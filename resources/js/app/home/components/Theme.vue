<template>
    <div style="height:100vh;background-color: #fff3e6;">
        <TopBar navClass="d-flex fixed-top bg-transparent navbar-dark" navBrandStyle="margin-top:-0.1px!important"/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 theme-section-one col-12 bg-dark d-flex justify-content-center align-items-center" style="height:100vh">
                    <div class="">
                        <h1 class="display-4 theme-text-size-responsive theme-text-align-responsive text-left text-white ">Many different theme is available and ready to order</h1>
                        <div class="mt-3 theme-text-align-responsive">
                            <button class="btn btn-lg btn-light theme-text-align-responsive" style="border-radius:0px">Order Now!</button>
                            <router-link :to="{name:'about'}" class="btn btn-lg btn-dark theme-text-color-responsive" style="border-radius:0px">Next Page</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid img-thumbnail theme-image-size-responsive" style="padding:2rem;margin-top:-18px;margin-left:-5px" width="240" alt="">
                                <img src="images/frames/frame1.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-3 font-weight-bold">Classic</h3>
                        </div>
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid img-thumbnail theme-less-image-size-responsive" style="padding:2rem;margin-top:-18px;margin-left:-5px" width="240" alt="">
                                <img src="images/frames/frame2.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-3 font-weight-bold">Ever</h3>
                        </div>
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid theme-less-image-size-responsive mt-n3 mr-1 mr-xl-1" width="249" alt="">
                                <img src="images/frames/frame3.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-2 font-weight-bold">Less</h3>
                        </div>
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid theme-image-size-responsive" style="margin-top:-18px;margin-left:-5px" width="240" alt="">
                                <img src="images/frames/frame1.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-3 font-weight-bold">Classic</h3>
                        </div>
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid theme-image-size-responsive" style="margin-top:-18px;margin-left:-5px" width="240" alt="">
                                <img src="images/frames/frame2.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-3 font-weight-bold">Ever</h3>
                        </div>
                        <div class="col-md-4 col-6 col-lg-4 col-xl-4 text-center my-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="img/uploads/image1.jpg" class="img-fluid theme-less-image-size-responsive mt-n3 mr-1 mr-xl-1" width="249" alt="">
                                <img src="images/frames/frame4.png" width="260" class="img-fluid theme-frame-size-responsive text-center position-absolute mt-n2" alt="">
                            </div>
                            <h3 class="text-center mt-2 font-weight-bold">Edge</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import TopBar from "../../../components/TopBar";

export default {
    components: {
        TopBar
    },

}
</script>
