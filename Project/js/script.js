function openTab(event, tabName) {
  // Hide all tab contents
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Remove active class from all tab links
  var tablinks = document.getElementsByClassName("tablink");
  for (var i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the selected tab content and add active class to clicked tab
  document.getElementById(tabName).style.display = "block";
  event.currentTarget.className += " active";
}

// Set the default tab to Admission
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("Admission").style.display = "block";
});
<script>
    document.querySelector('.navbar-toggle').addEventListener('click', function() {
        document.querySelector('.main-menu').classList.toggle('show');
    });
</script>
