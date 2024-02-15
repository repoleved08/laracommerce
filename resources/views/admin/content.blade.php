<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-person text-secondary"></i>
                    </div>
                    <h5 class="my-3">Users</h5>
                    <div class="text-muted">{{$total_users}}  Users</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-truck text-secondary"></i>
                    </div>
                    <h5 class="my-3">Products</h5>
                    <div class="text-muted">{{$total_products}} New Products</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-receipt text-warning"></i>
                    </div>
                    <h5 class="my-3">Orders</h5>
                    <div class="text-muted">{{$total_orders}} New Orders</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 67%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-coin text-info"></i>
                    </div>
                    <h5 class="my-3">Revenue</h5>
                    <div class="text-muted">${{$total_revenue}}</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-cursor text-success"></i>
                    </div>
                    <h5 class="my-3">Processed</h5>
                    <div class="text-muted">{{$total_delivered}}</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div class="display-5">
                        <i class="bi bi-arrow-clockwise text-success"></i>
                    </div>
                    <h5 class="my-3">Processing</h5>
                    <div class="text-muted">{{$total_processing}}</div>
                    <div class="progress mt-3" style="height: 5px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
