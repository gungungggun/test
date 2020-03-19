<template lang="pug">
.section1
  .wrap
    NoiseTitle(text="TEST" sub="OKOK" :isAnim="isAnim")
    button(@click="isAnim = !isAnim") Anim
</template>

<script>
import NoiseTitle from '@/components/NoiseTitle'
export default {
  components: {
    NoiseTitle
  },
  data() {
    return {
      isAnim: false
    }
  }
}
</script>

<style lang="stylus">
.section1
  position absolute
  width 100%
  height 100vh
  z-index 20
  top 0px
  left 0px
  right 0px
  bottom 0px
  background: url('https://divnil.com/wallpaper/iphone-x/img/app/w/a/wallpaper-iphone-7-1080-1920-full-hd-616_38b58e96f854e673fb0a4c9d0cec9f23_raw.jpg') center center / cover no-repeat
  &:after
    content ""
    display block
    position absolute
    top 0px
    left 0px
    right 0px
    bottom 0px
    opacity 0.5
    background linear-gradient(64deg, rgba(#15181b, 0.9), rgba(25, 25, 82, 0.9)) #000
  button
    position absolute
    top 100px
    left 0
    width 200px
    height 50px
    background #f00
    z-index 10
    &:active
      background #0f0
</style>
