<div class="container">
    <div class="container-fluid mt-4  custom-border  p-4">
        <h4 class="font-weight-bold">Thống kê</h4>
        <div class="row">
            

            <!-- Đơn hàng -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-center">
                                <h3 class="mb-0"><?=demsp()?></h3>
                                <p class="text-muted">Sản phẩm</p>
                            </div>
                            <div class="col-4 text-center d-flex align-items-center">
                                <i class="fa-solid fa-tag fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bình luận -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-center">
                                <h3 class="mb-0"><?=demtt(0)?></h3>
                                <p class="text-muted">Đơn hàng mới</p>
                            </div>
                            <div class="col-4 text-center d-flex align-items-center">
                                <i class="fa-solid fa-cart-shopping fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thu nhập -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-center">
                                <h3 class="mb-0"><?=calculate_total_revenue_this_month()?> VNĐ</h3>
                                <p class="text-muted">Doanh thu trong tháng</p>
                            </div>
                            <div class="col-4 text-center d-flex align-items-center">
                                <i class="fa-solid fa-money-bill fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4 mb-4 custom-border  p-4">
        <h4 class="font-weight-bold">Báo cáo</h4>
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="font-weight-bold h5">Top 8 bán chạy nhất</label>
                            <div class="card">
                                <canvas id="Best-seller"></canvas>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="" class="font-weight-bold h5">Doanh số 4 tháng gần đây</label>
                            <div class="card">
                                <canvas id="Recent-sales-Chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<style>
    .custom-border {
        border: 1px solid rgba(0, 0, 0, 0.125);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>


    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"
      integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      defer
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway"
    />
<script>
    


  $(document).ready(function () {
    $("body").addClass("loaded");
    const data1 = [
        // { month: 6, Sales: 30 },
        // { month: 7, Sales: 50 },
        // { month: 8, Sales: 60 },
        // { month: 9, Sales: 40 },
        // { month: 10, Sales: 100 },
        // { month: 11, Sales: 150 },
        <?php $doanhthu=calculate_total_revenue_for_recent_months(); foreach ($doanhthu as $dt): ?>
            <?= '{ month: '.$dt['month'].', Sales: '.$dt['Sales'].' },' ?>
            <?php endforeach; ?>
    ];

    new Chart($("#Recent-sales-Chart"), {
        type: "bar",
        data: {
        labels: data1.map((row) => row.month),
        datasets: [
            {
            label: "Doanh số",
            backgroundColor: "rgba(0,255,0,0.3)",
            borderColor:"rgb(0,255,0)",
            borderWidth:1,
            data: data1.map((row) => row.Sales),
            },
        ],
        },
    });
    
    // Gọi hàm để lấy danh sách sản phẩm bán chạy nhất
    var bestSellers = <?= json_encode(loadall_sanpham_banchay()) ?>;

    // Chuyển đổi dữ liệu thành định dạng phù hợp cho biểu đồ
    var labels = [];
    var data = [];
    var backgroundColors = [];

    bestSellers.forEach(function (product, index) {
        labels.push(product.name);
        data.push(product.tong_soluong_ban);
        // Tùy chỉnh màu sắc cho từng sản phẩm
        var randomColor = Math.floor(Math.random()*16777215).toString(16); // Tạo màu ngẫu nhiên
        backgroundColors.push("#" + randomColor);
    });

    // Cập nhật dữ liệu cho biểu đồ pie
    var bestSellerChart = new Chart($("#Best-seller"), {
        type: "pie",
        data: {
            labels: labels,
            datasets: [
                {
                    label: '',
                    data: data,
                    backgroundColor: backgroundColors,
                    hoverOffset: 8,
                },
            ],
        },
    });
});



</script>
