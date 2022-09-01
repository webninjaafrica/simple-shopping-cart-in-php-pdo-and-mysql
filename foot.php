
 <!-- paste the contents of your app footer here!-->
<?php
include_once("autoload.php");
$labels=array("School of the arts","School of the Biological sciences","School of the Chemical sciences","School of the Computer sciences","School of the Management","School of Communication","School of Educational Studies","School of Educational Studies","School of Housing, Building And Planning");

                    $values=array(count(users::search_marched_users("school","School of the arts")),count(users::search_marched_users("school","School of the Biological sciences")),count(users::search_marched_users("school","School of the Chemical sciences")),count(users::search_marched_users("school","School of the Computer sciences")),count(users::search_marched_users("school","School of the Management")),count(users::search_marched_users("school","School of Communication")),count(users::search_marched_users("school","School of Educational Studies")),count(users::search_marched_users("school","School of Educational Studies")),count(users::search_marched_users("school","")),count(users::search_marched_users("school","School of Housing, Building And Planning")));
                    $val=json_encode($values);
                    $lbs=json_encode($labels);
   ?>
</div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Student Feedback system</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script type="text/javascript" src="https://cdnjs.com/libraries/Chart.js"></script>
      
       
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script type="text/javascript">
    
    var options = {
          series: <?php echo $val; ?>,
          chart: {
          width: 580,
          type: 'pie',
        },
        labels: <?php echo $lbs; ?>,
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 500
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
    </body>
</html>
