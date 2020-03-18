<template lang="pug">
.four-line
  .line
  .line
  .line
  .line
</template>

<style lang="stylus">
@keyframes goLineTop
  0%
    transform translateY(-100%)
  100%
    transform translateY(100%)

@keyframes goLineBottom
  0%
    transform translateY(100%)
  100%
    transform translateY(-200%)

.four-line
  width 100%
  height 100vh
  position absolute
  top 0
  left 0
  display grid
  grid-template-columns repeat(4, 1fr)
  .line
    &:before
      content ""
      display block
      width 100%
      height 100%
      transform translateY(-100%)
      border-radius 9999px
      background linear-gradient(rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.25) 100%), linear-gradient(to right, rgba(18, 86, 179, 0.9), rgba(255, 25, 82, 0.9))
      animation 0.6s cubic-bezier(0.4, 0.26, 0.15, 0.99) 0s 1 normal forwards running goLineTop
      animation-delay 2.75s
    &:nth-child(2)
      &:before
        animation 0.6s cubic-bezier(0.4, 0.26, 0.15, 0.99) 0s 1 normal forwards running goLineBottom
        animation-delay 2.8s
    &:nth-child(3)
      &:before
        animation-delay 2.8s
    &:nth-child(4)
      &:before
        animation 0.6s cubic-bezier(0.4, 0.26, 0.15, 0.99) 0s 1 normal forwards running goLineBottom
        animation-delay 2.75s
</style>
