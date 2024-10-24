import { defineStore } from 'pinia'

export const useTestStore = defineStore('test', {
    state: () => ({
        test: 1234,
        name: 'Test name asdasd'
    }),

    getters: {
    },

    actions: {

    },
})