<template lang="pug">
  div#app
    full-page(ref="fullpage" :options="options")
      .section
        CircleIn
        Rain
        FourLineBall
        WiggleText(text="Yyi")
        NoiseWhite
        //WhiteShow(:text="date.format('YYYY.MM.DD')")
        SkewTextIn
        //FourLine
        // Date(:date="date")
        .layer
          Fireworks(ref="fireworks")
      .section
        p Second section ...
        button(@click="add()") add
      .section(v-if="page")
        p Hello
</template>

<script>
import Date from '@/components/Date'
import CircleIn from '@/components/CircleIn'
import Rain from '@/components/Rain'
import FourLineBall from '@/components/FourLineBall'
import WiggleText from '@/components/WiggleText'
import NoiseWhite from '@/components/NoiseWhite'
import SkewTextIn from '@/components/SkewTextIn'
import WhiteShow from '@/components/WhiteShow'
import FourLine from '@/components/FourLine'
import Fireworks from '@/components/Fireworks'
import moment from 'moment'

export default {
  components: {
    Date,
    CircleIn,
    Rain,
    FourLineBall,
    WiggleText,
    NoiseWhite,
    SkewTextIn,
    WhiteShow,
    FourLine,
    Fireworks
  },
  data() {
    return {
      date: moment('20200320'),
      page: false,
      options: {
        v2compatible: true,
        sectionsColor: ['#000', '#ff5f45', '#0798ec']
      }
    }
  },
  methods: {
    add() {
      this.page = true
      this.$refs.fullpage.build()
    }
  }
}
</script>

<style lang="stylus">
body, html
  margin 0
  padding 0
  .section
    .fp-tableCell
      display flex
      justify-content center
      align-items center
      .layer
        position absolute
        top 0
        left 0
        width 100%
        height 100%
</style>
