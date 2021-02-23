<template>
    <div id="home">
        <div class="container">
            <div class="home-wrap">
                <div id="home-slick">
                    <div class="banner banner-1">
                        <img :src="image_banner_1" alt="image_banner_1">
                        <div class="banner-caption text-center">
                            <h1>Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>

                    <div class="banner banner-1">
                        <img :src="image_banner_2" alt="image_banner_2">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>

                    <div class="banner banner-1">
                        <img :src="image_banner_3" alt="image_banner_3">
                        <div class="banner-caption">
                            <h1 class="white-color">New Product <span>Collection</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Slider",
    data(){
        return {
            image_banner_1 : "assets/img/banner01.jpg",
            image_banner_2 : "assets/img/banner02.jpg",
            image_banner_3 : "assets/img/banner03.jpg",
        }
    }
}
</script>

<style scoped>

</style>
