<template lang="pug">
.skew-text-in
  Glitch(text="てすとてすと" :delay="1.5" :fontSize="40")
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
@keyframes skewIn
  0%
    transform translate(-50%, -50%) rotate(5deg) scale(3)
    opacity 0
  100%
    transform translate(-50%, -50%) rotate(-5deg) scale(1)
    opacity 1

.skew-text-in
  position absolute
  top 50vh
  left 50%
  width 65%
  transform translate(-50%, -50%) rotate(-5deg)
  z-index 1
  opacity 0
  animation 0.4s cubic-bezier(0, 0, 0.22, 0.99) 1.35s 1 normal forwards running skewIn
  p
    text-align center
    color #fff
</style>
