<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__16e8c3acf461d8737dc038cbeacc0f87221ae0598224179991e6a75d465cb1c2 */
class __TwigTemplate_fcdb2a5a1950f74b3304408de30890a352b56405af19544d12e09c9ab2c5dc50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ICY/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ICY/img/app_icon.png\" />

<title>Tema y logotipo > Tema • ICY's Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '44aec3c1005d8b49a047a824c3ba2bac';
    var token_admin_orders = '1e4b6ed1a1287234987b730c6f73fb08';
    var token_admin_customers = '96dab3285c78ebb021bc9efb1e3b9b2f';
    var token_admin_customer_threads = '9fe241ef502e60afb0b9f154f3f30370';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'cdd5de542ac3eeff251d336aa7e77a06';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/ICY/admin245i7cdsf/index.php/improve/modules/catalog/recommended?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA';
    var admin_notification_get_link = '/ICY/admin245i7cdsf/index.php/common/notifications?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA';
    var admin_notification_push_link = '/ICY/admin245i7cdsf/index.php/common/notifications/ack?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA';
    var tab_modules_list = 'easywebtoapp';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/ICY/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/admin245i7cdsf/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/admin245i7cdsf/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ICY/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ICY\\/admin245i7cdsf\\/\";
var baseDir = \"\\/ICY\\/\";
var changeFormLanguageUrl = \"\\/ICY\\/admin245i7cdsf\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Peso mexicano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ICY/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/admin245i7cdsf/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/ICY/admin245i7cdsf/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/ICY/admin245i7cdsf/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/admin245i7cdsf/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/ICY/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminAjaxFaviconBO&amp;token=df33eb1dc4197a2c6d67b1ea1216ccc6\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/ICY\\/admin245i7cdsf\\/index.php?controller=AdminGamification&token=862dbb64f1cf3027f2fc75536d6dfa1c\";
            var current_id_tab = 53;
        </script>

";
        // line 177
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-es adminthemes\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminDashboard&amp;token=71d336ee352f62175d1548589d628141\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=19b297726e386cef22051ab0a243c5bc\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php/improve/modules/manage?token=a351a84949eb6e72a5e25e92d197af7c\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php/sell/catalog/categories/new?token=a351a84949eb6e72a5e25e92d197af7c\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php/sell/catalog/products/new?token=a351a84949eb6e72a5e25e92d197af7c\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8527cab45ed103f08363605b980b659d\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminOrders&amp;token=1e4b6ed1a1287234987b730c6f73fb08\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"35\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminQuickAccesses&token=1bb057168116d9271dcd622dffe7d280\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Tema y logotipo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminQuickAccesses&token=1bb057168116d9271dcd622dffe7d280\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/ICY/admin245i7cdsf/index.php?controller=AdminSearch&amp;token=a720550a58e0bed1ddd0a6e21ced1345\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/ICY/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Que no haya noticias, es de por sí una buena noticia, ¿verdad?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/balamyam.litzy%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Litzy Ixchel</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/employees/1/edit?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminLogin&amp;logout=1&amp;token=af3a8dbb2988c800e3f9d90d4999ce2f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ICY/admin245i7cdsf/index.php/configure/advanced/employees/toggle-navigation?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminDashboard&amp;token=71d336ee352f62175d1548589d628141\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminOrders&amp;token=1e4b6ed1a1287234987b730c6f73fb08\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminOrders&amp;token=1e4b6ed1a1287234987b730c6f73fb08\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/orders/invoices/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminSlip&amp;token=76f407b34d15c404a76884c3f45a5b67\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/orders/delivery-slips/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCarts&amp;token=bdfc8961b04b40f06adc8ddc737da5c9\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/sell/catalog/products?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/catalog/products?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/catalog/categories?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminTracking&amp;token=972c53a663b044df23016c9e0415fb3f\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminAttributesGroups&amp;token=276fbfa96794da2b4d3bac214b34a5a8\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/catalog/brands/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminAttachments&amp;token=00988ba528b5facd05c81b44a4518c87\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCartRules&amp;token=8527cab45ed103f08363605b980b659d\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/stocks/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/sell/customers/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/sell/customers/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminAddresses&amp;token=4ea8c589b7961c94e6b04290fb46b789\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCustomerThreads&amp;token=9fe241ef502e60afb0b9f154f3f30370\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCustomerThreads&amp;token=9fe241ef502e60afb0b9f154f3f30370\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminOrderMessage&amp;token=a6123c1f4d4c5c9358c9178828ae6bd7\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminReturn&amp;token=6d4f24e274fc38b21d900c869ef1487b\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminStats&amp;token=19b297726e386cef22051ab0a243c5bc\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/improve/modules/manage?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/modules/manage?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminPsMboModule&amp;token=5833345986f4682e98e97761c0e3c9f3\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/themes/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/themes/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminPsMboTheme&amp;token=b58e8b1fef03ee7e148581e46a5b55c4\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/mail_theme/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/cms-pages/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/modules/positions/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminImages&amp;token=1a3752168a51aeacf0abb851d134788f\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/modules/link-widget/list?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCarriers&amp;token=c9171e1977b106501bb155b82e34b7fd\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminCarriers&amp;token=c9171e1977b106501bb155b82e34b7fd\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/shipping/preferences?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/improve/payment/payment_methods?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/payment/payment_methods?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/payment/preferences?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/improve/international/localization/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/international/localization/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminZones&amp;token=7124734c9b8837e782f23d3013426547\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/international/taxes/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/improve/international/translations/settings?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminEmarketing&amp;token=2bf0b3e6924c90cfdbab95bbee01f5c0\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/preferences/preferences?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/preferences/preferences?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/order-preferences/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/product-preferences/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/customer-preferences/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/contacts/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/shop/seo-urls/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminSearchConf&amp;token=7c83129b0cfd8ddb8660d353262e7098\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminGamification&amp;token=862dbb64f1cf3027f2fc75536d6dfa1c\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/system-information/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/system-information/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/performance/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/administration/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/emails/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/import/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/employees/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/sql-requests/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/logs/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/ICY/admin245i7cdsf/index.php/configure/advanced/webservice-keys/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Lanza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Tema y logotipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema y logotipo &gt; Tema          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminPsMboModule&token=5833345986f4682e98e97761c0e3c9f3';
    var controller = 'AdminThemes';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/ICY/admin245i7cdsf/index.php/improve/design/themes/import?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\"                  title=\"Añadir nuevo tema\"                >
                  <i class=\"material-icons\">add</i>                  Añadir nuevo tema
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/ICY/admin245i7cdsf/index.php/improve/design/themes/export?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\"                  title=\"Exportar tema actual\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema actual
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/ICY/admin245i7cdsf/index.php/improve/modules/catalog?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/ICY/admin245i7cdsf/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminThemes%253Fversion%253D1.7.6.5%2526country%253Des/Ayuda?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/ICY/admin245i7cdsf/index.php/improve/design/themes/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Tema y logotipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminPsThemeCustoConfiguration&token=4f5080344a9266311acfe97bcc9cbf37\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Configuración página de inicio
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminPsThemeCustoAdvanced&token=b68d7e2f2dc5ff0ebec89afa9a480722\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personalización avanzada
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u00a1Bienvenido a su tienda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u00a1Hola! Me llamo Presto y estoy aqu\\u00ed para ense\\u00f1arle todo esto.<\\/p>\\n    <p>Descubrir\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\n    Cree su primer producto, personalice su tienda, configure env\\u00edos y pagos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u00a1Empecemos!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">M\\u00e1s tarde<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Empezar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/ICY\\/admin245i7cdsf\\/index.php?controller=AdminDashboard&token=71d336ee352f62175d1548589d628141\"}]},{\"title\":\"Vamos a crear su primer producto\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\",\"2\":\"A\\u00f1ada informaci\\u00f3n clara y atractiva. No se preocupe, podr\\u00e1 editarlo m\\u00e1s tarde :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dele a su producto un nombre atractivo.\",\"options\":[\"savepoint\"],\"page\":[\"\\/ICY\\/admin245i7cdsf\\/index.php\\/sell\\/catalog\\/products\\/new?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Complete los detalles esenciales en esta pesta\\u00f1a. Las otras pesta\\u00f1as son para informaci\\u00f3n m\\u00e1s avanzada.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1A\\u00f1ada una o m\\u00e1s im\\u00e1genes para que su producto atraiga la atenci\\u00f3n!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00bfA qu\\u00e9 precio quiere venderlo?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u00a1Genial! Acaba de crear su primer producto. Tiene buena pinta, \\u00bfverdad?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Dele a su tienda su propia identidad\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 aspecto quiere para su tienda? \\u00bfQu\\u00e9 la hace especial?\",\"2\":\"Personalice su tema o escoja el mejor dise\\u00f1o de nuestro cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u00a1Una buena manera de empezar es a\\u00f1adir su propio logotipo aqu\\u00ed!\",\"options\":[\"savepoint\"],\"page\":\"\\/ICY\\/admin245i7cdsf\\/index.php\\/improve\\/design\\/themes\\/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si quiere algo realmente especial, \\u00a1eche un vistazo al cat\\u00e1logo de temas!\",\"page\":\"\\/ICY\\/admin245i7cdsf\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Prepara tu tienda para recibir pagos\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que le paguen sus clientes?\",\"2\":\"Adapte su oferta al mercado: \\u00a1a\\u00f1ada los m\\u00e9todos de pago m\\u00e1s populares para sus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estos m\\u00e9todos de pago ya est\\u00e1n disponibles para tus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/ICY\\/admin245i7cdsf\\/index.php\\/improve\\/payment\\/payment_methods?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1Y puede escoger y a\\u00f1adir otros m\\u00e9todos de pago desde aqu\\u00ed!\",\"page\":\"\\/ICY\\/admin245i7cdsf\\/index.php\\/improve\\/payment\\/payment_methods?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Elija sus soluciones de env\\u00edo\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere enviar sus productos?\",\"2\":\"\\u00a1Seleccione las soluciones de env\\u00edo que mejor se adapten a sus clientes! Cree su propio transporte o a\\u00f1ada un m\\u00f3dulo listo para usar.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqu\\u00ed est\\u00e1n los m\\u00e9todos de env\\u00edo disponibles en su tienda ahora mismo.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/ICY\\/admin245i7cdsf\\/index.php?controller=AdminCarriers&token=c9171e1977b106501bb155b82e34b7fd\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Puede ofrecer m\\u00e1s opciones de env\\u00edo configurando transportistas adicionales\",\"page\":\"http:\\/\\/localhost\\/ICY\\/admin245i7cdsf\\/index.php?controller=AdminCarriers&token=c9171e1977b106501bb155b82e34b7fd\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Mejore su tienda con m\\u00f3dulos\",\"subtitle\":{\"1\":\"A\\u00f1ada nuevas caracter\\u00edsticas y gestione las que ya existen gracias a los m\\u00f3dulos.\",\"2\":\"Algunos m\\u00f3dulos ya est\\u00e1n preinstalados, otros son m\\u00f3dulos gratuitos o de pago - \\u00a1navega por nuestra selecci\\u00f3n y descubre los que est\\u00e1n disponibles!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra nuestra selecci\\u00f3n de m\\u00f3dulos en la primera pesta\\u00f1a. Administre sus m\\u00f3dulos en la segunda y siga las notificaciones en la tercera pesta\\u00f1a.\",\"options\":[\"savepoint\"],\"page\":\"\\/ICY\\/admin245i7cdsf\\/index.php\\/improve\\/modules\\/catalog?_token=FvzrmTiOX5fkv_edKMEyZcuqJ0hsqtrmteGh1I4yqbA\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00a1Es su turno!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Ha visto lo esencial, pero hay mucho m\\u00e1s por explorar.<br \\/>\\n          Algunos recursos pueden ayudarle a profundizar aun m\\u00e1s:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Gu\\u00eda de principiante<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Foro<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formaci\\u00f3n<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial en v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estoy listo<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminWelcome&token=c1e36caa1742872348e7275ae7afc52f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>¡Eh! ¿Se ha perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Salir del tutorial de bienvenida</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Paso <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Siguiente</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1367
        $this->displayBlock('content_header', $context, $blocks);
        // line 1368
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1369
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1370
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1371
        echo "
             
<div class=\"panel clearfix\" id=\"prestastore-content\"></div>
<script type=\"text/javascript\">
\t\$.ajax({
\t\ttype: 'POST',
\t\theaders: { \"cache-control\": \"no-cache\" },
\t\turl: 'index.php?controller=AdminPsMboModule&token=5833345986f4682e98e97761c0e3c9f3',
\t\tasync: true,
\t\tcache: false,
\t\tdataType : \"html\",
\t\tdata: {
\t\t\tajax: '1',
\t\t\taction:'getMboAddonsThemes',
\t\t},
\t\tsuccess: function(htmlData) {
\t\t\t\$(\"#prestastore-content\").html(\"<h3><i class='icon-picture-o'></i> Live from PrestaShop Addons!</h3>\"+htmlData);
\t\t}
\t});

\t// These variable will move the form to another location
\tvar formToMove = \"appearance\";
\tvar formDestination = \"js_theme_form_container\";
</script>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/ICY/admin245i7cdsf/index.php?controller=AdminDashboard&amp;token=71d336ee352f62175d1548589d628141\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=balamyam.litzy%40gmail.com&amp;firstname=Litzy+Ixchel&amp;lastname=Balam+Yam&amp;website=http%3A%2F%2Flocalhost%2FICY%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ICY/admin245i7cdsf/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=balamyam.litzy%40gmail.com&amp;firstname=Litzy+Ixchel&amp;lastname=Balam+Yam&amp;website=http%3A%2F%2Flocalhost%2FICY%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1500
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 177
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1367
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1368
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1369
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1370
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1500
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__16e8c3acf461d8737dc038cbeacc0f87221ae0598224179991e6a75d465cb1c2";
    }

    public function getDebugInfo()
    {
        return array (  1590 => 1500,  1585 => 1370,  1580 => 1369,  1575 => 1368,  1570 => 1367,  1561 => 177,  1553 => 1500,  1422 => 1371,  1419 => 1370,  1416 => 1369,  1413 => 1368,  1411 => 1367,  217 => 177,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__16e8c3acf461d8737dc038cbeacc0f87221ae0598224179991e6a75d465cb1c2", "");
    }
}