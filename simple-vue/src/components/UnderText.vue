<template lang="pug">
.under-text
  .wrap
    Date(:date="date")
</template>

<script>
import Date from '@/components/Date'
export default {
  props: {
    date: {
      type: Object
    }
  },
  components: {
    Date
  }
}
</script>

<style lang="stylus">
@keyframes fadeIn
  0%
    opacity 0
  100%
    opacity 1

.under-text
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
    bottom 10vh
    opacity 0
    animation 0.1s ease-out 3.85s 1 normal forwards running fadeIn
</style>
