<div class="content_button">
    <button class="button">Nuevo Categoría</button>
</div>
<div class="content_filters">
    <div class="filter filter_name">
        <div class="filter_name-input">
            <input type="text" placeholder="Nombre de la Categoría">
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
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i <= 10; $i++) { ?>
                <tr>
                    <td>Nombre Categoría</td>
                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, deleniti.</td>
                    <td>
                        <div class="table_image">
                            <img src="" alt="">
                        </div>
                    </td>
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
