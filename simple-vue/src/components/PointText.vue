<template lang="pug">
.point-text
  .wrap
    Glitch(text="SUCCESS" :delay="4.1" :fontSize="30")
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

.point-text
  height 100vh
  z-index 3
  display grid
  justify-items center
  position absolute
  top 0
  left 0
  width 100%
  height 100vh
  .wrap
    position absolute
    top calc(50vh + 60px)
    opacity 0
    animation 0.1s ease-out 3.85s 1 normal forwards running fadeIn
</style>
