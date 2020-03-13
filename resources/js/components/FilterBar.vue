<template>
    <div class="filter-bar">
      <form class="form-inline">
        <div class="form-group">
          <label>Busca por:</label>
          <input type="text" v-model="filterText" class="form-control" @keyup.enter="doFilter" placeholder="nombre, email, nick o rol">
          <button class="btn btn-primary" @click.prevent="doFilter">Buscar</button>
          <button class="btn" @click.prevent="resetFilter">Reset</button>
        </div>
        <div class="form-group float-right mx-6">
          <button class="btn btn-primary" @click.prevent="redirectCreate">Crear Nuevo</button>
        </div>
      </form>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        filterText: ''
      }
    },
    methods: {
      redirectCreate() {
        window.location.href = 'http://agilgob.test/users/create';
      },
      doFilter () {
        this.$events.fire('filter-set', this.filterText)
      },
      resetFilter () {
        this.filterText = ''
        this.$events.fire('filter-reset')
      }
    }
  }
</script>
<style>
.filter-bar {
  padding: 10px;
}
</style>
