import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import {ref} from 'vue'

const app = createApp(App)

app.use(router)


var bd;

var requete = indexedDB.open("ProduitBD", 1);

requete.onupgradeneeded = function(event){
	var bd = event.target.result;
	
	var options = {
		keyPath: "id",
		autoIncrement: true
	};
	var produits = bd.createObjectStore("Produits", options);
	
	produits.createIndex("mainIndex", "id");
	
	produits.transaction.oncomplete = function(event){
		var trans = bd.transaction("Produits", "readwrite");
		var posts = trans.objectStore("Produits");
		
		produits.add({
			userId: 1,
			nom: "Iphone 13",
			prix: "800$",
			fournisseurs :"Apple",
			quantite : "1",
		});
		
		produits.add({
			userId: 2,
			nom: "Galaxy S22",
			prix: "500$",
			fournisseurs :"Samsung",
			quantite : "1",
		});
		produits.add({
			userId: 3,
			nom: "Pixel 6",
			prix: "400$",
			fournisseurs :"Google",
			quantite : "1",
		});
	};
};



const chargementBD = new Promise(function(resolve,reject){
	requete.onerror = function(event){
		reject(event.target.errorCode);
	};

	requete.onsuccess = function(event){
		bd = event.target.result;	
		resolve();
	};
}) 
chargementBD.then(function(){
	Vue.createApp({	

		//Appelé automatiquement lors de la création
		created: function(){
			this.fetchPosts();
		},
		
		
		methods: {

			//Obtenir tous les films de la BD
			fetchPosts: function(){
				var component = this;
				var transaction = bd.transaction(["Posts"], "readonly");
				var posts = transaction.objectStore("Posts");
				posts.openCursor().onsuccess = function(event){
					var cursor = event.target.result;
					if(cursor){
						component.posts.push(cursor.value);
						cursor.continue();
					}
				};
			},

			//ébauche de méthode
			addPost: function(){
				var transaction = bd.transaction(["Posts"], "readonly");
				var posts = transaction.objectStore("Posts");
				var requete = posts.get(1);
				requete.onsuccess = function(event){
					console.log(event.target.result);
                    var mot = event.target.result;
                    console.log(afficher.value);
                    afficher.value=mot;
				};
				
			},
		},
	})
})


