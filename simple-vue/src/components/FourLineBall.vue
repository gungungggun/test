<template lang="pug">
.four-line-ball
  .wrap
  .wrap
  .wrap
  .wrap
</template>

<script>
</script>

<style lang="stylus">
@keyframes lineBall
  0%
    transform translateY(-101%)
  100%
    transform translateY(101%)

.four-line-ball
  display grid
  grid-template-columns repeat(4, 1fr)
  width 24vmin
  height 24vmin
  position absolute
  top 50%
  left 50%
  clip-path circle(50% at 50% 50%)
  transform translate(-50%, -50%) rotate(35deg)
  border-radius 50%
  overflow hidden
  .wrap
    height 200px
    transform translateY(-100%)
    background linear-gradient(rgba(255, 25, 82, 0.9), rgba(18, 86, 179, 0.9))
    border-radius 5000px
    animation 1s cubic-bezier(0.7, -0.01, 0.18, 1.04) 0s 1 normal forwards running lineBall
    &:nth-child(1)
      animation-delay 0.15s
    &:nth-child(2)
      animation-delay 0.3s
    &:nth-child(3)
      animation-delay 0.25s
    &:nth-child(4)
      animation-delay 0.2s
</style>
