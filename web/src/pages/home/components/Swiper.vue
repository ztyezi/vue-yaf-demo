<template>
  <div>
    <!-- 轮播图 -->
    <div class="swiper" style="width: 1195px; height: 400px;">
      <Carousel
          v-model="indexItem"
          :height="setting.height"
          :autoplay="setting.autoplay"
          :autoplay-speed="setting.autoplaySpeed"
          :dots="setting.dots"
          :radius-dot="setting.radiusDot"
          :trigger="setting.trigger"
          :arrow="setting.arrow">
          <CarouselItem>
              <img class="swiper-img" src="http://hr.zuoyebang.cc/www_portal/static/banner_01.png">
          </CarouselItem>
          <CarouselItem>
              <img class="swiper-img" src="http://hr.zuoyebang.cc/www_portal/static/banner_02.png">
          </CarouselItem>
          <CarouselItem>
              <img class="swiper-img" src="http://hr.zuoyebang.cc/www_portal/static/banner_03.png">
          </CarouselItem>
      </Carousel>
    </div>
  </div>
</template>

<script type="text/javascript">
export default {
  name: 'HomeSwiper',
  data () {
    return {
      // 轮播图控制参数
      indexItem: 0,
      setting: {
        autoplay: true,
        autoplaySpeed: 3000,
        height: 400,
        dots: 'inside',
        radiusDot: false,
        trigger: 'click',
        arrow: 'hover'
      }
    }
  }
}
</script>

<style scoped>
  .swiper{
    text-align: center;
    font-size: 20px;
  }
  .swiper-img{
    position: relative;
    width: 100%;
    height: 100%;
  }
  .content{
    font-size: 16px;
  }
</style>
