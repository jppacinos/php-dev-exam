<script>
export default {
  props: ['textContent', 'height', 'rotate', 'y'],

  computed: {
    chars() {
      return this.textContent.match(/[a-z0-9\s]/gi)
    }
  }
}
</script>

<template>
  <div class="spiral">
    <span
      v-for="(char, i) in chars"
      :key="i"
      :style="{
        transform: `rotate3d(0, 0, 1, ${i * rotate}deg) translateY(${i * y}px)`,
        height: `${height}px`,
        transformOrigin: `bottom left`
      }"
      >{{ char }}</span
    >
  </div>
</template>

<style scoped>
.spiral {
  position: relative;
  transform: scale(0.2);
}

.spiral span {
  position: absolute;
  font-size: 6em;
}
</style>
