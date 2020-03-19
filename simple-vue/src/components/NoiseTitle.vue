<template lang="pug">
.noise-title
  .title
    Glitch(:text="text" :delay="0.7" :fontSize="40" :isAnim="isAnim")
  .noise(:class="{ anim: isAnim }")
    .ns
    .ns
    .ns
    .ns
    .ns
</template>

<script>
import Glitch from '@/components/Glitch'
export default {
  components: {
    Glitch
  },
  props: {
    text: {
      type: String,
      default: ''
    },
    isAnim: {
      type: Boolean,
      default: false
    }
  }
}
</script>

<style lang="stylus">
@keyframes noiseScale
  0%
    transform scaleY(3)
  100%
    transform scaleY(1)

@keyframes noiseLeft
  0%
    transform translateX(101%)
  100%
    transform translateX(-101%)

@keyframes noiseRight
  0%
    transform translateX(-101%)
  100%
    transform translateX(101%)

.noise-title
  position relative
  .noise
    position absolute
    top -10px
    bottom -10px
    left 25vw
    right -40px
    width 50vw
    overflow hidden
    &.anim
      .ns
        animation 0.35s ease-out 0s 1 normal forwards running noiseScale
        &:after
          animation 0.6s cubic-bezier(0.4, 0.26, 0.15, 0.99) 0s 1 normal forwards running noiseLeft
        &:nth-child(1)
          animation-delay 0.3s
          &:after
            animation-name noiseRight
            animation-delay 0.3s
        &:nth-child(2)
          animation-delay 0.2s
          &:after
            animation-delay 0.2s
        &:nth-child(3)
          animation-delay 0.5s
          &:after
            animation-name noiseRight
            animation-delay 0.5s
        &:nth-child(4)
          animation-delay 0.3s
          &:after
            animation-delay 0.3s
        &:nth-child(5)
          animation-delay 0.4s
          &:after
            animation-name noiseRight
            animation-delay 0.4s
    .ns
      width 100%
      height 20%
      &:after
        content ""
        display block
        width 100%
        height 100%
        background-color rgb(255, 255, 255)
        transform translateX(-101%)
        border-radius 50px
</style>
