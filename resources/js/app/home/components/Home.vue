<template>
    <div>
        <div class="container-fluid home-section-one" style="background-color: #fff3e6;">
            <div class="row">
                <div class="col-xl-7 d-flex full-height align-self-center">
                    <div class="align-self-start home-top-bar justify-content-between px-4 mt-3 d-flex position-absolute">
                        <div class="">
                            <h1 class="mt-2 home-text-size-responsive home-text-color-responsive font-weight-bolder">Wall Art</h1>
                        </div>
                        <div>
                            <div class="btn-group d-lg-block d-none mt-3 btn-group-lg">
                                <button class="btn btn-dark rounded-0">Login</button>
                                <button class="btn rounded-0 btn-light">Register</button>
                            </div>
                        </div>
                    </div>
                    <div class="container align-self-center justify-content-center p-lg-5">
                        <h1 class="display-4 home-text-align-responsive home-title home-text-color-responsive">Turn your photos into affordable, stunning wall art</h1>
                        <div class="mt-4 home-text-align-responsive">
                            <button class="btn btn-lg btn-dark" style="border-radius:0px">Order Now!</button>
                            <a href="javascript:void(0)" class="btn btn-lg home-btn-color-responsive" style="border-radius:0px">Other Themes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-none bg-dark d-lg-flex justify-content-center align-items-center">
                    <img src="images/auth-background.webp" class="img-fluid position-absolute mt-2" style="height:455px;width:480px" alt="">
                    <img src="images/frames/frame1.png" class="img-fluid position-absolute" width="" alt="">
                    <h2 class="align-self-end font-weight-bolder text-white home-text-feature-one position-absolute" style="">Best Picture Resolution</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">

                </div>
                <div class="col-xl-6">

                </div>
            </div>
        </div>
    </div>
</template>


<script>
import TopBar from "../../../components/TopBar";
export default {
    data: () => {
        return {
        }
    },
    components: {
        TopBar
    },

}
</script>
