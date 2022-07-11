(() => {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
})()

function test() {
    // alert('test');
    document.getElementById('in1').value = '';
    document.getElementById('in2').value = '';
    document.getElementById('in3').value = '';
    document.getElementById('date').value = '';

}
