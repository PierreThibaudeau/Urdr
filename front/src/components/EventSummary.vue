<template>
  <div class="summary">
    <div class="summary__date">
      {{ event.date }}
    </div>
    <div class="summary__title">
      {{ event.title }}
    </div>
    <div class="summary__figures" v-if="event.figures"> <!-- TODO - transform this into a component -->
      <div class="summary__figure" v-for="figure in event.figures" @click="openModalOrSource(figure)"> <!-- TODO - On click, open figure resume modal or open linked wiki -->
        <img class="summary__figure__icon" src="{{ figure.icon }}" alt="{{ getFullName(figure) }}">
        <span class="summary__figure__name"> {{ getFullName(figure) }} </span>
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
    },
    computed: {

    },
    methods: {
      getFullName(figure) {
        return `${figure.firstame} ${figure.lastname}`
      },
      openModal(figure) {

      }
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
    &__figure {
      &__icon {

      }
      &__name {

      }
    }
    &__description {

    }
    &__source {

    }
  }
</style>
