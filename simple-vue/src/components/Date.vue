<template lang="pug">
.date
  span.year {{ date.format('YYYY') }}
  span.dot1 .
  span.month {{ date.format('MM') }}
  span.dot2 .
  span.day {{ date.format('DD') }}
  span.ddd {{ date.format('ddd').toUpperCase() }}
</template>

<script>
export default {
  props: {
    date: Object
  }
}
</script>

<style lang="stylus">
@keyframes flipIn
  0%
    transform scaleY(0)
  50%
    transform scaleY(1.6)
  100%
    transform scaleY(1)

@keyframes dotIn
  0%
    transform translateY(0px)
    opacity 0
  100%
    transform translateY(0px)
    opacity 1

.date
  span
    font-size 30px
    color #fff
    padding 0 2px
    display inline-block
    &.year
      transform scaleY(0)
      animation 0.5s ease-in-out 0s 1 normal both running flipIn
      animation-delay 4s
    &.month
      transform scaleY(0)
      animation 0.5s ease-in-out 0s 1 normal both running flipIn
      animation-delay 4.1s
    &.day
      transform scaleY(0)
      animation 0.5s ease-in-out 0s 1 normal both running flipIn
      animation-delay 4.2s
    &.ddd
      transform scaleY(0)
      animation 0.5s ease-in-out 0s 1 normal both running flipIn
      animation-delay 4.25s
    &.dot1
      animation 0.5s ease-out .15s 1 normal both running dotIn
      animation-delay 4.15s
    &.dot2
      animation 0.5s ease-out .2s 1 normal both running dotIn
      animation-delay 4.2s
</style>
