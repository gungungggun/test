<template lang="pug">
.rain
  .wrap
  .wrap
  .wrap
  .wrap
</template>

<script>
</script>

<style lang="stylus">
@keyframes rain
  0%
    transform translateY(-101%)
  100%
    transform translateY(101%)

.rain
  grid-template-columns repeat(4, 3vmin)
  width 37vmin
  height 39vmin
  display grid
  justify-content space-between
  position absolute
  top 25%
  left 50%
  transform translate(-50%, -50%) rotate(35deg)
  .wrap
    height 60%
    overflow hidden
    border-radius 9999px
    &:nth-child(2)
      &:after
        animation-delay 0.65s
    &:nth-child(3)
      &:after
        animation-delay 0.65s
    &:nth-child(2n)
      align-self end
    &:after
      content ""
      display block
      width 100%
      height 100%
      transform translateY(-100%)
      border-radius 9999px
      background linear-gradient(rgba(255, 25, 82, 0.9), rgba(18, 86, 179, 0.9))
      animation 0.5s cubic-bezier(0.7, -0.01, 0.18, 1.04) 0.5s 1 normal forwards running rain
</style>
