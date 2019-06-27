<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12 col-md-12">

 			<div class="card-header">Products</div>
 			<br>
 				<div class="card-deck">					
				  	<div class="card" v-for="product in products">
				    <img v-bind:src="'/images/'+  product.picture" style="width: 120px;height: 120px;" class="rounded mx-auto d-block" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">{{product.name}}</h5>
					      <p class="card-text">&euro;{{ parseFloat(Math.round(product.price * 100) / 100).toFixed(2) }}</p>		      
					    </div>
				  	</div>
				</div>

             
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    	data() {
    		return {
    			products: []
    		}
    	},
    	created(){
    		axios.get('/getProducts')
    			.then(({data}) => this.products = data);
    	},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
