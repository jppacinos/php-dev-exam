<script>
import Spiral from './components/Spiral.vue'
import { getBreakdowns } from './api/breakdowns'
import { getRandoms } from './api/randoms'

export default {
  components: {
    Spiral
  },

  data: () => {
    return {
      breakdowns: '',
      randoms: ''
    }
  },

  async mounted() {
    this.breakdowns = (await getBreakdowns()).data
      .map(breakdown => breakdown.values)
      .join(' ')

    this.randoms = (await getRandoms()).data
      .map(random => random.values)
      .join(' ')
  }
}
</script>

<template>
  <div>
    <!--
          7. Retrieve only the entries from Random (table) that was not displayed
          yet and display all the corresponding breakdown in a spiral
          manner using only HTML, Javascript, CSS, PHP, or all of the above.
    -->
    <div class="container">
      <div v-if="breakdowns.length >= 1" class="group">
        <Spiral :textContent="breakdowns" :height="1350" :rotate="4" :y="2" />
      </div>
      <div v-if="randoms.length >= 1" class="group">
        <Spiral :textContent="randoms" :height="700" :rotate="15" :y="10" />
      </div>
    </div>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: space-around;
  flex-wrap: wrap;
}

@media (max-width: 768px) {
  .container .group {
    width: 100%;
    height: 500px;
    margin-bottom: 15%;
  }
}
</style>
