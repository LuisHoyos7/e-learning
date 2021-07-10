<template>
  <router-view />
</template>

<script>
import { mapActions } from 'vuex';

export default {
  name: 'Courses',
  created() {
    this.getCourses();
  },
  methods: {
    ...mapActions('courses', ['getCourses'])
  }
};
</script>