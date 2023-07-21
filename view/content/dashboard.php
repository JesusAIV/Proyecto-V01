<?php

$datos = [
    [
        'title' => 'Empleados',
        'amount' => '20',
        'url' => 'svg/report_employees.svg'
    ],
    [
        'title' => 'Clientes',
        'amount' => '12',
        'url' => 'svg/report_customers.svg'
    ],
    [
        'title' => 'Ventas',
        'amount' => '29',
        'url' => 'svg/report_sale.svg'
    ],
    [
        'title' => 'Compras',
        'amount' => '31',
        'url' => 'svg/report_shopping.svg'
    ],
    [
        'title' => 'Pedidos',
        'amount' => '36',
        'url' => 'svg/report_order.svg'
    ],
    [
        'title' => 'Ingresos',
        'amount' => '28',
        'url' => 'svg/report_income.svg'
    ],
    [
        'title' => 'Gastos',
        'amount' => '42',
        'url' => 'svg/report_loss.svg'
    ]
];
?>

<div class="reports_content">
    <?php foreach ($datos as $dato) { ?>
        <div class="report_body">
            <div class="report_icon">
                <img src="<?php $configC->rutaImage($dato['url']) ?>" alt="">
            </div>
            <div class="report_title">
                <span><?php echo $dato['title'] ?></span>
            </div>
            <div class="report_amount">
                <span><?php echo $dato['amount'] ?></span>
            </div>
        </div>
    <?php } ?>
</div>
<div class="repors_details">
    <div class="details_chart">
        <canvas id="grafico01"></canvas>
    </div>
    <div class="details_container-table">
        <div class="table_title">
            <span>Ventas recientes</span>
        </div>
        <div class="container_table">
            <table class="table_content">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 10; $i++) { ?>
                        <tr>
                            <td>Producto 0<?php echo $i ?></td>
                            <td>5</td>
                            <td>S/.500</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="repors_details">
    <div class="details_chart">
        <canvas id="grafico02"></canvas>
    </div>
    <div class="details_container-table">
        <div class="table_title">
            <span>Productos más vendidos</span>
        </div>
        <div class="container_table">
            <table class="table_content">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=1; $i <= 10; $i++) { ?>
                        <tr>
                            <td>Producto 0<?php echo $i ?></td>
                            <td>5</td>
                            <td class="table_stock">
                                <span>En Stock</span>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>