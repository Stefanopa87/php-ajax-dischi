 function init() {
     new Vue({
         el: "#app",
         data: {

             all: [],
         },
         mounted() {
             axios.get('data.php')
                 .then(data => {

                     let elem = data.data;

                     this.all = elem;

                     console.log(elem);
                 })
                 .catch(error => {
                     console.log(error);
                 })
         }
     });
 }
 document.addEventListener("DOMContentLoaded", init);