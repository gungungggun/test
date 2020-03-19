<template lang="pug">
.background
</template>

<style lang="stylus">
.background
  position absolute
  height 100vh
  top 0px
  left 0px
  right 0px
  bottom 0px
  opacity 0
  background linear-gradient(64deg, rgba(#15181b, 0.9), rgba(25, 25, 82, 0.9)) #000
  z-index 1
  &:after
    content ""
    display block
    position absolute
    top 0px
    left 0px
    right 0px
    bottom 0px
    opacity 0.5
    background: url('https://i.pinimg.com/originals/2b/42/9d/2b429d8775f23a62c0335f5cd78ca14c.jpg') center center / cover no-repeat
</style>
