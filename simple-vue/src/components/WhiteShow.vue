<template lang="pug">
.white-show
  .wrap
    p {{ text }}
</template>

<script>
export default {
  props: {
    text: String
  }
}
</script>

<style lang="stylus">
@keyframes fadeIn
  0%
    opacity 0
  100%
    opacity 1

@keyframes slideIn
  0%
    transform translateX(-100%)
  100%
    transform translateX(0)

.white-show
  width 100%
  height 100vh
  position absolute
  top 0
  left 0
  display flex
  justify-content center
  align-items center
  background-color white
  opacity 0
  animation 0.25s ease-out 2.05s 1 normal forwards running fadeIn
  .wrap
    position absolute
    top 50%
    left 50%
    width 40%
    transform translate(-50%, -50%)
    padding 4px 30px
    overflow hidden
    //animation 1.4s ease-in-out 1.5s 2 normal forwards running kUnJWM;
    &:before
      content ""
      display block
      position absolute
      top 0px
      left 0px
      right 0px
      bottom 0px
      background-color black
      transform translateX(-100%)
      z-index -1
      animation 0.45s cubic-bezier(0, 0, 0.14, 0.99) 2.05s 1 normal forwards running slideIn
    p
      margin 0
      text-align center
      font-size 50px
      color #fff
      text-shadow 0px 1.4px 0px rgb(125, 215, 228), 0px -1.4px 0px rgb(240, 66, 37)
</style>
