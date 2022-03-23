import { createRouter, createWebHistory } from 'vue-router'
import ListeView from '../views/liste.vue'
import Ajoutiew from '../views/ajout.vue'
import ModifView from '../views/modification.vue'
import ProduitView from '../views/produit.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'liste',
      component: ListeView
    },
    {
      path: '/ajout',
      name: 'ajout',
      component: Ajoutiew
    },
    {
      path: '/modif',
      name: 'modif',
      component: ModifView
    },
    {
      path: '/produit',
      name: 'produit',
      component: ProduitView
    }
  ]
})
export default router
