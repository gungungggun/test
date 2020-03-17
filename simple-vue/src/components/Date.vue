<template lang="pug">
.date
  span.year {{ date.format('YYYY') }}
  span.dot .
  span.month {{ date.format('MM') }}
  span.dot .
  span.day {{ date.format('DD') }}
  span {{ date.format('ddd').toUpperCase() }}
</template>

<script>
export default {
  props: {
    date: Object
  }
}
</script>

<style lang="stylus">
.date
  span
    font-size 30px
    color #fff
    padding 0 2px
</style>
