<?php

/* marketplace/modification.twig */
class __TwigTemplate_44c36e89c48145c439bb814f52e67cc8cd9beaee4b0777ea45470d28d6d42407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a> <a href=\"";
        echo (isset($context["clear"]) ? $context["clear"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
<a href=\"";
        // line 6
        echo (isset($context["log_error"]) ? $context["log_error"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_log_error"]) ? $context["button_log_error"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-exclamation-triangle\"></i></a> <a href=\"";
        echo (isset($context["files"]) ? $context["files"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_files"]) ? $context["button_files"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-list-alt\"></i></a> <a href=\"";
        echo (isset($context["new"]) ? $context["new"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_new"]) ? $context["button_new"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_refresh"]) ? $context["text_refresh"] : null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_log"]) ? $context["tab_log"] : null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 40
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 47
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 49
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        }
        // line 50
        echo "</td>
                      <td class=\"text-left\">";
        // line 51
        if (((isset($context["sort"]) ? $context["sort"] : null) == "author")) {
            // line 52
            echo "                        <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a>
                        ";
        } else {
            // line 54
            echo "                        <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a>
                        ";
        }
        // line 55
        echo "</td>
                      <td class=\"text-left\">";
        // line 56
        if (((isset($context["sort"]) ? $context["sort"] : null) == "version")) {
            // line 57
            echo "                        <a href=\"";
            echo (isset($context["sort_version"]) ? $context["sort_version"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_version"]) ? $context["column_version"] : null);
            echo "</a>
                        ";
        } else {
            // line 59
            echo "                        <a href=\"";
            echo (isset($context["sort_version"]) ? $context["sort_version"] : null);
            echo "\">";
            echo (isset($context["column_version"]) ? $context["column_version"] : null);
            echo "</a>
                        ";
        }
        // line 60
        echo "</td>
                      <td class=\"text-left\">";
        // line 61
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            // line 62
            echo "                        <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        } else {
            // line 64
            echo "                        <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>
                        ";
        }
        // line 65
        echo "</td>
                      <td class=\"text-left\">";
        // line 66
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            // line 67
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        } else {
            // line 69
            echo "                        <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>
                        ";
        }
        // line 70
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        if ((isset($context["modifications"]) ? $context["modifications"] : null)) {
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modifications"]) ? $context["modifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 77
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 78
                if (twig_in_filter($this->getAttribute($context["modification"], "modification_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 79
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["modification"], "modification_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 81
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["modification"], "modification_id", array());
                    echo "\" />
                        ";
                }
                // line 82
                echo "</td>
                      <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["modification"], "name", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 84
                echo $this->getAttribute($context["modification"], "author", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 85
                echo $this->getAttribute($context["modification"], "version", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 86
                echo $this->getAttribute($context["modification"], "status", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["modification"], "date_added", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 88
                if ($this->getAttribute($context["modification"], "link", array())) {
                    // line 89
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["modification"], "link", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_link"]) ? $context["button_link"] : null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                        ";
                } else {
                    // line 91
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                        ";
                }
                // line 93
                echo "
        <a href=\"";
                // line 94
                echo $this->getAttribute($context["modification"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
        <a href=\"";
                // line 95
                echo $this->getAttribute($context["modification"], "download", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_download"]) ? $context["button_download"] : null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-cloud-download\"></i></a>
      
                        ";
                // line 97
                if ( !$this->getAttribute($context["modification"], "enabled", array())) {
                    // line 98
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["modification"], "enable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                        ";
                } else {
                    // line 100
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["modification"], "disable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                        ";
                }
                // line 101
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    ";
        } else {
            // line 105
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 106
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 109
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 114
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 115
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 120
        echo (isset($context["log"]) ? $context["log"] : null);
        echo "</textarea>
            </p>
            <div class=\"text-center\"><a href=\"";
        // line 122
        echo (isset($context["clear_log"]) ? $context["clear_log"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 129
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketplace/modification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 129,  400 => 122,  395 => 120,  387 => 115,  383 => 114,  376 => 109,  370 => 106,  367 => 105,  364 => 104,  356 => 101,  348 => 100,  340 => 98,  338 => 97,  331 => 95,  325 => 94,  322 => 93,  318 => 91,  310 => 89,  308 => 88,  304 => 87,  300 => 86,  296 => 85,  292 => 84,  288 => 83,  285 => 82,  279 => 81,  273 => 79,  271 => 78,  268 => 77,  263 => 76,  261 => 75,  254 => 71,  251 => 70,  243 => 69,  233 => 67,  231 => 66,  228 => 65,  220 => 64,  210 => 62,  208 => 61,  205 => 60,  197 => 59,  187 => 57,  185 => 56,  182 => 55,  174 => 54,  164 => 52,  162 => 51,  159 => 50,  151 => 49,  141 => 47,  139 => 46,  130 => 40,  123 => 36,  119 => 35,  112 => 31,  105 => 28,  97 => 24,  94 => 23,  86 => 19,  84 => 18,  78 => 14,  67 => 12,  63 => 11,  58 => 9,  51 => 7,  37 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-info"><i class="fa fa-refresh"></i></a> <a href="{{ clear }}" data-toggle="tooltip" title="{{ button_clear }}" class="btn btn-warning"><i class="fa fa-eraser"></i></a>*/
/* <a href="{{ log_error }}" data-toggle="tooltip" title="{{ button_log_error }}" class="btn btn-default"><i class="fa fa-exclamation-triangle"></i></a> <a href="{{ files }}" data-toggle="tooltip" title="{{ button_files }}" class="btn btn-default"><i class="fa fa-list-alt"></i></a> <a href="{{ new }}" data-toggle="tooltip" title="{{ button_new }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-modification').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_refresh }}</div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*           <li><a href="#tab-log" data-toggle="tab">{{ tab_log }}</a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-general">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-modification">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">{% if sort == 'name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'author' %}*/
/*                         <a href="{{ sort_author }}" class="{{ order|lower }}">{{ column_author }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_author }}">{{ column_author }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'version' %}*/
/*                         <a href="{{ sort_version }}" class="{{ order|lower }}">{{ column_version }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_version }}">{{ column_version }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'status' %}*/
/*                         <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_status }}">{{ column_status }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'date_added' %}*/
/*                         <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_date_added }}">{{ column_date_added }}</a>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if modifications %}*/
/*                     {% for modification in modifications %}*/
/*                     <tr>*/
/*                       <td class="text-center">{% if modification.modification_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ modification.modification_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ modification.modification_id }}" />*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{{ modification.name }}</td>*/
/*                       <td class="text-left">{{ modification.author }}</td>*/
/*                       <td class="text-left">{{ modification.version }}</td>*/
/*                       <td class="text-left">{{ modification.status }}</td>*/
/*                       <td class="text-left">{{ modification.date_added }}</td>*/
/*                       <td class="text-right">{% if modification.link %}*/
/*                         <a href="{{ modification.link }}" data-toggle="tooltip" title="{{ button_link }}" class="btn btn-info" target="_blank"><i class="fa fa-link"></i></a>*/
/*                         {% else %}*/
/*                         <button type="button" class="btn btn-info" disabled="disabled"><i class="fa fa-link"></i></button>*/
/*                         {% endif %}*/
/* */
/*         <a href="{{ modification.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*         <a href="{{ modification.download }}" data-toggle="tooltip" title="{{ button_download }}" class="btn btn-success"><i class="fa fa-cloud-download"></i></a>*/
/*       */
/*                         {% if not modification.enabled %}*/
/*                         <a href="{{ modification.enable }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                         {% else %}*/
/*                         <a href="{{ modification.disable }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                         {% endif %}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="tab-pane" id="tab-log">*/
/*             <p>*/
/*               <textarea wrap="off" rows="15" class="form-control">{{ log }}</textarea>*/
/*             </p>*/
/*             <div class="text-center"><a href="{{ clear_log }}" class="btn btn-danger"><i class="fa fa-eraser"></i> {{ button_clear }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
