<template lang="pug">
.wiggle-text
  p {{ text }}
</template>

<script>
export default {
  props: {
    text: {
      type: String
    }
  }
}
</script>

<style lang="stylus">
@import url('https://fonts.googleapis.com/css2?family=Black+Ops+One')

@keyframes opacityIn
  0%
    opacity 0
  100%
    opacity 1

@keyframes opacityOut
  0%
    opacity 1
  100%
    opacity 0

@keyframes wiggle
  0%
    transform translate(0px, 0px) scale(2)
  32%
    transform translate(-140%, -140%) scale(2)
  64%
    transform translate(140%, 140%) scale(2)
  100%
    transform translate(0px, 0px) scale(2)

.wiggle-text
  position absolute
  top calc(50vh + 40px)
  left 50%
  width 50vmin
  height 50vmin
  transform translate(-50%, -50%)
  opacity 0
  animation 0.01s linear 0.7s 1 normal forwards running opacityIn, 0.01s linear 1.35s 1 normal forwards running opacityOut
  z-index 1
  p
    position absolute
    top 0
    left 0
    width 100%
    height 100%
    animation 0.12s ease-in-out 1.2s 1 normal forwards running wiggle
    margin 0
    text-align center
    font-size 40px
    color #fff
    text-shadow 2px 3px 2px rgb(125, 215, 228), -2px -2px 0px rgb(240, 66, 37)
    font-family 'Black Ops One', cursive
    &:first-letter
      font-size 80px
      letter-spacing -10px
</style>
