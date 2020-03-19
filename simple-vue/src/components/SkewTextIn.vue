<template lang="pug">
.skew-text-in
  Glitch(text="てすとてすと" :isAnim="true")
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
.skew-text-in
  position absolute
  top 50vh
  left 50%
  width 65%
  transform translate(-50%, -50%) rotate(-5deg)
  z-index 1
  //opacity 0
  //animation: 0.4s cubic-bezier(0, 0, 0.22, 0.99) 1.35s 1 normal forwards running lbBqII;
  p
    text-align center
    color #fff
</style>
