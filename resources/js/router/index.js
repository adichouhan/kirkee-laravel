import Vue from 'vue'
import Router from 'vue-router'

// Dashboard Components

import dashboard from '../views/dashboard.vue'
import overview from '../views/overview.vue'
import orderhistory from '../views/orderhistory.vue'
import settings from '../views/settings.vue'
import messages from '../views/messages.vue'
import notification from '../views/notification.vue'
import account from '../views/account.vue'
import tour from '../views/tour.vue'
import orderhistory2 from '../views/orderhistory2.vue'
import orderhistory3 from '../views/orderhistory3.vue'
import orderform from '../views/orderform.vue'


// Sample Pages
import error404 from '../views/sample-pages/error-404'
import error500 from '../views/sample-pages/error-500.vue'
import login from '../views/sample-pages/login.vue'
import register from '../views/sample-pages/register.vue'
import app from '../App'
import register1 from '../components/Register'
import home from '../views/home'
import Login from '../components/Login.vue'
import ForgetPassword from '../components/ForgetPassword.vue'
import ActivateAccount from '../components/ActivateAccount.vue'
import purchase from '../views/purchase'
import user from  '../components/User/index'
import usercreate from  '../components/User/create'

Vue.use(Router)


  const routes = [{
    path: '/dashboard',
    name: 'dashboard',
    component: {
      main: dashboard
    },
    meta: { requiresAuth: true }
  },

  {
    path: '/register',
    name: 'register1',
    components: {
      main: register1
    }
  },
  {
    path: '/purchase',
    name: 'purchase',
    components: {
      main: purchase
    }
  },
  {
    path: '/login',
    name: 'Login',
    components: {
      main: Login
    }
  },
  {
    path: '/activateAccount',
    name: 'ActivateAccount',
    components: {
      main: ActivateAccount
    }
  },
  {
    path: '/forgetPassword',
    name: 'ForgetPassword',
    components: {
      main: ForgetPassword
    }
  },
  {
    path: '/',
    name: 'home',
    components: {
      main: home
    }
  },
  {
    path: '/404',
    name: 'error-404',
    components: {
      main: error404
    }
  },
  {
    path: '/app',
    name: 'app',
    base: '/admin',
    components: {
      main: app
    },

    children: [
      {
        path: '/overview',
        name: 'overview',
        component: overview,
        meta: { requiresAuth: true }
      },
      {
        path: '/orderhistory',
        name: 'orderhistory',
        component: orderhistory,
        meta: { requiresAuth: true }
      },
      {
        path: '/orderhistory2',
        name: 'orderhistory2',
        component: orderhistory2,
        meta: { requiresAuth: true }
      },
      {
        path: '/orderform',
        name: 'orderform',
        component: orderform,
        meta: { requiresAuth: true }
      },
      {
        path: '/orderhistory3',
        name: 'orderhistory3',
        component: orderhistory3,
        meta: { requiresAuth: true }
      },
      {
        path: '/settings',
        name: 'settings',
        component: settings,
        meta: { requiresAuth: true }
      },
      {
        path: '/messages',
        name: 'messages',
        component: messages,
        meta: { requiresAuth: true }
      },
      {
        path: '/tour',
        name: 'tour',
        component: tour,
        meta: { requiresAuth: true }
      },
      {
        path: '/notification',
        name: 'notification',
        component: notification,
        meta: { requiresAuth: true }
      },
      {
        path: '/account',
        name: 'account',
        component: account,
        meta: { requiresAuth: true }
      },
      {
        path: '/500',
        name: 'error-500',
        component: error500
      },

      {
        path: '/register',
        name: 'register',
        component: register
      },
      {
        path: '/users',
        name: 'user',
        component: user
      },
      {
        path: '/user/create',
        name: 'usercreate',
        component: usercreate
      },
      {
        path: '/user/edit/:id',
        name: 'usercreate',
        component: usercreate
      },

    ]
  }
  ]

const router = new Router({
  mode: 'history',
  routes
})

router.beforeEach((to, from, next) => {

  if (to.matched.some(record => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.
    next()
    // console.log(sessionStorage.getItem('user_session_key'));
    // if (sessionStorage.getItem('user_session_key')) {
    //   next()
    // } else {
    //   next({
    //     name: 'Login'
    //   })
    // }
  } else {
    next()
  }
})

export default router;