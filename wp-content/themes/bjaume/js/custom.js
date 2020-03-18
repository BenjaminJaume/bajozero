// Custom JS
// Author: Benjamin Jaume

$(document).ready(async function() {
  //    console.log(window.location)
  //wp-json/wp/v2/users/4567
  axios
    .get(window.location.origin + "/bajozero/wp-json/wp/v2/client/30")
    .then(({ data }) => {
      //    console.log(data.acf.name)
    })
    .catch(err => console.log);

  let test = 10;
  //   console.log(test);
});
