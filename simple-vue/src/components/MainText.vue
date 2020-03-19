<template lang="pug">
.main-text
  .wrap
    Glitch(text="アニメーション<br>テストモード" :delay="3.35" :fontSize="40" :line="2")
</template>

<script>
import Glitch from '@/components/Glitch'
export default {
  components: {
    Glitch
  }
}
</script>

<style lang="stylus">
@keyframes fadeIn
  0%
    opacity 0
  100%
    opacity 1

@keyframes zigzag
  0%, 100%
    transform translate(0%, 0%) scale(1)
  33%
    transform translate(25%, 25%) scale(1)
  66%
    transform translate(-25%, -25%) scale(1)

.main-text
  height 100vh
  z-index 2
  display grid
  justify-items center
  position absolute
  top calc(100vh - 40px)
  left 50%
  width 100%
  transform translate(-50%, -50%)
  .wrap
    opacity 0
    animation 0.1s ease-out 3.2s 1 normal forwards running fadeIn, 0.14s ease-in-out 3.2s 1 normal forwards running zigzag
</style>
