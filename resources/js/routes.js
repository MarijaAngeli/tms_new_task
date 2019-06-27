import VueRouter from 'vue-router'

let routes = [

	{
	 name:'home',	
	 path: '/',
	  component: require('./components/UsersListing').default 
	},
	{ path: '/useredit',
	  component: require('./components/Users').default 
	},
	{ path: '/products',
	  component: require('./components/Products').default 
	},

];

export default new VueRouter({

	routes

})