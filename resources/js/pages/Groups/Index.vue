<template>
  <router-view />
</template>

<script>
import { mapActions } from 'vuex';

export default {
  name: 'Groups',
  created() {
    this.getGroups();
  },
  methods: {
    ...mapActions('groups', ['getGroups'])
  }
};
</script>