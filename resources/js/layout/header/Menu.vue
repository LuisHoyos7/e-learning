<template>
  <ul class="menu-nav">
    <template v-for="link in menu">
      <li class="menu-item menu-item-rel" aria-haspopup="true" :key="link.label">
        <BLink :to="link.route" class="menu-link">
          <span class="menu-text">{{ link.label }}</span>
          <span class="menu-desc"></span>
          <i class="menu-arrow"></i>
        </BLink>
      </li>
    </template>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      menu: [
        { route: { name: 'Groups' }, label: 'Grupos' },
        { route: { name: 'Courses' }, label: 'Cursos' }
      ]
    };
  }
};
</script>
