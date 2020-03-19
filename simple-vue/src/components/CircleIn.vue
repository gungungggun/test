<template lang="pug">
.circle-in
  .wrap
</template>

<style lang="stylus">
@keyframes skewIn
  0%
    transform skewX(-140deg)
  100%
    transform skewX(0deg)

@keyframes scaleXIn
  0%
    transform scaleX(0)
  100%
    transform scaleX(1)

@keyframes scaleIn
  0%
    transform scale(0)
  100%
    transform scale(1)

.circle-in
  position absolute
  top 25% // calc(25% - 25vmin)
  left 50% //calc(50% - 25vmin)
  width 50vmin
  height 50vmin
  animation 0.6s ease-in-out 0.1s 1 normal forwards running skewIn
  .wrap
    position absolute
    width 100%
    height 100%
    animation 0.6s ease-in-out 0.1s 1 normal forwards running scaleXIn
    &:before, &:after
      content ""
      display block
      position absolute
      top 0px
      left 0px
      width 100%
      height 100%
      transform scale(0)
      border-radius 50%
      background linear-gradient(64deg, rgba(18, 86, 179, 0.9), rgba(255, 25, 82, 0.9))
    &:before
      animation 0.55s cubic-bezier(0.7, -0.01, 0.18, 1.04) 0.05s 1 normal forwards running scaleIn
    &:after
      background rgb(0, 0, 0)
      animation 0.55s cubic-bezier(0.7, -0.01, 0.18, 1.04) 0.2s 1 normal forwards running scaleIn
</style>
