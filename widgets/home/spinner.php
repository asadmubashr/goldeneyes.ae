<!-- Loader -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow" style="width: 3rem; height: 3rem; color: #e65100" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script>
    function fetchData() {
        // Show the spinner
        document.getElementById('spinner').classList.add('show');

        // Simulate fetching data (setTimeout for demonstration purposes)
        setTimeout(function () {
            // Your data fetching logic here...

            // Hide the spinner when the operation is completed
            document.getElementById('spinner').classList.remove('show');
        }, 500); // Simulating a 3-second delay for data fetching
    }

    // Call the function to start the process
    fetchData();
</script>