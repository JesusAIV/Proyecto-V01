<div class="company_header">
    <div class="company_header-title">
        <span>Datos de tu empresa</span>
    </div>
    <div class="company_header-button">
        <button class="button">Editar</button>
    </div>
</div>
<div class="company_logo">
    <div class="logo_company">
        <div class="logo_company-title">
            <span>Logo 1</span>
        </div>
        <div class="logo_company-img">
            <img src="<?php $configC->rutaImage('svg/logo.svg') ?>" alt="">
            <div class="select_img">
                <label for="logo1">
                    <i class="fa-light fa-image"></i>
                </label>
                <input type="file" id="logo1">
            </div>
        </div>
    </div>
    <div class="logo_company logo_company02">
        <div class="logo_company-title">
            <span for="logo1">Logo 2</span>
        </div>
        <div class="logo_company-img">
            <img src="<?php $configC->rutaImage('svg/logo.svg') ?>" alt="">
            <div class="select_img">
                <label for="logo2">
                    <i class="fa-light fa-image"></i>
                </label>
                <input type="file" id="logo2">
            </div>
        </div>
    </div>
</div>
<div class="company_data">
    <div class="input_grid3">
        <div class="input_data input_name">
            <label for="name_company">Nombre de empresa</label>
            <input type="text" class="input" id="name_company">
        </div>
        <div class="input_data input_ruc">
            <label for="ruc_company">RUC</label>
            <input type="text" class="input" id="ruc_company">
        </div>
        <div class="input_data input_telephone">
            <label for="telephone_company">Teléfono</label>
            <input type="text" class="input" id="telephone_company">
        </div>
    </div>
</div>
<div class="company_redes">
    <div class="redes_title">
        <span>Redes sociales</span>
    </div>
    <div class="input_grid3">
        <div class="input_data input_urlfb">
            <label for="urlfb_company">URL en Facebook</label>
            <input type="text" class="input" id="urlfb_company">
        </div>
        <div class="input_data input_whatsapp">
            <label for="whatsapp_company">Whatsapp</label>
            <input type="text" class="input" id="whatsapp_company">
        </div>
    </div>
</div>
<div class="button_edit">
    <button class="button">Guardar</button>
</div>