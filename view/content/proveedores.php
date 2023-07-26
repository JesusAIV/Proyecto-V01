<div class="content_button">
    <button class="button">Nuevo Proveedor</button>
</div>
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
    <div class="filter filter_category">
        <div class="filter_category-from">
            <select name="" id="">
                <option value="" selected>Seleccione el rol</option>
                <option value="">Opcion 01</option>
                <option value="">Opcion 02</option>
                <option value="">Opcion 03</option>
            </select>
        </div>
    </div>
    <div class="filter filter_name">
        <div class="filter_name-input">
            <input type="text" placeholder="Nombre del Proveedor">
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
                <th>Nombre</th>
                <th>RUC</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i <= 10; $i++) { ?>
                <tr>
                    <td>Magics S.A</td>
                    <td>1234567890</td>
                    <td>999999999</td>
                    <td>correo@gmail.com</td>
                    <td>
                        <button class="button btn_action">
                            <i class="fa-light fa-eye"></i>
                        </button>
                        <button class="button btn_green btn_action">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                        <button class="button btn_red btn_action">
                            <i class="fa-regular fa-trash"></i>
                        </button>
                        <button class="button btn_yellow btn_action">
                            <i class="fa-regular fa-user-xmark"></i>
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
