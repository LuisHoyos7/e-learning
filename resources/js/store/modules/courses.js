const courses = {
  namespaced: true,
  state: {
    courses: []
  },
  mutations: {
    SET_COURSES(state, payload) {
      state.courses = payload;
    }
  },
  actions: {
    async getCourses({ commit, state }) {
      if (state.courses.length == 0) {
        return new Promise((resolve, reject) => {
          axios
            .get('/course')
            .then(res => {
              commit('SET_COURSES', res.data);
              resolve(res.data);
            })
            .catch(error => {
              reject(error);
            });
        });
      }
    }
  }
};

export default courses;
