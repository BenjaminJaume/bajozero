// Custom JS
// Author: Benjamin Jaume
const myModule = require('./myModule.js')

$( document ).ready(async function() {
//    console.log(window.location)
   //wp-json/wp/v2/users/4567
   axios.get(window.location.origin + '/bajozero/wp-json/wp/v2/client/30').then(({data}) => {
       console.log(data.acf.name)
   }).catch(err => console.log)

   let test = 10
   console.log(test)
   const result = await doStuff()
   myModule()
   console.log(result)
});


const doStuff = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('stuff happened')
        }, 1000)
    })
}