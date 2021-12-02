
PagerDuty.api({token: 'su+5n_XdrViGnYFELTyxQ', endpoint: '/services'})
  .then(response => console.log(response.data))
  .catch(console.error);

  var api_version = "2";
  $.ajax({
    url: "https://api.pagerduty.com",
    type: "GET",
    headers: {"Accept": "application/vnd.pagerduty+json;version=" + api_version}
  });

var fileInput = document.getElementById("csv-file-input")

fileInput.addEventListener('change', readFile);
  Papa.parse(fileInput.files[0], {
    header: true,
    download: true,
    dynamicTyping: true,
    complete: function(results) {
      console.log(results);
      data = results.data;
    }
});