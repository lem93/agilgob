<template>
    <div class="">
          <div class="flex justify-center bg-gray-200">
        <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">
          <vuetable ref="vuetable"
            api-url="https://vuetable.ratiw.net/api/users"
            :fields="['name', 'nickname', 'email', 'gender']"
          ></vuetable>
          </div>
      </div>
    </div>
</template>

<script>
import Vuetable from 'vuetable-2'

export default {
  components: {
    Vuetable
  }
}

</script>
