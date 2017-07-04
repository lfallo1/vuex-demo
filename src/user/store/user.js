export default {
    namespaced: true,
    state: {
        isLoggedIn: false
    },
    getters: {
        isLoggedIn(state, getters, rootState, rootGetters) {
            return state.isLoggedIn;
        }
    },
    mutations: {
        login(state) {
            console.log("login (user)");
            state.isLoggedIn = true;
        },
        logout(state) {
            state.isLoggedIn = false;
        }
    },
    actions: {
        login({ state, commit, rootState, rootGetters }) {
            debugger
            if (!rootGetters.isBanned) {
                commit('login', null, { root: false });
            } else {
                alert("Get outta here!");
            }
        },
        logout({ state, commit, rootState }) {
            commit('logout');
        }
    }
};
