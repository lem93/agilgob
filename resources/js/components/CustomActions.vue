  <template>
    <div class="custom-actions">
      <button class="btn btn-sm" @click="editAction(rowData)"><i class="glyphicon glyphicon-pencil"></i></button>
      <button class="btn btn-sm" @click="deleteAction(rowData)"><i class="glyphicon glyphicon-trash"></i></button>
    </div>
  </template>

  <script>
  export default {
    props: {
      rowData: {
        type: Object,
        required: true
      },
      rowIndex: {
        type: Number
      }
    },
    methods: {
      editAction (data) {
        window.location.href = 'http://agilgob.test/users/'+data.nick+'/edit';
      },
      deleteAction(data){
        window.location.href = 'http://agilgob.test/users/'+data.nick+'/delete';
      }
    }
  }
  </script>

  <style>
    .custom-actions button.ui.button {
      padding: 8px 8px;
    }
    .custom-actions button.ui.button > i.icon {
      margin: auto !important;
    }
  </style>
