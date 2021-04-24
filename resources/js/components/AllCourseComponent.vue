<template>
  <div>
    <h2 class="text-center">Course List</h2>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <!-- <th>Actions</th> -->
        </tr>
      </thead>
      <tbody>
        <tr v-for="course in courses" :key="course.id">
          <td>{{ course.id }}</td>
          <td>{{ course.name }}</td>
          <td>{{ course.description }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      courses: [],
    };
  },
  created() {
    this.axios.get("/e-learning/public/api/course").then((response) => {
      this.courses = response.data;
    });
  },
  /*   methods: {
            deleteProduct(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/products/${id}`)
                    .then(response => {
                        let i = this.products.map(data => data.id).indexOf(id);
                        this.products.splice(i, 1)
                    });
            }
        } */
};
</script>