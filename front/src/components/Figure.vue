<template>
  <div class="=figure"> <!-- TODO - On click, open figure resume modal or open linked wiki -->
    <img class="=figure__icon" :src="figure.icon" :alt="fullName">
    <span class="=figure__name"> {{ fullName }} </span>
  </div>
</template>

<script>
export default {
  name: 'Figure',
  props: {
    figure: Object // TODO - object structure validation
  },
  computed: {
    fullName () {
      return `${this.figure.firstname} ${this.figure.lastname}`
    }
  }
}
</script>

<style scoped lang="scss">
.figure {
  &__icon {

  }
  &__name {

  }
}
</style>
