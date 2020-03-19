<template lang="pug">
.glitch
  .text(v-for="i in 5" :class="{ last: i == 5}" :style="clipDelay(i)")
    p(:style="{ fontSize: fontSize + 'px' }" v-html="text")
</template>

<script>
export default {
  props: {
    fontSize: {
      type: Number,
      default: 20
    },
    text: {
      type: String,
      default: ''
    },
    delay: {
      type: Number,
      default: 0
    },
    delays: {
      type: Array,
      default: () => [0, 0.15, 0.1, 0.1]
    },
    hi: {
      type: Array,
      default: () => [0.55, 0.1, 0.25, 0.1]
    },
    line: {
      type: Number,
      defualt: 1
    }
  },
  methods: {
    clipDelay(n) {
      let before = 0
      if (n > 1) {
        for (let i = 0; i < n - 1; i++) {
          before += this.hi[i]
        }
      }
      const start = this.fontSize * this.line * before
      let end = start + this.fontSize * this.line * this.hi[n - 1]
      if (n == this.hi.length) {
        end = end + 10
      }
      return {
        clip: `rect(${start}px, 9999px, ${end}px, 0)`,
        animationDelay: this.delay + this.delays[n - 1] + 's'
      }
    }
  }
}
</script>

<style lang="stylus">
@keyframes glitch1
  0%, 100%
    transform translateX(0px)
  50%
    transform translateX(-50%)
@keyframes glitch2
  0%, 100%
    transform translateX(0px)
  50%
    transform translateX(70%)
@keyframes glitch3
  0%, 100%
    transform translateX(0px)
  50%
    transform translateX(-70%)
@keyframes glitch4
  0%, 100%
    transform translateX(0px)
  50%
    transform translateX(50%)

.glitch
  position initial
  .text
    p
      margin 0
      text-align center
      line-height 1
      font-weight bold
    &.last
      visibility hidden
    &:not(.last)
      position absolute
      top 0
      left 0
      width 100%
      height 100%
    &:nth-of-type(1)
      animation 0.2s ease-in-out 0s 1 normal forwards running glitch1
    &:nth-of-type(2)
      animation 0.2s ease-in-out 0.15s 1 normal forwards running glitch2
    &:nth-of-type(3)
      animation 0.2s ease-in-out 0.1s 1 normal forwards running glitch3
    &:nth-of-type(4)
      animation 0.2s ease-in-out 0.1s 1 normal forwards running glitch4
</style>
