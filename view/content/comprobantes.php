<div class="content_filters">
    <div class="filter filter_date">
        <div class="filter_date-from">
            <label for="filter_date-from">Desde: </label>
            <input type="date" id="filter_date-from">
        </div>
        <div class="filter_date-until">
            <label for="filter_date-until">Hasta: </label>
            <input type="date" id="filter_date-until">
        </div>
    </div>
    <div class="filter filter_time">
        <div class="filter_time-from">
            <label for="filter_time-from">De: </label>
            <input type="time" id="filter_time-from">
        </div>
        <div class="filter_time-until">
            <label for="filter_time-until">a: </label>
            <input type="time" id="filter_time-until">
        </div>
    </div>
    <div class="filter filter_name">
        <div class="filter filter_category">
            <div class="filter_category-from">
                <select name="" id="">
                    <option value="" selected>Seleccione tipo de comprobante</option>
                    <option value="">Opcion 01</option>
                    <option value="">Opcion 02</option>
                    <option value="">Opcion 03</option>
                </select>
            </div>
        </div>
        <div class="filter_name-button">
            <button class="button">Buscar</button>
        </div>
    </div>
</div>
<div class="container_table table_auto">
    <table class="table_content">
        <thead>
            <tr>
                <th>Tipo comprobante</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Estado </th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td>Cliente 01<?php echo $i ?></td>
                    <td>14/07/2023</td>
                    <td>13:20</td>
                    <td>2</td>
                    <td>S/.235.00</td>
                    <td>
                        <button class="button">Cancelado</button>
                    </td>
                    <td>
                        <button class="button btn_action">
                            <i class="fa-light fa-eye"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="container_pagination">
    <div class=pagination>
        <a href="" class="pagination_number button">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <a href="" class="pagination_number button">1</a>
        <a href="" class="pagination_number button">2</a>
        <a href="" class="pagination_number button">3</a>
        <a href="" class="pagination_number button">
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
</div>