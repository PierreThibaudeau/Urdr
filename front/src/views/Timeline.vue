<template>
  <EventSummary :event="event" msg="Welcome to Your Vue.js App"/>
</template>

<script>
import EventSummary from '@/components/EventSummary.vue'

export default {
  name: 'Timeline',
  data: () => ({
    event: {
      date: '3 avril 1996',
      title: 'ceci n\'est pas un test',
      summary: 'ceci est un test',
      source: 'http://coucou.fr',
      figures: [{
        icon: 'http://coucou.fr',
        firstname: 'robinson',
        lastname: 'crusoë'
      }]
    }
  }),
  components: {
    EventSummary
  }
}
</script>
