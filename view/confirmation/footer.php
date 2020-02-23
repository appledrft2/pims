
      <!-- FOOTER -->
      <footer class="container fixed-bottom">
        
        <p class="text-center text-black">&middot; Copyright &copy; <a href="" class="text-secondary">2019-2020</a> | Developed By: Philip Villanueva  &middot; </p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="../assets/js/jquery-3.3.1.slim.min.js" ></script>
    <script type="text/javascript" src="../assets/js/popper.min.js" ></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  </body>
</html>

<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script type="text/javascript">
function confirm_delete() {
  return confirm('Do you want to delete this record?');
}
</script>