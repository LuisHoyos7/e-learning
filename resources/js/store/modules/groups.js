import isEmpty from 'lodash/isEmpty';

const groups = {
  namespaced: true,
  state: {
    groups: [],
    group: {}
  },
  mutations: {
    SET_GROUPS(state, payload) {
      state.groups = payload;
    },
    SET_GROUP(state, payload) {
      state.group = payload;
    },
    ADD_GROUP(state, payload) {
      state.groups.push(payload);
    },
    EDIT_GROUP(state, { groupId, payload }) {
      const index = state.groups.findIndex(group => group.id === groupId);
      state.groups[index] = payload;
    },
    REMOVE_GROUPS(state, groupId) {
      const index = state.groups.findIndex(group => group.id === groupId);
      if (index !== -1) {
        state.groups.splice(index, 1);
      }
    }
  },
  actions: {
    async getGroups({ commit, state }) {
      if (state.groups.length == 0) {
        return new Promise((resolve, reject) => {
          axios
            .get('/group')
            .then(res => {
              commit('SET_GROUPS', res.data);
              resolve(res.data);
            })
            .catch(error => {
              reject(error);
            });
        });
      }
    },
    async getGroup({ commit }, groupId) {
      return new Promise((resolve, reject) => {
        axios
          .get(`/group/${groupId}`)
          .then(res => {
            commit('SET_GROUP', res.data);
            resolve(res.data);
          })
          .catch(error => {
            reject(error);
          });
      });
    },
    async removeGroups({ commit }, groupId) {
      return new Promise((resolve, reject) => {
        axios
          .delete(`/group/${groupId}`)
          .then(res => {
            commit('REMOVE_GROUPS', groupId);
            resolve(res.data);
          })
          .catch(error => {
            reject(error);
          });
      });
    },
    async createGroup({ commit }, data) {
      return new Promise((resolve, reject) => {
        axios
          .post('/group', data)
          .then(res => {
            commit('ADD_GROUP', res.data);
            resolve(res.data);
          })
          .catch(error => {
            reject(error);
          });
      });
    },
    async editGroup({ commit }, { groupId, params }) {
      return new Promise((resolve, reject) => {
        axios
          .put(`/group/${groupId}`, params)
          .then(res => {
            commit('EDIT_GROUP', { groupId, payload: params });
            commit('SET_GROUP', res.data);
            resolve(res.data);
          })
          .catch(error => {
            reject(error);
          });
      });
    }
  }
};

export default groups;
