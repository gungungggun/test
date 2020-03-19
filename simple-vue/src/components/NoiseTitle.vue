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
  .sub(v-if="sub != ''" :class="{ anim: isAnim }")
    .line
    .subt {{ sub }}
    .line
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
    sub: {
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

@keyframes scaleLine
  0%
    transform scaleX(0)
  50%
    transform scaleX(25)
  70%
    transform scaleX(1)
  80%
    transform scaleX(2.6)
  100%
    transform scaleX(1)

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
  .sub
    margin-top 30px
    display grid
    grid-template-columns repeat(3, auto)
    align-items center
    justify-content center
    gap 8px
    &.anim
      .line
        animation 0.6s ease-out 0.6s 1 normal forwards running scaleLine
    .subt
      position relative
      font-size 14px
      letter-spacing 0.25em
      color rgb(255, 255, 255)
      opacity 0
      animation 0.22s cubic-bezier(0, 0, 0.15, 1) 0.4s 1 normal forwards running opacityIn
      width: 100%;
      font-weight: bold;
      text-align: center;
    .line
      width 6px
      height 1px
      background-color rgb(255, 255, 255)
      transform scaleX(0)
      &:first-of-type
        transform-origin right center
      &:last-of-type
        transform-origin left center
</style>
