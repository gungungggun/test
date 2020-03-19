<template lang="pug">
.noise-white(:style="{zIndex: zIndex}")
  .noise(:style="{backgroundColor: bg, animationDelay: delay + 0.1 + 's'}")
  .noise(:style="{backgroundColor: bg, animationDelay: delay + 0.2 + 's'}")
  .noise(:style="{backgroundColor: bg, animationDelay: delay + 's'}")
  .noise(:style="{backgroundColor: bg, animationDelay: delay + 0.25 + 's'}")
  .noise(:style="{backgroundColor: bg, animationDelay: delay + 0.14 + 's'}")
</template>

<script>
export default {
  props: {
    bg: {
      type: String,
      default: '#fff'
    },
    zIndex: {
      type: Number,
      default: 0
    },
    delay: {
      type: Number,
      default: 1
    }
  }
}
</script>

<style lang="stylus">
@keyframes noise1
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(15%)

@keyframes noise2
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(28%)

@keyframes noise3
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(-52%)

@keyframes noise4
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(50%)

@keyframes noise5
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(-15%)

@keyframes noise
  0%
    transform translate(0px, 0px)
  32%
    transform translate(-30%, -30%)
  64%
    transform translate(30%, 30%)
  100%
    transform translate(0px, 0px)

.noise-white
  position absolute
  top 0
  left 0
  width 100%
  height 100vh
  opacity .8
  animation 0.12s ease-in-out 1.3s 1 normal forwards running noise
  .noise
    position absolute
    width 100%
    background-color rgb(255, 255, 255)
    box-shadow rgb(125, 215, 228) 0px 1.4px 0px, rgb(240, 66, 37) 0px -1.4px
    animation 0.12s ease-in-out 0s 1 normal forwards running none
    &:nth-child(1)
      top 0
      left -100%
      height 40%
      animation-name noise1
      animation-delay 1.1s
    &:nth-child(2)
      top 40%
      left -100%
      height 5%
      animation-name noise2
      animation-delay 1.2s
    &:nth-child(3)
      top 45%
      left 100%
      height 10%
      animation-name noise3
      animation-delay 1s
    &:nth-child(4)
      top 55%
      left -100%
      height 25%
      animation-name noise4
      animation-delay 1.25s
    &:nth-child(5)
      bottom 0
      left 100%
      height 20%
      animation-name noise5
      animation-delay 1.14s
</style>
