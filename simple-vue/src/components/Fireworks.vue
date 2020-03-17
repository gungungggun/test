<template lang="pug">
.fireworks(ref="fireworks")
</template>

<script>
const randomBetween = (min, max) => ~~(Math.random() * (max - min + 1)) + min
const canvas = document.createElement('canvas')
const ctx = canvas.getContext('2d')
const PI2 = Math.PI * 2

class Particle {
  constructor(options) {
    const defaults = { x: 0, y: 0, radius: 10, direction: 0, velocity: 0, explode: false };

    Object.assign(this, defaults, options);

    this.velX = Math.cos(this.direction) * this.velocity;
    this.velY = Math.sin(this.direction) * this.velocity;

    this.friction = 0.9;
    this.decay = randomBetween(90, 91) * 0.01;
    this.gravity = this.radius * 0.01;
  }

  update() {
    this.x += this.velX;
    this.y += this.velY;

    this.velX *= this.friction;
    this.velY *= this.friction;
    this.velocity *= this.friction;

    // uncomment for a gravity like effect
    // this.velY += this.gravity;

    this.radius *= this.decay;
    this.gravity += 0.05;
  }
}

export default {
  props: {
    hue: {
      type: Number,
      default: 10
    }
  },
  data() {
    return {
      reqId: null,
      canvasWidth: 0,
      canvasHeight: 0,
      automate: true,
      particles: [],
      frame: 0,
    }
  },
  methods: {
    setStage() {
      this.clear()
      this.canvasWidth = window.innerWidth
      this.canvasHeight = window.innerHeight
      canvas.width = this.canvasWidth
      canvas.height = this.canvasHeight
    },
    createRandomParticles() {
      const margin = 100
      const x = randomBetween(margin, this.canvasWidth - margin)
      const y = randomBetween(margin, this.canvasHeight - margin)
      this.createParticles(x, y)
    },
    boom(e) {
      this.createParticles(e.clientX, e.clientY)
    },
    createParticles(x, y) {
      let numParticles = 50

      while (numParticles--) {
        const direction = Math.random() * PI2
        const velocity = randomBetween(10, 20)
        const radius = 10 + (Math.random() * 20)
        const explode = true
        const particle = new Particle({
          x,
          y,
          direction,
          velocity,
          radius,
          explode
        })
        this.particles.push(particle)
      }
    },
    clear() {
      ctx.globalCompositeOperation = 'destination-out'
      ctx.fillStyle = 'hsla(0, 0%, 0%, 0.5)'
      ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height)
      ctx.globalCompositeOperation = 'lighter'
    },
    loop() {
      this.clear()

      if (this.automate && this.frame % 75 === 0) {
        this.createRandomParticles()
      }

      this.particles.forEach((particle) => {
        const fill = `hsl(${this.hue}, 80%, 50%)`

        ctx.beginPath()
        ctx.fillStyle = fill
        ctx.arc(particle.x, particle.y, particle.radius, 0, PI2)
        ctx.fill()
        ctx.closePath()

        particle.update()

        if (Math.abs(particle.radius) <= 2 && particle.explode) {
          particle.explode = false
          let children = 10

          while (children--) {
            this.particles.push(new Particle({
              x: particle.x,
              y: particle.y,
              radius: particle.radius * 4,
              direction: Math.random() * PI2,
              velocity: particle.velocity * (randomBetween(2, 10)),
              explode: false
            }))
          }
        }

        if (particle.radius <= 0.1 || particle.velocity <= 0.1) {
          this.particles.splice(this.particles.indexOf(particle), 1)
        }
      });

      this.frame++
      requestAnimationFrame(this.loop)
    }
  },
  mounted() {
    this.automate = true

    canvas.addEventListener('mousedown', this.boom)
    window.addEventListener('resize', this.setStage)

    this.$refs.fireworks.appendChild(canvas)

    this.setStage()
    this.createRandomParticles()
    this.loop()
  }
}
</script>
