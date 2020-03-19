<template lang="pug">
  div#app
    full-page(ref="fullpage" :options="options")
      .section
        header(:class="{ show: isShowHeader }")
          p(v-if="!isNext") 画面をタップすると花火が出るよ
          p(v-else) スクロールで次のページへ
        CircleIn
        //Rain
        //FourLineBall
        //WiggleText(text="Yyi")
        //Noise
        //SkewTextIn
        //WhiteShow(:text="date.format('YYYY.MM.DD')")
        //Noise(bg="#000" :delay="2.15" :zIndex="1")
        //FourLine
        //Background
        //MainText
        //SubText
        //PointText
        //UnderText(:date="date")
        //Noise(:delay="3.3" :zIndex="2")
        //.layer
        //  Fireworks(ref="fireworks" :hue="hue" @fire="fire")
      .section
        Section1
</template>

<script>
import CircleIn from '@/components/CircleIn'
import Rain from '@/components/Rain'
import FourLineBall from '@/components/FourLineBall'
import WiggleText from '@/components/WiggleText'
import Noise from '@/components/Noise'
import SkewTextIn from '@/components/SkewTextIn'
import WhiteShow from '@/components/WhiteShow'
import FourLine from '@/components/FourLine'
import Background from '@/components/Background'
import MainText from '@/components/MainText'
import SubText from '@/components/SubText'
import PointText from '@/components/PointText'
import UnderText from '@/components/UnderText'
import Fireworks from '@/components/Fireworks'
import Section1 from '@/components/Section1'
import moment from 'moment'

export default {
  components: {
    CircleIn,
    Rain,
    FourLineBall,
    WiggleText,
    Noise,
    SkewTextIn,
    WhiteShow,
    FourLine,
    Background,
    MainText,
    SubText,
    PointText,
    UnderText,
    Fireworks,
    Section1
  },
  data() {
    return {
      date: moment('20200320'),
      hue: 10,
      isShowHeader: false,
      isNext: false,
      page: false,
      options: {
        v2compatible: true,
        sectionsColor: ['#000', '#000'],
        touchSensitivity: 15,
        afterLoad: this.afterLoad
      }
    }
  },
  methods: {
    fire(count) {
      this.hue = Math.floor( Math.random() * (500 + 1 - 0) ) + 0;
      if (count > 5) {
        this.isNext = true
      }
    },
    afterLoad() {
      console.log("Emitted 'after load' event.");
    }
  },
  mounted() {
    const self = this
    setTimeout(() => {
      self.isShowHeader = true
      //self.$refs.fireworks.start()
      //self.$refs.fireworks.tappable()
    }, 4300)
  }
}
</script>

<style lang="stylus">
body, html
  margin 0
  padding 0
  .section
    .fp-tableCell
      position relative
      display flex
      justify-content center
      align-items center
      .layer
        position absolute
        top 0
        left 0
        width 100%
        height 100%
        z-index 10
    header
      position absolute
      top 0
      left 0
      width 100%
      height 80px
      background rgba(#000, .8)
      z-index 15
      display flex
      justify-content center
      align-items center
      transition .8s
      transition-delay 3.5s
      transform translateY(-80px)
      &.show
        transform translateY(0px)
      p
        margin 0 auto
        color #fff
</style>
