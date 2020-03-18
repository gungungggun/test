<template lang="pug">
.noise-white
  .noise
  .noise
  .noise
  .noise
  .noise
</template>

<script>
export default {
  props: {
    date: Object
  }
}
</script>

<style lang="stylus">
@keyframes noiseWhite1
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(15%)

@keyframes noiseWhite2
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(28%)

@keyframes noiseWhite3
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(-52%)

@keyframes noiseWhite4
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(50%)

@keyframes noiseWhite5
  0%, 100%
    transform translateX(0)
  50%
    transform translateX(-15%)

@keyframes noiseWhite
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
  animation 0.12s ease-in-out 1.3s 1 normal forwards running noiseWhite
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
      animation-name noiseWhite1
      animation-delay 1.1s
    &:nth-child(2)
      top 40%
      left -100%
      height 5%
      animation-name noiseWhite2
      animation-delay 1.2s
    &:nth-child(3)
      top 45%
      left 100%
      height 10%
      animation-name noiseWhite3
      animation-delay 1s
    &:nth-child(4)
      top 55%
      left -100%
      height 25%
      animation-name noiseWhite4
      animation-delay 1.25s
    &:nth-child(5)
      bottom 0
      left 100%
      height 20%
      animation-name noiseWhite5
      animation-delay 1.14s
</style>
