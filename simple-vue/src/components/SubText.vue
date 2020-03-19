<template lang="pug">
.sub-text
  .wrap
    Glitch(text="ENGLISH" :delay="3.85" :fontSize="30")
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

.sub-text
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
    top calc(50vh - 30px)
    opacity 0
    animation 0.1s ease-out 3.85s 1 normal forwards running fadeIn
</style>
