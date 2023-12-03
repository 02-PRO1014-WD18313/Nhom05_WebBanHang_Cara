</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="js_admin/admin.js"></script>

<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        // type:'bar'
        data: {
            labels: [
                <?php
                foreach (chart_type() as $chart_order_prod) {
                    $check = $chart_order_prod->NAME_PROD_TYPE;
                    echo "'" . $check . "',";
                }

                ?>
            ],
            datasets: [{
                label: 'Đơn bán theo loại',

                data: [
                    <?php
                    foreach (chart_type() as $chart_order_prod) {
                        $check = $chart_order_prod->cong;
                        echo "'" . $check . "',";
                    }
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ]
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['NAME_PROD', 'NUMBER_OF_ORDERS'],
            <?php foreach (count_prod() as $chart_order_prod) {
                echo "['" . $chart_order_prod->NAME_PROD . "' , " . $chart_order_prod->NUMBER_OF_ORDERS . "],";
            } ?>
            // ['Work', 11],
            // ['Eat', 2],
            // ['Commute', 2],
            // ['Watch TV', 2],
            // ['Sleep', 7]
        ]);

        var options = {
            title: 'Đơn bán theo sản phẩm'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js_admin/sweetalert.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- <script>
        swal({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
        });
    </script> -->

</html>