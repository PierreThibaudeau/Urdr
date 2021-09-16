<template>
  <div class="summary">
    <div class="summary__date">
      {{ event.date }}
    </div>
    <div class="summary__title">
      {{ event.title }}
    </div>
    <div class="summary__figures" v-if="event.figures">
      <div class="summary__figures__icon" v-for="figure in event.figures">
        <img src="{{ figure.icon }}" alt="{{ figure.name }}">
        <!-- TODO - On click, open figure resume modal or open linked wiki -->
      </div>
    </div>
    <div class="summary__text">
      {{ event.summary }} <!-- TODO - if description exists, opens a description modal -->
    </div>
    <div class="summary__source" v-if="event.source">
      <a href="{{ event.source }}">Source</a>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'EventSummary',
    props: {
      event: Object,
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

      &__icon {

      }
    }
    &__description {

    }
    &__source {

    }
  }
</style>
