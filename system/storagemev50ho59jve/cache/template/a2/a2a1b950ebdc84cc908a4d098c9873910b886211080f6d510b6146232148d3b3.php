<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/payment/squareup.twig */
class __TwigTemplate_2aa7047b4e7eb4e1f608ecf7350dd66eca4233c2af959f0089471f073c135b02 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 7
        if (($context["payment_squareup_merchant_id"] ?? null)) {
            // line 8
            echo "                    <button type=\"button\" form=\"form-square-checkout\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                ";
        } else {
            // line 10
            echo "                    <span data-toggle=\"tooltip\" title=\"";
            echo ($context["text_please_connect"] ?? null);
            echo "\">
                        <button disabled class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                    </span>
                ";
        }
        // line 14
        echo "                <a href=\"";
        echo ($context["help"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_help"] ?? null);
        echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-question-circle\"></i></a>
                ";
        // line 15
        if (($context["payment_squareup_merchant_id"] ?? null)) {
            // line 16
            echo "                    <a href=\"";
            echo ($context["on_demand_cron"] ?? null);
            echo "\" id=\"on-demand-cron\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_on_demand_cron"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
                ";
        }
        // line 18
        echo "                ";
        if (($context["can_modify_geo_zones"] ?? null)) {
            // line 19
            echo "                    <a href=\"";
            echo ($context["setup_geo_zones"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_geo_zones"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-globe\"></i></a>
                ";
        }
        // line 21
        echo "                <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 32
            echo "            <div class=\"alert alert-";
            echo twig_get_attribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 32);
            echo "\"><i class=\"fa fa-";
            echo twig_get_attribute($this->env, $this->source, $context["alert"], "icon", [], "any", false, false, false, 32);
            echo "\"></i>&nbsp;";
            echo twig_get_attribute($this->env, $this->source, $context["alert"], "text", [], "any", false, false, false, 32);
            echo "
                ";
            // line 33
            if ( !twig_get_attribute($this->env, $this->source, $context["alert"], "non_dismissable", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            }
            // line 36
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>&nbsp;";
        // line 41
        echo ($context["text_edit_heading"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-square-checkout\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"payment_squareup_card\" value=\"1\" />
                    <input type=\"hidden\" name=\"payment_squareup_admin_url_transaction\" value=\"";
        // line 46
        echo ($context["payment_squareup_admin_url_transaction"] ?? null);
        echo "\" />
                    <input type=\"hidden\" name=\"payment_squareup_admin_url_settings\" value=\"";
        // line 47
        echo ($context["payment_squareup_admin_url_settings"] ?? null);
        echo "\" />
                    <ul class=\"nav nav-tabs\">
                        <li><a href=\"#tab-setting\" data-toggle=\"tab\"><i class=\"fa fa-gear\"></i>&nbsp;";
        // line 49
        echo ($context["tab_setting"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-transaction\" data-toggle=\"tab\"><i class=\"fa fa-list\"></i>&nbsp;";
        // line 50
        echo ($context["tab_transaction"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-recurring\" data-toggle=\"tab\"><i class=\"fa fa-hourglass-half\"></i>&nbsp;";
        // line 51
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane\" id=\"tab-setting\">
                            <fieldset>
                                <legend>
                                    <span>
                                        ";
        // line 58
        if (($context["payment_squareup_merchant_id"] ?? null)) {
            // line 59
            echo "                                            ";
            echo ($context["text_connection_section"] ?? null);
            echo " - ";
            echo ($context["text_connected"] ?? null);
            echo "
                                        ";
        } else {
            // line 61
            echo "                                            ";
            echo ($context["text_connection_section"] ?? null);
            echo " - ";
            echo ($context["text_not_connected"] ?? null);
            echo "
                                        ";
        }
        // line 63
        echo "                                    </span>
                                    <div class=\"pull-right\">
                                        <a target=\"_blank\" href=\"";
        // line 65
        echo ($context["url_video_help"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_video_help"] ?? null);
        echo "\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-video-camera\"></i>&nbsp;&nbsp;";
        echo ($context["button_video_help"] ?? null);
        echo "</a>
                                        <a target=\"_blank\" href=\"";
        // line 66
        echo ($context["url_integration_settings_help"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_integration_settings_help"] ?? null);
        echo "\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-question-circle\"></i></a>
                                    </div>
                                </legend>

                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_client_id\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo ($context["text_client_id_help"] ?? null);
        echo "\">";
        echo ($context["text_client_id_label"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" value=\"";
        // line 75
        echo ($context["payment_squareup_client_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_client_id_placeholder"] ?? null);
        echo "\" id=\"input_payment_squareup_client_id\" class=\"form-control\"/>
                                        ";
        // line 76
        if (($context["error_client_id"] ?? null)) {
            // line 77
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_client_id"] ?? null);
            echo "</div>
                                        ";
        }
        // line 79
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_client_secret\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo ($context["text_client_secret_help"] ?? null);
        echo "\">";
        echo ($context["text_client_secret_label"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" value=\"";
        // line 86
        echo ($context["payment_squareup_client_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_client_secret_placeholder"] ?? null);
        echo "\" id=\"input_payment_squareup_client_secret\" class=\"form-control\"/>
                                        ";
        // line 87
        if (($context["error_client_secret"] ?? null)) {
            // line 88
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_client_secret"] ?? null);
            echo "</div>
                                        ";
        }
        // line 90
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_redirect_uri_static\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 94
        echo ($context["text_redirect_uri_help"] ?? null);
        echo "\">";
        echo ($context["text_redirect_uri_label"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input readonly type=\"text\" id=\"input_payment_squareup_redirect_uri_static\" name=\"payment_squareup_redirect_uri_static\" class=\"form-control\" value=\"";
        // line 97
        echo ($context["payment_squareup_redirect_uri"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_webhook_url_static\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 102
        echo ($context["text_webhook_url_help"] ?? null);
        echo "\">";
        echo ($context["text_webhook_url_label"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input readonly type=\"text\" id=\"input_payment_squareup_webhook_url_static\" name=\"payment_squareup_webhook_url_static\" class=\"form-control\" value=\"";
        // line 105
        echo ($context["payment_squareup_webhook_url"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_webhook_signature\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 110
        echo ($context["text_webhook_signature_help"] ?? null);
        echo "\">";
        echo ($context["text_webhook_signature_label"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" id=\"input_payment_squareup_webhook_signature\" name=\"payment_squareup_webhook_signature\" class=\"form-control\" value=\"";
        // line 113
        echo ($context["payment_squareup_webhook_signature"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_webhook_signature_label"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-2\"></div>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 119
        if (($context["payment_squareup_merchant_id"] ?? null)) {
            // line 120
            echo "                                            <span data-toggle=\"tooltip\" title=\"";
            echo ($context["text_disabled_connect_help_text"] ?? null);
            echo "\">
                                                <a id=\"reconnect-button\" href=\"javascript:void(0)\" class=\"btn btn-primary btn-lg btn-connect\" >";
            // line 121
            echo ($context["button_reconnect"] ?? null);
            echo "</a>
                                            </span>
                                            <span id=\"connect-error\"></span>
                                            <p>";
            // line 124
            echo ($context["text_connected_info"] ?? null);
            echo "</p>
                                        ";
        } else {
            // line 126
            echo "                                            <div class=\"alert alert-info\">
                                                <ul>
                                                    <li>";
            // line 128
            echo ($context["text_not_connected_info_1"] ?? null);
            echo "</li>
                                                    <li>";
            // line 129
            echo ($context["text_not_connected_info_2"] ?? null);
            echo "</li>
                                                </ul>
                                            </div>
                                            <span data-toggle=\"tooltip\" title=\"";
            // line 132
            echo ($context["text_disabled_connect_help_text"] ?? null);
            echo "\">
                                                <a id=\"connect-button\" href=\"javascript:void(0)\" class=\"btn btn-primary btn-lg btn-connect\">";
            // line 133
            echo ($context["button_connect"] ?? null);
            echo "</a>
                                            </span>
                                            <span id=\"connect-error\"></span>
                                        ";
        }
        // line 137
        echo "                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 141
        echo ($context["text_cron_settings"] ?? null);
        echo "</legend>
                                <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 142
        echo ($context["text_recurring_info"] ?? null);
        echo "</div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 144
        echo ($context["help_local_cron"] ?? null);
        echo "\">";
        echo ($context["text_local_cron"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 146
        echo ($context["payment_squareup_cron_command"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 150
        echo ($context["help_remote_cron"] ?? null);
        echo "\">";
        echo ($context["text_remote_cron"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <input readonly type=\"text\" name=\"payment_squareup_cron_url\" id=\"input_payment_squareup_cron_url\" class=\"form-control\" value=\"\" />
                                            <div data-toggle=\"tooltip\" data-original-title=\"";
        // line 154
        echo ($context["text_refresh_token"] ?? null);
        echo "\" class=\"input-group-addon btn btn-primary\" id=\"refresh-cron-token\">
                                                <i class=\"fa fa-refresh\"></i>
                                            </div>
                                        </div>
                                        <input id=\"input_payment_squareup_cron_token\" type=\"hidden\" name=\"payment_squareup_cron_token\" value=\"";
        // line 158
        echo ($context["payment_squareup_cron_token"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"checkbox_payment_squareup_cron_acknowledge\">";
        // line 162
        echo ($context["entry_setup_confirmation"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"checkbox-inline\">
                                            <input id=\"checkbox_payment_squareup_cron_acknowledge\" type=\"checkbox\" value=\"1\" ";
        // line 165
        if (($context["payment_squareup_cron_acknowledge"] ?? null)) {
            echo " checked ";
        }
        echo " name=\"payment_squareup_cron_acknowledge\" /> ";
        echo ($context["text_acknowledge_cron"] ?? null);
        echo "
                                        </label>

                                        ";
        // line 168
        if (($context["error_cron_acknowledge"] ?? null)) {
            // line 169
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_cron_acknowledge"] ?? null);
            echo "</div>
                                        ";
        }
        // line 171
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-sm-2\" for=\"dropdown_payment_squareup_cron_email_status\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 174
        echo ($context["help_cron_email_status"] ?? null);
        echo "\">";
        echo ($context["text_cron_email_status"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select id=\"dropdown_payment_squareup_cron_email_status\" name=\"payment_squareup_cron_email_status\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 177
        if ((($context["payment_squareup_cron_email_status"] ?? null) == "1")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                            <option value=\"0\" ";
        // line 178
        if ((($context["payment_squareup_cron_email_status"] ?? null) == "0")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_cron_email\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 183
        echo ($context["help_cron_email"] ?? null);
        echo "\">";
        echo ($context["text_cron_email"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input id=\"input_payment_squareup_cron_email\" name=\"payment_squareup_cron_email\" type=\"text\" class=\"form-control\" value=\"";
        // line 185
        echo ($context["payment_squareup_cron_email"] ?? null);
        echo "\"/>
                                        ";
        // line 186
        if (($context["error_cron_email"] ?? null)) {
            // line 187
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_cron_email"] ?? null);
            echo "</div>
                                        ";
        }
        // line 189
        echo "                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 193
        echo ($context["text_basic_settings"] ?? null);
        echo "</legend>
                                <div id=\"container_payment_squareup_location_id\" class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_location_id\"><span data-toggle=\"tooltip\" title=\"";
        // line 195
        echo ($context["text_location_help"] ?? null);
        echo "\">";
        echo ($context["text_location_label"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"payment_squareup_location_id\" id=\"dropdown_payment_squareup_location_id\" class=\"form-control\" ";
        // line 197
        if ( !($context["payment_squareup_locations"] ?? null)) {
            echo " disabled ";
        }
        echo ">
                                            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_squareup_locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 199
            echo "                                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 199);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["location"], "id", [], "any", false, false, false, 199) == ($context["payment_squareup_location_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 199);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                        </select>
                                        ";
        // line 202
        if (($context["error_location"] ?? null)) {
            // line 203
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_location"] ?? null);
            echo "</div>
                                        ";
        }
        // line 205
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_delay_capture\"><span data-toggle=\"tooltip\" title=\"";
        // line 208
        echo ($context["text_delay_capture_help"] ?? null);
        echo "\">";
        echo ($context["text_delay_capture_label"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"payment_squareup_delay_capture\" id=\"dropdown_payment_squareup_delay_capture\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 211
        if ((($context["payment_squareup_delay_capture"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_authorize_label"] ?? null);
        echo "</option>
                                            <option value=\"0\" ";
        // line 212
        if ((($context["payment_squareup_delay_capture"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_sale_label"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_total\">
                                        <span data-toggle=\"tooltip\" title=\"";
        // line 218
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span>
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"payment_squareup_total\" value=\"";
        // line 221
        echo ($context["payment_squareup_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"payment_squareup_total\" class=\"form-control\"/>
                                    </div>
                                </div>

                                <hr />
                                <div class=\"alert alert-info\">
                                    <p><i class=\"fa fa-info-circle\"></i> ";
        // line 227
        echo ($context["text_inventory_sync_info"] ?? null);
        echo "</p>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_sync_source\"><span data-toggle=\"tooltip\" title=\"";
        // line 231
        echo ($context["text_sync_source_help"] ?? null);
        echo "\">";
        echo ($context["text_sync_source_label"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"payment_squareup_sync_source\" id=\"dropdown_payment_squareup_sync_source\" class=\"form-control\">
                                            <option value=\"opencart\" ";
        // line 234
        if ((($context["payment_squareup_sync_source"] ?? null) == "opencart")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_opencart_sync_option"] ?? null);
        echo "</option>
                                            <option value=\"none\" ";
        // line 235
        if ((($context["payment_squareup_sync_source"] ?? null) == "none")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_inventory_sync\"><span data-toggle=\"tooltip\" title=\"";
        // line 241
        echo ($context["text_inventory_sync_help"] ?? null);
        echo "\">";
        echo ($context["text_inventory_sync_label"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"payment_squareup_inventory_sync\" id=\"dropdown_payment_squareup_inventory_sync\" class=\"form-control\">
                                            <option value=\"inventory_single\" ";
        // line 244
        if ((($context["payment_squareup_inventory_sync"] ?? null) == "inventory_single")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_inventory_sync_single"] ?? null);
        echo "</option>
                                            <option value=\"inventory_all\" ";
        // line 245
        if ((($context["payment_squareup_inventory_sync"] ?? null) == "inventory_all")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_inventory_sync_all"] ?? null);
        echo "</option>
                                            <option value=\"none\" ";
        // line 246
        if ((($context["payment_squareup_inventory_sync"] ?? null) == "none")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 252
        echo ($context["text_order_status_settings"] ?? null);
        echo "</legend>
                                <div id=\"order_status_settings_intro\" style=\"display: none;\">
                                    <p>";
        // line 254
        echo ($context["text_order_status_settings_info"] ?? null);
        echo "</p>
                                    <p><button id=\"order_status_settings_expand\" class=\"btn btn-default\"><i class=\"fa fa-plus-square-o\"></i> ";
        // line 255
        echo ($context["button_edit_pairings"] ?? null);
        echo "</button></p>
                                </div>
                                <div id=\"order_status_settings\">
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_authorized\"><span data-toggle=\"tooltip\" title=\"";
        // line 259
        echo ($context["squareup_status_comment_authorized"] ?? null);
        echo "\">";
        echo ($context["entry_status_authorized_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_authorized\" id=\"dropdown_payment_squareup_status_authorized\" class=\"form-control\">
                                                <option value>";
        // line 262
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 264
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 264);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 264) == ($context["payment_squareup_status_authorized"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 264);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                            </select>
                                            ";
        // line 267
        if (($context["error_status_authorized"] ?? null)) {
            // line 268
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_authorized"] ?? null);
            echo "</div>
                                            ";
        }
        // line 270
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_captured\"><span data-toggle=\"tooltip\" title=\"";
        // line 273
        echo ($context["squareup_status_comment_captured"] ?? null);
        echo "\">";
        echo ($context["entry_status_captured_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_captured\" id=\"dropdown_payment_squareup_status_captured\" class=\"form-control\">
                                                <option value>";
        // line 276
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 278
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 278);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 278) == ($context["payment_squareup_status_captured"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 278);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                                            </select>
                                            ";
        // line 281
        if (($context["error_status_captured"] ?? null)) {
            // line 282
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_captured"] ?? null);
            echo "</div>
                                            ";
        }
        // line 284
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_voided\"><span data-toggle=\"tooltip\" title=\"";
        // line 287
        echo ($context["squareup_status_comment_voided"] ?? null);
        echo "\">";
        echo ($context["entry_status_voided_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_voided\" id=\"dropdown_payment_squareup_status_voided\" class=\"form-control\">
                                                <option value>";
        // line 290
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 292
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 292);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 292) == ($context["payment_squareup_status_voided"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 292);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                                            </select>
                                            ";
        // line 295
        if (($context["error_status_voided"] ?? null)) {
            // line 296
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_voided"] ?? null);
            echo "</div>
                                            ";
        }
        // line 298
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_failed\"><span data-toggle=\"tooltip\" title=\"";
        // line 301
        echo ($context["squareup_status_comment_failed"] ?? null);
        echo "\">";
        echo ($context["entry_status_failed_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_failed\" id=\"dropdown_payment_squareup_status_failed\" class=\"form-control\">
                                                <option value>";
        // line 304
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 306
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 306);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 306) == ($context["payment_squareup_status_failed"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 306);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                                            </select>
                                            ";
        // line 309
        if (($context["error_status_failed"] ?? null)) {
            // line 310
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_failed"] ?? null);
            echo "</div>
                                            ";
        }
        // line 312
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_partially_refunded\"><span data-toggle=\"tooltip\" title=\"";
        // line 315
        echo ($context["squareup_status_comment_partially_refunded"] ?? null);
        echo "\">";
        echo ($context["entry_status_partially_refunded_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_partially_refunded\" id=\"dropdown_payment_squareup_status_partially_refunded\" class=\"form-control\">
                                                <option value>";
        // line 318
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 320
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 320);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 320) == ($context["payment_squareup_status_partially_refunded"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 320);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                                            </select>
                                            ";
        // line 323
        if (($context["error_status_partially_refunded"] ?? null)) {
            // line 324
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_partially_refunded"] ?? null);
            echo "</div>
                                            ";
        }
        // line 326
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status_fully_refunded\"><span data-toggle=\"tooltip\" title=\"";
        // line 329
        echo ($context["squareup_status_comment_fully_refunded"] ?? null);
        echo "\">";
        echo ($context["entry_status_fully_refunded_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_status_fully_refunded\" id=\"dropdown_payment_squareup_status_fully_refunded\" class=\"form-control\">
                                                <option value>";
        // line 332
        echo ($context["text_select_status"] ?? null);
        echo "</option>
                                                ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 334
            echo "                                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 334);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 334) == ($context["payment_squareup_status_fully_refunded"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 334);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                                            </select>
                                            ";
        // line 337
        if (($context["error_status_fully_refunded"] ?? null)) {
            // line 338
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_status_fully_refunded"] ?? null);
            echo "</div>
                                            ";
        }
        // line 340
        echo "                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 345
        echo ($context["text_advanced_settings"] ?? null);
        echo "</legend>
                                <div id=\"advanced_settings_intro\" style=\"display: none;\">
                                    <p>";
        // line 347
        echo ($context["text_advanced_settings_info"] ?? null);
        echo "</p>
                                    <p><button id=\"advanced_settings_expand\" class=\"btn btn-default\"><i class=\"fa fa-plus-square-o\"></i> ";
        // line 348
        echo ($context["button_edit_advanced"] ?? null);
        echo "</button></p>
                                </div>
                                <div id=\"advanced_settings\">
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">
                                            <span data-toggle=\"tooltip\" title=\"";
        // line 353
        echo ($context["text_payment_method_name_help"] ?? null);
        echo "\">";
        echo ($context["text_payment_method_name_label"] ?? null);
        echo "</span>
                                        </label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 357
            echo "                                                <div class=\"input-group\">
                                                    <span class=\"input-group-addon\"><img src=\"";
            // line 358
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 358);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 358);
            echo "\" /></span>
                                                    <input type=\"text\" name=\"payment_squareup_display_name[";
            // line 359
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 359);
            echo "]\" value=\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["payment_squareup_display_name"] ?? null), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 359), [], "array", true, true, false, 359) &&  !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment_squareup_display_name"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 359)] ?? null) : null)))) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment_squareup_display_name"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 359)] ?? null) : null)) : (($context["text_payment_method_name_placeholder"] ?? null)));
            echo "\" placeholder=\"";
            echo ($context["text_payment_method_name_placeholder"] ?? null);
            echo "\" class=\"form-control\"/>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 365
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                                      <div class=\"col-sm-10\">
                                        <select name=\"payment_squareup_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                                            <option value=\"0\">";
        // line 368
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                                            ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 370
            echo "                                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 370);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 370) == ($context["payment_squareup_geo_zone_id"] ?? null))) {
                echo " selected ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 370);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        echo "                                        </select>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_sort_order\">
                                            ";
        // line 377
        echo ($context["entry_sort_order"] ?? null);
        echo "
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"payment_squareup_sort_order\" value=\"";
        // line 380
        echo ($context["payment_squareup_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input_payment_squareup_sort_order\" class=\"form-control\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 384
        echo ($context["text_debug_help"] ?? null);
        echo "\">";
        echo ($context["text_debug_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_debug\" id=\"dropdown_payment_squareup_debug\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 387
        if ((($context["payment_squareup_debug"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_debug_enabled"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 388
        if ((($context["payment_squareup_debug"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_debug_disabled"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_enable_icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 393
        echo ($context["text_enable_icon_help"] ?? null);
        echo "\">";
        echo ($context["text_enable_icon_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_icon_status\" id=\"dropdown_payment_squareup_enable_icon\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 396
        if ((($context["payment_squareup_icon_status"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_visible_option"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 397
        if ((($context["payment_squareup_icon_status"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_hidden_option"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_enable_accepted_cards\"><span data-toggle=\"tooltip\" title=\"";
        // line 402
        echo ($context["text_enable_accepted_cards_help"] ?? null);
        echo "\">";
        echo ($context["text_enable_accepted_cards_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_accepted_cards_status\" id=\"dropdown_payment_squareup_enable_accepted_cards\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 405
        if ((($context["payment_squareup_accepted_cards_status"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_visible_option"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 406
        if ((($context["payment_squareup_accepted_cards_status"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_hidden_option"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_guest\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo ($context["text_guest_help"] ?? null);
        echo "\">";
        echo ($context["text_guest_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <select name=\"payment_squareup_guest\" id=\"dropdown_payment_squareup_guest\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 414
        if ((($context["payment_squareup_guest"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_guest_enabled"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 415
        if ((($context["payment_squareup_guest"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_guest_disabled"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input_merchant_name\">
                                            ";
        // line 421
        echo ($context["text_merchant_name_label"] ?? null);
        echo "
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"merchant_name\" value=\"";
        // line 424
        echo ($context["payment_squareup_merchant_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_merchant_name_placeholder"] ?? null);
        echo "\" id=\"input_merchant_name\" class=\"form-control\" readonly />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"access_token_expires_time\">
                                            ";
        // line 429
        echo ($context["text_access_token_expires_label"] ?? null);
        echo "
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"access_token_expires\" value=\"";
        // line 432
        echo ($context["access_token_expires_time"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_access_token_expires_placeholder"] ?? null);
        echo "\" id=\"access_token_expires_time\" class=\"form-control\" readonly />
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input_payment_squareup_cron_standard_period\">
                                            ";
        // line 437
        echo ($context["entry_cron_standard_period"] ?? null);
        echo "
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"number\" min=\"1\" max=\"";
        // line 440
        echo ($context["max_standard_period"] ?? null);
        echo "\" name=\"payment_squareup_cron_standard_period\" value=\"";
        echo ($context["payment_squareup_cron_standard_period"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cron_standard_period"] ?? null);
        echo "\" id=\"input_payment_squareup_cron_standard_period\" class=\"form-control\"/>
                                            ";
        // line 441
        if (($context["error_cron_standard_period"] ?? null)) {
            // line 442
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_cron_standard_period"] ?? null);
            echo "</div>
                                            ";
        }
        // line 444
        echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"cron_status_text\">
                                            ";
        // line 448
        echo ($context["text_cron_status_text_label"] ?? null);
        echo "
                                        </label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" name=\"cron_status_text\" value=\"";
        // line 452
        echo ($context["cron_status_text"] ?? null);
        echo "\" id=\"cron_status_text\" class=\"form-control\" readonly />
                                                <span class=\"input-group-addon\" style=\"border: none; background-color: transparent; padding: 0 0 0 10px;\">
                                                    <a href=\"";
        // line 454
        echo ($context["url_download_sync_log"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"";
        echo ($context["button_download_log"] ?? null);
        echo "\"><i class=\"fa fa-download\"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"hidden\" name=\"payment_squareup_ad_hoc_sync\" value=\"1\">
                                    <!--div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_ad_hoc_sync\"><span data-toggle=\"tooltip\" title=\"";
        // line 461
        echo ($context["text_ad_hoc_sync_help"] ?? null);
        echo "\">";
        echo ($context["text_ad_hoc_sync_label"] ?? null);
        echo "</span></label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"alert alert-info\">";
        // line 463
        echo ($context["text_ad_hoc_warning"] ?? null);
        echo "</div>
                                            <select name=\"payment_squareup_ad_hoc_sync\" id=\"dropdown_payment_squareup_ad_hoc_sync\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 465
        if ((($context["payment_squareup_ad_hoc_sync"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 466
        if ((($context["payment_squareup_ad_hoc_sync"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div-->
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 473
        echo ($context["text_extension_status_heading"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"dropdown_payment_squareup_status\"><span data-toggle=\"tooltip\" title=\"";
        // line 475
        echo ($context["text_extension_status_help"] ?? null);
        echo "\">";
        echo ($context["text_extension_status"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <select name=\"payment_squareup_status\" id=\"dropdown_payment_squareup_status\" class=\"form-control\">
                                                <option value=\"1\" ";
        // line 479
        if ((($context["payment_squareup_status"] ?? null) == 1)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_extension_status_enabled"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 480
        if ((($context["payment_squareup_status"] ?? null) == 0)) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_extension_status_disabled"] ?? null);
        echo "</option>
                                            </select>
                                            <span class=\"input-group-addon\" style=\"border: none; background-color: transparent; padding: 0 0 0 10px;\">
                                                ";
        // line 483
        if (($context["payment_squareup_merchant_id"] ?? null)) {
            // line 484
            echo "                                                    <button type=\"button\" form=\"form-square-checkout\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                                                ";
        } else {
            // line 486
            echo "                                                    <span data-toggle=\"tooltip\" title=\"";
            echo ($context["text_please_connect"] ?? null);
            echo "\">
                                                        <button disabled class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                                                    </span>
                                                ";
        }
        // line 490
        echo "                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-transaction\">
                            <div id=\"transaction-alert\" data-message=\"";
        // line 497
        echo ($context["text_loading"] ?? null);
        echo "\"></div>
                            <div class=\"text-right\">
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <th class=\"text-left hidden-xs\">";
        // line 504
        echo ($context["column_transaction_id"] ?? null);
        echo "</th> 
                                            <th class=\"text-left\">";
        // line 505
        echo ($context["column_customer"] ?? null);
        echo "</th>
                                            <th class=\"text-left hidden-xs\">";
        // line 506
        echo ($context["column_order_id"] ?? null);
        echo "</th>
                                            <th class=\"text-left hidden-xs\">";
        // line 507
        echo ($context["column_type"] ?? null);
        echo "</th>
                                            <th class=\"text-left hidden-xs\">";
        // line 508
        echo ($context["column_amount"] ?? null);
        echo "</th>
                                            <th class=\"text-left hidden-xs\">";
        // line 509
        echo ($context["column_refunds"] ?? null);
        echo "</th>
                                            <th class=\"text-left hidden-xs hidden-sm\">";
        // line 510
        echo ($context["column_ip"] ?? null);
        echo "</th>
                                            <th class=\"text-left\">";
        // line 511
        echo ($context["column_date_created"] ?? null);
        echo "</th>
                                            <th class=\"text-right\">";
        // line 512
        echo ($context["column_action"] ?? null);
        echo "</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"transactions\">
                                    </tbody>
                                </table>
                                <div id=\"transactions_pagination\"></div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-recurring\">
                            <div class=\"form-group\">
                                <label class=\"control-label col-sm-2\" for=\"dropdown_payment_squareup_recurring_status\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 523
        echo ($context["help_recurring_status"] ?? null);
        echo "\">";
        echo ($context["text_recurring_status"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <select id=\"dropdown_payment_squareup_recurring_status\" name=\"payment_squareup_recurring_status\" class=\"form-control\">
                                        <option value=\"1\" ";
        // line 526
        if ((($context["payment_squareup_recurring_status"] ?? null) == "1")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                        <option value=\"0\" ";
        // line 527
        if ((($context["payment_squareup_recurring_status"] ?? null) == "0")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                            </div>
                            <fieldset>
                                <legend>";
        // line 532
        echo ($context["text_customer_notifications"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-sm-2\" for=\"dropdown_payment_squareup_notify_recurring_success\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 534
        echo ($context["help_notify_recurring_success"] ?? null);
        echo "\">";
        echo ($context["text_notify_recurring_success"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select id=\"dropdown_payment_squareup_notify_recurring_success\" name=\"payment_squareup_notify_recurring_success\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 537
        if ((($context["payment_squareup_notify_recurring_success"] ?? null) == "1")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                            <option value=\"0\" ";
        // line 538
        if ((($context["payment_squareup_notify_recurring_success"] ?? null) == "0")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-sm-2\" for=\"dropdown_payment_squareup_notify_recurring_fail\"><span data-toggle=\"tooltip\" data-original-title=\"";
        // line 543
        echo ($context["help_notify_recurring_fail"] ?? null);
        echo "\">";
        echo ($context["text_notify_recurring_fail"] ?? null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select id=\"dropdown_payment_squareup_notify_recurring_fail\" name=\"payment_squareup_notify_recurring_fail\" class=\"form-control\">
                                            <option value=\"1\" ";
        // line 546
        if ((($context["payment_squareup_notify_recurring_fail"] ?? null) == "1")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                            <option value=\"0\" ";
        // line 547
        if ((($context["payment_squareup_notify_recurring_fail"] ?? null) == "0")) {
            echo " selected ";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    ";
        // line 555
        if (($context["initial_sync_not_performed"] ?? null)) {
            // line 556
            echo "                        <div class=\"modal fade\" id=\"squareup-sync-modal\" data-backdrop=\"static\" data-keyboard=\"\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h4 class=\"modal-title\">";
            // line 560
            echo ($context["text_select_initial_sync_mode"] ?? null);
            echo "</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"alert alert-info\"><i class=\"fa fa-circle-o-notch fa-spin\"></i>&nbsp;";
            // line 563
            echo ($context["text_loading"] ?? null);
            echo "</div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" form=\"form-square-checkout\" data-toggle=\"tooltip\" title=\"";
            // line 566
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 572
        echo "                </form>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"squareup-on-demand-cron-modal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 581
        echo ($context["text_on_demand_cron_heading"] ?? null);
        echo "</h4>
                </div>
                <div class=\"modal-body form-horizontal\">
                    <div class=\"alert alert-warning\">
                        <i class=\"fa fa-exclamation-circle\"></i> ";
        // line 585
        echo ($context["text_on_demand_cron_intro"] ?? null);
        echo "
                    </div>

                    <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                            <label class=\"checkbox-inline\">
                                <input id=\"checkbox_on_demand_cron_acknowledge\" type=\"checkbox\" value=\"1\" name=\"payment_on_demand_cron_acknowledge\" /> ";
        // line 591
        echo ($context["text_acknowledge_on_demand_cron"] ?? null);
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 597
        echo ($context["text_close"] ?? null);
        echo "</button>
                    <button id=\"squareup-on-demand-cron-ok\" type=\"button\" class=\"btn btn-primary\">";
        // line 598
        echo ($context["text_begin_on_demand_sync"] ?? null);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"squareup-confirm-modal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 608
        echo ($context["text_confirm_action"] ?? null);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <h4 id=\"squareup-confirm-modal-content\"></h4>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 614
        echo ($context["text_close"] ?? null);
        echo "</button>
                    <button id=\"squareup-confirm-ok\" type=\"button\" class=\"btn btn-primary\">";
        // line 615
        echo ($context["text_ok"] ?? null);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"squareup-refund-modal\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <i class=\"fa fa-circle-o-notch fa-spin\"></i>&nbsp;";
        // line 625
        echo ($context["text_loading"] ?? null);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 631
        if (($context["has_new_tax_rates"] ?? null)) {
            // line 632
            echo "        <div class=\"modal fade\" id=\"squareup-tax-rate-modal\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">";
            // line 637
            echo ($context["text_setup_tax_rate"] ?? null);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-horizontal\" id=\"squareup-tax-rate-form\">
                            <p class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
            // line 641
            echo ($context["text_setup_tax_rate_geo_zone_intro"] ?? null);
            echo "</p>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\">
                                    <thead>
                                        <tr>
                                            <th class=\"text-left\">";
            // line 646
            echo ($context["column_tax_rate_name"] ?? null);
            echo "</th>
                                            <th class=\"text-left\">";
            // line 647
            echo ($context["column_tax_rate_percentage"] ?? null);
            echo "</th>
                                            <th class=\"text-left\">";
            // line 648
            echo ($context["column_geo_zone"] ?? null);
            echo "</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"squareup-tax-rates\">
                                        ";
            // line 652
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 653
                echo "                                            <tr data-tax-rate-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 653);
                echo "\">
                                                <td>";
                // line 654
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 654);
                echo "</td>
                                                <td><strong>";
                // line 655
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "percentage", [], "any", false, false, false, 655);
                echo "</strong></td>
                                                <td>
                                                    <select class=\"form-control\" name=\"tax_rate[";
                // line 657
                echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 657);
                echo "]\">
                                                        <option value=\"\">";
                // line 658
                echo ($context["text_select"] ?? null);
                echo "</option>
                                                        ";
                // line 659
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
                    // line 660
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 660);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 660) == twig_get_attribute($this->env, $this->source, $context["tax_rate"], "suggested_geo_zone_id", [], "any", false, false, false, 660))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 660);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 662
                echo "                                                    </select>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 666
            echo "                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <div id=\"squareup-tax-rate-error\" class=\"text-left\"></div>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 673
            echo ($context["text_close"] ?? null);
            echo "</button>
                        <button id=\"squareup-tax-rate-ok\" type=\"button\" class=\"btn btn-primary\">";
            // line 674
            echo ($context["text_ok"] ?? null);
            echo "</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 680
        echo "</div>
<script type=\"text/javascript\">
\$(document).ready(function() {
    var triggerConnectButtons = function() {
        if (\$('#input_payment_squareup_client_id').val() != '' && \$('#input_payment_squareup_client_secret').val() != '') {
            \$('.btn-connect').removeClass('disabled');
        } else {
            \$('.btn-connect').addClass('disabled');
        }
    }

    var setCronUrl = function() {
        \$('#input_payment_squareup_cron_url').val(
            \"";
        // line 693
        echo ($context["payment_squareup_cron_url"] ?? null);
        echo "\".replace('{CRON_TOKEN}', \$('#input_payment_squareup_cron_token').val())
        );
    }

    var randomString = function() {
        return (Math.random() * 100).toString(16).replace('.', '');
    }

    var onConnectClick = function(event) {
        event.preventDefault();
        event.stopPropagation();

        \$.ajax({
            url: '";
        // line 706
        echo ($context["connect"] ?? null);
        echo "',
            dataType: 'json',
            type: 'POST',
            data : {
                payment_squareup_client_id: \$('#input_payment_squareup_client_id').val(),
                payment_squareup_client_secret: \$('#input_payment_squareup_client_secret').val(),
                payment_squareup_webhook_signature: \$('#input_payment_squareup_webhook_signature').val()
            },
            beforeSend : function() {
                \$('#connect-error').empty();
            },
            success: function(json) {
                if (json.redirect) {
                    document.location = json.redirect;
                }

                if (json.error) {
                    \$('#connect-error').html('<span class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"X\"><span aria-hidden=\"true\">&times;</span></button><i class=\"fa fa-exclamation-circle\"></i>&nbsp;' + json.error + '</span>');
                }
            }
        });
    }

    var listTransactions = function(page) {
        \$.ajax({
          url : '";
        // line 731
        echo ($context["url_list_transactions"] ?? null);
        echo "'.replace('{PAGE}', page ? page : transactionListPage),
          dataType : 'json',
          beforeSend : function() {
            \$('#refresh_transactions').button('loading');
            \$('#transactions_pagination').empty();
            \$('#transactions').html('<tr><td colspan=\"9\" class=\"text-center\"><i class=\"fa fa-circle-o-notch fa-spin\"></i>&nbsp;";
        // line 736
        echo ($context["text_loading"] ?? null);
        echo "</td></tr>');
          },
          success : function(data) {
            var html = '';

            if (data.transactions.length) {
              for (var i in data.transactions) {
                var row = data.transactions[i];

                if (row.order_history_data) {
                    \$.ajax({
                        url: '";
        // line 747
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&order_id=' + row.order_id,
                        type: 'post',
                        dataType: 'json',
                        data: row.order_history_data
                    });
                }

                html += '<tr>';
                html += '<td class=\"text-left hidden-xs\">' + (!row.is_merchant_transaction ? '<i class=\"fa fa-warning text-warning\" data-toggle=\"tooltip\" title=\"' + row.text_different_merchant + '\"></i>&nbsp;' : '') + row.transaction_id + '</td>';
                html += '<td class=\"text-left hidden-xs\">' + row.customer + '</td>';
                html += '<td class=\"text-left\"><a target=\"_blank\" href=\"' + row.url_order + '\">' + row.order_id + '</td>';
                html += '<td class=\"text-left hidden-xs\">' + row.status + '</td>';
                html += '<td class=\"text-left hidden-xs\">' + row.amount + '</td>';
                html += '<td class=\"text-left hidden-xs\">' + row.amount_refunded + '</td>';
                html += '<td class=\"text-left hidden-xs hidden-sm\">' + row.ip + '</td>';
                html += '<td class=\"text-left\">' + row.date_created + '</td>';
                html += '<td class=\"text-right\">';

                if (row.is_merchant_transaction) {
                    switch (row.type) {
                        case \"AUTHORIZED\" : {
                            html += '<a class=\"btn btn-success\" data-url-transaction-capture=\"' + row.url_capture + '\" data-confirm-capture=\"' + row.confirm_capture + '\">";
        // line 768
        echo ($context["text_capture"] ?? null);
        echo "</a> ';
                            html += '<a class=\"btn btn-warning\" data-url-transaction-void=\"' + row.url_void + '\" data-confirm-void=\"' + row.confirm_void + '\">";
        // line 769
        echo ($context["text_void"] ?? null);
        echo "</a> ';
                        } break;

                        case \"CAPTURED\" : {
                            if (row.is_fully_refunded) {
                                break;
                            }
                            html += '<a class=\"btn btn-danger\" data-url-transaction-refund=\"' + row.url_refund + '\" data-url-transaction-refund-modal=\"' + row.url_refund_modal + '\">";
        // line 776
        echo ($context["text_refund"] ?? null);
        echo "</a> ';
                        } break;
                    }
                }

                html += ' <a class=\"btn btn-info\" href=\"' + row.url_info + '\">";
        // line 781
        echo ($context["text_view"] ?? null);
        echo "</a>';
                html += '</td>';
                html += '</tr>';
              }
            } else {
              html += '<tr>';
              html += '<td class=\"text-center\" colspan=\"9\">";
        // line 787
        echo ($context["text_no_transactions"] ?? null);
        echo "</td>';
              html += '</tr>';
            }

            \$('#transactions').html(html);
            
            \$('#transactions_pagination').html(data.pagination).find('a[href]').each(function(index,element) {
              \$(this).click(function(e) {
                e.preventDefault();

                transactionListPage = isNaN(\$(this).attr('href')) ? 1 : \$(this).attr('href');

                listTransactions();
              })
            });
          },
          complete : function() {
            \$('#refresh_transactions').button('reset');
          }
        });
    }

    var transactionLoading = function() {
        var message = \$('#transaction-alert').attr('data-message');

        \$('#transaction-alert').html('<div class=\"text-center alert alert-info\"><i class=\"fa fa-circle-o-notch fa-spin\"></i>&nbsp;' + message + '</div>');
    }

    var transactionError = function(message) {
        \$('#transaction-alert').html('<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"X\"><span aria-hidden=\"true\">&times;</span></button><i class=\"fa fa-exclamation-circle\"></i>&nbsp;' + message + '</div>');
    }

    var transactionSuccess = function(message) {
        \$('#transaction-alert').html('<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"X\"><span aria-hidden=\"true\">&times;</span></button><i class=\"fa fa-exclamation-circle\"></i>&nbsp;' + message + '</div>');
    }

    var addOrderHistory = function(data, success_callback) {
        \$.ajax({
            url: '";
        // line 825
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/history&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&order_id=' + data.order_id,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function(json) {
                if (json['error']) {
                    transactionError(json['error']);
                    enableTransactionButtons();
                }

                if (json['success'] && typeof success_callback == 'function') {
                    success_callback();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                transactionError(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                enableTransactionButtons();
            }
        });
    }

    var transactionRequest = function(type, url, data) {
        \$.ajax({
            url : url,
            dataType : 'json',
            type : type,
            data : data,
            beforeSend : transactionLoading,
            success : function(json) {
                if (json.error) {
                    transactionError(json.error);
                    enableTransactionButtons();
                }

                if (json.success && json.order_history_data) {
                    addOrderHistory(json.order_history_data, function() {
                        transactionSuccess(json.success);
                        listTransactions();
                    });
                }
            },
            error : function(xhr, ajaxSettings, thrownError) {
                transactionError(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                enableTransactionButtons();
            }
        });
    }

    var disableTransactionButtons = function() {
        \$('*[data-url-transaction-capture], *[data-url-transaction-void], *[data-url-transaction-refund]').attr('disabled', true);
    }

    var enableTransactionButtons = function() {
        \$('*[data-url-transaction-capture], *[data-url-transaction-void], *[data-url-transaction-refund]').attr('disabled', false);
    }

    var modalConfirm = function(url, text) {
        var modal = '#squareup-confirm-modal';
        var content = '#squareup-confirm-modal-content';
        var button = '#squareup-confirm-ok';

        \$(content).html(text);
        \$(button).unbind().click(function() {
            disableTransactionButtons();

            \$(modal).modal('hide');

            transactionRequest('GET', url);
        });
        
        \$(modal).modal('show');
    }

    var modalRefund = function(url, url_refund_modal) {
        \$('#squareup-refund-modal').modal('show');

        var setModalHtml = function(html) {
            \$('#squareup-refund-modal .modal-content').html(html);
        }

        \$.ajax({
            url : url_refund_modal,
            dataType : 'json',
            success : function(data) {
                if (typeof data.error != 'undefined') {
                    setModalHtml('<div class=\"modal-body\"><div class=\"alert alert-danger\">' + data.error + '</div></div>');
                } else if (typeof data.html != 'undefined') {
                    setModalHtml(data.html);

                    var invalidRefundAmount = function(element) {
                        var value = parseFloat(\$(element).val().replace(/[^0-9\\.\\-]/g, \"\"));
                        var max = parseFloat(\$(element).attr('data-max-allowed').replace(/[^0-9\\.\\-]/g, \"\"));

                        return (value <= 0) || (value > max);
                    };

                    var flow = {
                        itemized : {
                            steps : [
                                \"#squareup-refund-step-itemized-refund\",
                                \"#squareup-refund-step-itemized-restock\"
                            ],
                            final : \"#squareup-refund-confirm-itemized\"
                        },
                        amount : {
                            steps : [],
                            final : \"#squareup-refund-confirm-amount\"
                        }
                    };

                    var breadcrumb = [];

                    var showScreenById = function(screenId) {
                        \$(\".squareup-refund-step\").hide();
                        \$(screenId).show();
                    }

                    \$(\"#squareup-refund-finish\").hide();
                    \$(\"#squareup-refund-back\").hide();
                    \$(\"#squareup-refund-next\").show();
                    showScreenById(\"#squareup-refund-initial\");

                    var showNextScreen = function(type) {
                        var nextScreenIndex = breadcrumb.length;

                        if (typeof flow[type].steps[nextScreenIndex] == 'string') {
                            \$(\"#squareup-refund-finish\").hide();
                            \$(\"#squareup-refund-back\").show();
                            \$(\"#squareup-refund-next\").show();

                            breadcrumb.push(flow[type].steps[nextScreenIndex]);

                            showScreenById(flow[type].steps[nextScreenIndex]);
                        } else if (typeof flow[type].steps[nextScreenIndex] == 'undefined') {
                            \$(\"#squareup-refund-finish\").show();
                            \$(\"#squareup-refund-back\").show();
                            \$(\"#squareup-refund-next\").hide();

                            breadcrumb.push(flow[type].final);

                            showScreenById(flow[type].final);
                        }
                    }

                    \$(\"#squareup-refund-next\").click(function(e) {
                        e.preventDefault();

                        if (\$(this).attr('disabled')) {
                            return;
                        }

                        var type = \$('input[name=\"refund_type\"]:checked').val();

                        showNextScreen(type);

                        if (\$('#squareup-refund-step-itemized-restock').is(':visible')) {
                            var amount_input = '#squareup-refund-itemized-insert';

                            if (!\$(amount_input)[0].checkValidity() || invalidRefundAmount(amount_input)) {
                                \$(amount_input).closest('.form-group').addClass('has-error');
                                showPreviousScreen(type);
                            } else {
                                \$(amount_input).closest('.form-group').removeClass('has-error');

                                // No issues here. Restrict the allowed re-stocks according to the quantity selections from the refund screen

                                var text_summary = 
                                    \"";
        // line 992
        echo ($context["text_itemized_refund_restock_total"] ?? null);
        echo "\"
                                        .replace(/{price_prefix}/, \$(amount_input).attr('data-price-prefix'))
                                        .replace(/{price_suffix}/, \$(amount_input).attr('data-price-suffix'))
                                        .replace(/{price}/, \$(amount_input).val().replace(/[^0-9\\.\\-]/g, \"\"));

                                \$('#itemized_refund_restock_total').html(text_summary);
                            }
                        } else if (\$('#squareup-refund-confirm-itemized').is(':visible')) {
                            var rows = {};

                            var populateRows = function(index, element) {
                                var order_product_id = \$(element).attr('data-order-product-id');
                                var type = \$(element).attr('data-type');
                                var quantity = parseInt(\$(element).val());

                                if (quantity <= 0) {
                                    return;
                                }

                                if (typeof rows[order_product_id] == 'undefined') {
                                    rows[order_product_id] = {
                                        'name' : \$(element).closest('tr').find('td.itemized_name').html(),
                                        'model' : \$(element).closest('tr').find('td.itemized_model').html(),
                                        'quantity_restock' : 0,
                                        'quantity_refund' : 0
                                    };
                                }

                                rows[order_product_id][type] += quantity;
                            };

                            \$('[name^=\"itemized_restock\"]').each(populateRows);
                            \$('[name^=\"itemized_refund\"]').each(populateRows);

                            if (Object.keys(rows).length === 0) {
                                \$('#itemized_refund_restock_items').html('<div class=\"alert alert-warning\">";
        // line 1027
        echo ($context["text_no_items_restock_refund"] ?? null);
        echo "</div>');
                            } else {
                                var html = '';

                                html += '<div class=\"table-responsive\">';
                                html += '<table class=\"table table-bordered table-hover\">';
                                html += '<thead>';
                                html += '<tr>';
                                html += '<th>";
        // line 1035
        echo ($context["column_product_name"] ?? null);
        echo "</th>';
                                html += '<th>";
        // line 1036
        echo ($context["column_product_model"] ?? null);
        echo "</th>';
                                html += '<th>";
        // line 1037
        echo ($context["column_product_quantity_refund"] ?? null);
        echo "</th>';
                                html += '<th>";
        // line 1038
        echo ($context["column_product_quantity_restock"] ?? null);
        echo "</th>';
                                html += '</tr>';
                                html += '</thead>';
                                html += '<tbody>';

                                \$.each(rows, function(index, row) {
                                    html += '<tr>';
                                    html += '<td>' + row.name + '</td>';
                                    html += '<td>' + row.model + '</td>';
                                    html += '<td>' + row.quantity_refund + '</td>';
                                    html += '<td>' + row.quantity_restock + '</td>';
                                    html += '</tr>';
                                });

                                html += '</tbody>';
                                html += '</table>';
                                html += '</div>';

                                \$('#itemized_refund_restock_items').html(html);
                            }
                        }
                    });

                    var showPreviousScreen = function(type) {
                        breadcrumb.pop();

                        var candidatePreviousScreen = breadcrumb[breadcrumb.length - 1];

                        if (typeof candidatePreviousScreen == 'undefined') {
                            \$(\"#squareup-refund-finish\").hide();
                            \$(\"#squareup-refund-back\").hide();
                            \$(\"#squareup-refund-next\").show();

                            showScreenById(\"#squareup-refund-initial\");
                        } else if (typeof candidatePreviousScreen == 'string') {
                            \$(\"#squareup-refund-finish\").hide();
                            \$(\"#squareup-refund-back\").show();
                            \$(\"#squareup-refund-next\").show();

                            showScreenById(candidatePreviousScreen);
                        }
                    }

                    \$(\"#squareup-refund-back\").click(function(e) {
                        e.preventDefault();

                        showPreviousScreen(\$('input[name=\"refund_type\"]:checked').val());
                    });

                    var refundInputValidate = function() {
                        var result = true;
                        var reason_input = \"#squareup-refund-reason-insert\";
                        var amount_input = \"#squareup-refund-amount-insert\";

                        if (!\$(reason_input)[0].checkValidity()) {
                            \$(reason_input).closest('.form-group').addClass('has-error');
                            result = false;
                        } else {
                            \$(reason_input).closest('.form-group').removeClass('has-error');
                        }

                        if (!\$(amount_input)[0].checkValidity() || invalidRefundAmount(amount_input)) {
                            \$(amount_input).closest('.form-group').addClass('has-error');
                            result = false;
                        } else {
                            \$(amount_input).closest('.form-group').removeClass('has-error');
                        }

                        return result;
                    }

                    var validateNext = function(e) {
                        if (parseInt(\$(this).val()) > parseInt(\$(this).attr(\"max\")) || parseInt(\$(this).val()) < 0) {
                            \$(this).css('background-color', '#f5c1bb');
                            \$(\"#squareup-refund-next\").attr('disabled', true);
                        } else {
                            \$(this).css('background-color', 'white');
                            \$(\"#squareup-refund-next\").attr('disabled', false);
                        }
                    }

                    \$('[name^=\"itemized_refund\"]').change(function(e) {
                        var element = \$('#squareup-refund-itemized-insert').first();
                        var currentValue = 0;
                        var price = parseFloat(\$(this).attr('data-price').replace(/[^0-9\\.\\-]/g, \"\"));

                        \$('[name^=\"itemized_refund\"]').each(function(index, element) {
                            currentValue += price * parseInt(\$(element).val());
                        });
                        
                        var max = parseFloat(\$(element).attr('data-max-allowed').replace(/[^0-9\\.\\-]/g, \"\"));

                        if (currentValue > max) {
                            currentValue = max;
                        } else if (currentValue < 0) {
                            currentValue = 0;
                        }

                        \$(element).val(currentValue);
                    });

                    \$('[name^=\"itemized_refund\"], [name^=\"itemized_restock\"]').change(validateNext);
                    \$('[name^=\"itemized_refund\"], [name^=\"itemized_restock\"]').keyup(validateNext);

                    \$(\"#squareup-refund-finish\").click(function(e) {
                        e.preventDefault();

                        if (\$('input[name=\"refund_type\"]:checked').val() == 'amount') {
                            // Amount Refund - validate the manually inserted amount and prepare the POST request
                            if (!refundInputValidate()) {
                                return;
                            }

                            disableTransactionButtons();

                            \$('#squareup-refund-modal').modal('hide');

                            transactionRequest('POST', url, {
                                reason : \$(\"#squareup-refund-reason-insert\").val(),
                                amount : \$(\"#squareup-refund-amount-insert\").val()
                            });
                        } else {
                            // Itemized Refund - display refund confirmation and prepare the POST request
                            disableTransactionButtons();

                            \$('#squareup-refund-modal').modal('hide');

                            var restock = {};
                            var refund = {};

                            \$('[name^=\"itemized_restock\"]').each(function(index, element) {
                                var key = \$(element).attr('data-order-product-id');
                                var value = parseInt(\$(element).val());

                                if (value > 0) {
                                    restock[key] = value;
                                }
                            });

                            \$('[name^=\"itemized_refund\"]').each(function(index, element) {
                                var key = \$(element).attr('data-order-product-id');
                                var value = parseInt(\$(element).val());

                                if (value > 0) {
                                    refund[key] = value;
                                }
                            });

                            transactionRequest('POST', url, {
                                reason : \"";
        // line 1187
        echo ($context["text_itemized_refund_reason"] ?? null);
        echo "\",
                                amount : \$(\"#squareup-refund-itemized-insert\").val(),
                                restock : restock,
                                refund : refund
                            });
                        }
                    });
                }
            },
            error : function(xhr, ajaxSettings, thrownError) {
                setModalHtml('<div class=\"modal-body\"><div class=\"alert alert-danger\">' + '(' + xhr.statusText + '): ' + xhr.responseText + '</div></div>');
            }
        });
    }

    var transactionListPage = 1;

    \$('.nav-tabs a[href=\"#";
        // line 1204
        echo ($context["tab"] ?? null);
        echo "\"]').tab('show');

    ";
        // line 1206
        if (($context["order_status_settings_hidden"] ?? null)) {
            // line 1207
            echo "        \$('#order_status_settings_intro').show();
        \$('#order_status_settings').hide();

        \$('#order_status_settings_expand').click(function(e) {
            e.preventDefault();
            e.stopPropagation();

            \$('#order_status_settings_intro').hide();
            \$('#order_status_settings').slideDown();
        });
    ";
        }
        // line 1218
        echo "
    \$('#advanced_settings_intro').show();
    \$('#advanced_settings').hide();

    \$('#advanced_settings_expand').click(function(e) {
        e.preventDefault();
        e.stopPropagation();

        \$('#advanced_settings_intro').hide();
        \$('#advanced_settings').slideDown();
    });

    ";
        // line 1230
        if (($context["error_cron_standard_period"] ?? null)) {
            // line 1231
            echo "        \$('#advanced_settings_expand').trigger('click');
    ";
        }
        // line 1233
        echo "
    \$('#input_payment_squareup_client_id, #input_payment_squareup_client_secret')
        .change(triggerConnectButtons)
        .keyup(triggerConnectButtons)
        .trigger('change');

    \$('#refresh-cron-token').click(function() {
        \$('#input_payment_squareup_cron_token').val(randomString() + randomString());
        setCronUrl();
    });

    \$('#connect-button').click(onConnectClick);
    
    \$('#reconnect-button').click(onConnectClick);

    \$(document).on('click', '*[data-url-transaction-capture]', function() {
        if (\$(this).attr('disabled')) return;

        modalConfirm(
            \$(this).attr('data-url-transaction-capture'),
            \$(this).attr('data-confirm-capture')
        );
    });
        
    \$(document).on('click', '*[data-url-transaction-void]', function() {
        if (\$(this).attr('disabled')) return;

        modalConfirm(
            \$(this).attr('data-url-transaction-void'),
            \$(this).attr('data-confirm-void')
        );
    });

    \$(document).on('click', '*[data-url-transaction-refund]', function() {
        if (\$(this).attr('disabled')) return;

        modalRefund(\$(this).attr('data-url-transaction-refund'), \$(this).attr('data-url-transaction-refund-modal'));
    });
    
    \$(document).on('click', '#cron_click', function() { 
        \$('.nav-tabs a[href=\"#tab-setting\"]').tab('show');

        \$('html, body').animate({
            scrollTop: \$(\"#checkbox_payment_squareup_cron_acknowledge\").closest('fieldset').offset().top
        }, 2000);
    });

    \$(document).on('click', '#focus_connect', function() {
        \$('.nav-tabs a[href=\"#tab-setting\"]').tab('show');

        \$('html, body').animate({
            scrollTop: \$(\"#input_payment_squareup_client_id\").closest('fieldset').offset().top
        }, 2000);
    });

    ";
        // line 1288
        if (($context["has_new_tax_rates"] ?? null)) {
            // line 1289
            echo "        \$(document).on('click', '#squareup-tax-rate-ok', function() {
            var taxRateError = function(message) {
                \$('#squareup-tax-rate-error').html('<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"X\"><span aria-hidden=\"true\">&times;</span></button><i class=\"fa fa-exclamation-circle\"></i>&nbsp;' + message + '</div>');
            };

            \$.ajax({
                url : '";
            // line 1295
            echo ($context["url_tax_rate"] ?? null);
            echo "',
                dataType : 'json',
                type : 'POST',
                data : \$('#squareup-tax-rate-form :input'),
                beforeSend : function() {
                    \$('#squareup-tax-rate-error').empty();
                    \$('[data-tax-rate-id]').removeClass('bg-danger');
                    \$('#squareup-tax-rate-ok').button('loading');
                },
                success : function(json) {
                    if (json.error) {
                        taxRateError(json.error);

                        if (json.error_tax_rate_id) {
                            \$.each(json.error_tax_rate_id, function(index, tax_rate_id) {
                                \$('tr[data-tax-rate-id=\"' + tax_rate_id + '\"]').addClass('bg-danger');
                            });
                        }
                    }

                    if (json.success) {
                        \$('#squareup-tax-rate-modal').modal('hide');
                    }
                },
                complete: function() {
                    \$('#squareup-tax-rate-ok').button('reset');
                },
                error : function(xhr, ajaxSettings, thrownError) {
                    taxRateError(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });

        if (\$('#squareup-tax-rate-modal').length > 0) {
            \$('#squareup-tax-rate-modal').modal('show');
        }
    ";
        }
        // line 1332
        echo "
    ";
        // line 1333
        if (($context["initial_sync_not_performed"] ?? null)) {
            // line 1334
            echo "        var fetchSyncModalOptions = function(modal) {
            var submitButton = \$(modal).find('button[type=\"button\"][form=\"form-square-checkout\"]');

            \$.ajax({
                url : '";
            // line 1338
            echo ($context["url_sync_modal_options"] ?? null);
            echo "',
                dataType : 'json',
                type : 'POST',
                data : \$('#form-square-checkout :input'),
                beforeSend : function() {
                    \$(submitButton).button('loading');
                },
                success : function(json) {
                    if (!json.already_synced) {
                        \$(modal).find('.modal-body').html(json.html);
                        \$(submitButton).button('reset');
                    } else {
                        \$(submitButton).trigger('click', [true]);
                    }
                }
            });
        }

        \$('#form-square-checkout').on('submit', function(e, forced) {
            if (typeof forced == 'undefined' && \$('#dropdown_payment_squareup_sync_source').val() != 'none' && \$(event.currentTarget).closest('#squareup-sync-modal').length == 0) {
                var modal = \$('#squareup-sync-modal').modal('show');

                fetchSyncModalOptions(modal);

                return false;
            }
        });
    ";
        }
        // line 1366
        echo "
    \$('button[type=\"button\"][form=\"form-square-checkout\"]').click(function(e, forced) {
        var args = typeof forced != 'undefined' ? [true] : [];

        \$('#form-square-checkout').trigger('submit', args);
    });

    \$('#on-demand-cron').click(function(e) {
        e.preventDefault();

        if (\$(this).attr('disabled')) return;

        \$('#squareup-on-demand-cron-modal').modal('show');

        \$('#checkbox_on_demand_cron_acknowledge').attr('checked', false).trigger('change');
    });

    \$('#checkbox_on_demand_cron_acknowledge').change(function(e) {
        if (\$(this).is(':checked')) {
            \$('#squareup-on-demand-cron-ok').attr('disabled', false);
        } else {
            \$('#squareup-on-demand-cron-ok').attr('disabled', true);
        }
    });

    \$('#squareup-on-demand-cron-ok').click(function(e) {
        if (\$(this).attr('disabled')) return;

        document.location = \$('#on-demand-cron').attr('href');
    });

    var checkCronStatus = function() {
        \$.ajax({
            url : '";
        // line 1399
        echo ($context["url_check_cron_status"] ?? null);
        echo "',
            dataType : 'json',
            success : function(data) {
                \$('#on-demand-cron').attr('disabled', data.on_demand_status);

                if (data.on_demand_status) {
                    \$('#on-demand-cron i').addClass('fa-spin');
                } else {
                    \$('#on-demand-cron i').removeClass('fa-spin');
                }

                \$('#cron_status_text').val(data.cron_status_text);
            },
            complete: function() {
                setTimeout(checkCronStatus, 5000);
            }
        });
    };

    checkCronStatus();

    setCronUrl();

    listTransactions();
});
</script>
";
        // line 1425
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/squareup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2606 => 1425,  2577 => 1399,  2542 => 1366,  2511 => 1338,  2505 => 1334,  2503 => 1333,  2500 => 1332,  2460 => 1295,  2452 => 1289,  2450 => 1288,  2393 => 1233,  2389 => 1231,  2387 => 1230,  2373 => 1218,  2360 => 1207,  2358 => 1206,  2353 => 1204,  2333 => 1187,  2181 => 1038,  2177 => 1037,  2173 => 1036,  2169 => 1035,  2158 => 1027,  2120 => 992,  1948 => 825,  1907 => 787,  1898 => 781,  1890 => 776,  1880 => 769,  1876 => 768,  1850 => 747,  1836 => 736,  1828 => 731,  1800 => 706,  1784 => 693,  1769 => 680,  1760 => 674,  1756 => 673,  1747 => 666,  1738 => 662,  1723 => 660,  1719 => 659,  1715 => 658,  1711 => 657,  1706 => 655,  1702 => 654,  1697 => 653,  1693 => 652,  1686 => 648,  1682 => 647,  1678 => 646,  1670 => 641,  1663 => 637,  1656 => 632,  1654 => 631,  1645 => 625,  1632 => 615,  1628 => 614,  1619 => 608,  1606 => 598,  1602 => 597,  1593 => 591,  1584 => 585,  1577 => 581,  1566 => 572,  1557 => 566,  1551 => 563,  1545 => 560,  1539 => 556,  1537 => 555,  1522 => 547,  1514 => 546,  1506 => 543,  1494 => 538,  1486 => 537,  1478 => 534,  1473 => 532,  1461 => 527,  1453 => 526,  1445 => 523,  1431 => 512,  1427 => 511,  1423 => 510,  1419 => 509,  1415 => 508,  1411 => 507,  1407 => 506,  1403 => 505,  1399 => 504,  1389 => 497,  1380 => 490,  1372 => 486,  1366 => 484,  1364 => 483,  1354 => 480,  1346 => 479,  1337 => 475,  1332 => 473,  1318 => 466,  1310 => 465,  1305 => 463,  1298 => 461,  1286 => 454,  1281 => 452,  1274 => 448,  1268 => 444,  1262 => 442,  1260 => 441,  1252 => 440,  1246 => 437,  1236 => 432,  1230 => 429,  1220 => 424,  1214 => 421,  1201 => 415,  1193 => 414,  1185 => 411,  1173 => 406,  1165 => 405,  1157 => 402,  1145 => 397,  1137 => 396,  1129 => 393,  1117 => 388,  1109 => 387,  1101 => 384,  1092 => 380,  1086 => 377,  1079 => 372,  1064 => 370,  1060 => 369,  1056 => 368,  1050 => 365,  1045 => 362,  1032 => 359,  1026 => 358,  1023 => 357,  1019 => 356,  1011 => 353,  1003 => 348,  999 => 347,  994 => 345,  987 => 340,  981 => 338,  979 => 337,  976 => 336,  961 => 334,  957 => 333,  953 => 332,  945 => 329,  940 => 326,  934 => 324,  932 => 323,  929 => 322,  914 => 320,  910 => 319,  906 => 318,  898 => 315,  893 => 312,  887 => 310,  885 => 309,  882 => 308,  867 => 306,  863 => 305,  859 => 304,  851 => 301,  846 => 298,  840 => 296,  838 => 295,  835 => 294,  820 => 292,  816 => 291,  812 => 290,  804 => 287,  799 => 284,  793 => 282,  791 => 281,  788 => 280,  773 => 278,  769 => 277,  765 => 276,  757 => 273,  752 => 270,  746 => 268,  744 => 267,  741 => 266,  726 => 264,  722 => 263,  718 => 262,  710 => 259,  703 => 255,  699 => 254,  694 => 252,  681 => 246,  673 => 245,  665 => 244,  657 => 241,  644 => 235,  636 => 234,  628 => 231,  621 => 227,  610 => 221,  602 => 218,  589 => 212,  581 => 211,  573 => 208,  568 => 205,  562 => 203,  560 => 202,  557 => 201,  542 => 199,  538 => 198,  532 => 197,  525 => 195,  520 => 193,  514 => 189,  508 => 187,  506 => 186,  502 => 185,  495 => 183,  483 => 178,  475 => 177,  467 => 174,  462 => 171,  456 => 169,  454 => 168,  444 => 165,  438 => 162,  431 => 158,  424 => 154,  415 => 150,  408 => 146,  401 => 144,  396 => 142,  392 => 141,  386 => 137,  379 => 133,  375 => 132,  369 => 129,  365 => 128,  361 => 126,  356 => 124,  350 => 121,  345 => 120,  343 => 119,  332 => 113,  324 => 110,  316 => 105,  308 => 102,  300 => 97,  292 => 94,  286 => 90,  280 => 88,  278 => 87,  272 => 86,  264 => 83,  258 => 79,  252 => 77,  250 => 76,  244 => 75,  236 => 72,  225 => 66,  217 => 65,  213 => 63,  205 => 61,  197 => 59,  195 => 58,  185 => 51,  181 => 50,  177 => 49,  172 => 47,  168 => 46,  163 => 44,  157 => 41,  152 => 38,  145 => 36,  141 => 34,  139 => 33,  130 => 32,  126 => 31,  120 => 27,  109 => 25,  105 => 24,  100 => 22,  93 => 21,  85 => 19,  82 => 18,  74 => 16,  72 => 15,  65 => 14,  57 => 10,  51 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/squareup.twig", "");
    }
}
