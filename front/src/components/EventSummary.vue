<template>
  <div class="summary">
    <div class="summary__date">
      {{ event.date }}
    </div>

    <div class="summary__title">
      {{ event.title }}
    </div>

    <div class="summary__figures" v-if="event.figures">
      <Figure :key="figure.firstname" v-for="figure in event.figures" :figure="figure"></Figure>
    </div>

    <div class="summary__text">
      {{ event.summary }} <!-- TODO - if description exists, opens a description modal -->
    </div>

    <div class="summary__source" v-if="event.source">
      <a :href="event.source">Source</a>
    </div>
  </div>
</template>

<script>
import Figure from '@/components/Figure.vue'

export default {
  name: 'EventSummary',
  props: {
    event: Object
  },
  components: {
    Figure
  }
}
</script>

<style scoped lang="scss">
  .summary {
    &__date {

    }
    &__title {

    }
    &__figures {

    }
    &__description {

    }
    &__source {

    }
  }
</style>
